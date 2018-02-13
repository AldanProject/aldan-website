<!DOCTYPE html>
<!-- Made by Aldan Project | 2018 -->
<html class="login">
  <head>
    <meta charset="utf-8">

    <?php
    if(isset($_GET['new'])) echo '<title>Nueva publicación | Aldan Project</title>';
    else if(isset($_GET['mod'])) echo '<title>Editar publicación | Aldan Project</title>';
    ?>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../lib/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat|Poppins" rel="stylesheet">
    <!-- Styles -->

    <!-- Login check -->
    <?php include("lib/login-check.php"); ?>
    <!-- Login check -->
  </head>
  <body class="login">
    <div class="login">
      <div class="control-panel">
        <form action="panel.php" class="logout">
          <input type="submit" value="Regresar" class="return">
        </form>
        <?php include("lib/post-query.php"); ?>
        <form action="<?php if(isset($_GET['new'])) echo 'lib/new-post.php'; else echo 'lib/mod-post.php'; ?>" method="post" class="new-post" enctype="multipart/form-data">
          <t class="inline-element">Título</t>
          <input type="text" name="post-title" required value="<?php if(isset($_GET['id'])) echo $title; ?>">
          <t class="inline-element">Imágen</t>
          <input type="file" name="post-image" accept="image/jpeg" required><br>
          <t>Descripción</t>
          <textarea rows="5" cols="87" name="post-description" required><?php if(isset($_GET['id'])) echo $description; ?></textarea>
          <t>Contenido</t>
          <textarea rows="8" cols="87" name="post-content" required><?php if(isset($_GET['id'])) echo $content; ?></textarea>
          <?php
          if(isset($_GET['new'])) echo '<input type="submit" value="Publicar">';
          else if(isset($_GET['mod'])) echo '<input type="submit" value="Guardar cambios">';
          ?>
        </form>
        <?php
        if(isset($_GET['error'])) echo '<p>No se pudo crear la publicación</p>';
        else if(isset($_GET['errorImg'])) echo '<p>No se pudo subir la imagen</p>';
        ?>
      </div>
    </div>
  </body>
</html>
