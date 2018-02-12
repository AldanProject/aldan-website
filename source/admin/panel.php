<!DOCTYPE html>
<!-- Made by Aldan Project | 2018 -->
<html class="login">
  <head>
    <meta charset="utf-8">
    <title>Panel del control | Aldan Project</title>
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
        <form action="lib/logout.php" method="post" class="logout">
          <input type="submit" value="Cerrar sesión">
        </form>
        <h2>Crear nueva publicación</h2>
        <form action="lib/new-post.php" method="post" class="new-post">
          <t class="inline-element">Título</t>
          <input type="text" name="post-title">
          <t class="inline-element">Imágen</t>
          <input type="file" name="post-image" accept="image/jpeg"><br>
          <t>Descripción</t>
          <textarea rows="5" cols="87" name="post-desciption"></textarea>
          <t>Contenido</t>
          <textarea rows="8" cols="87" name="post-content"></textarea>
          <input type="submit" value="Publicar">
        </form>
      </div>
    </div>
  </body>
</html>
