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
        <h2 class="main">Panel de administración</h2>
        <a href="post.php?new">Nueva publicación</a>
        <a href="search.php">Buscar publicación</a>
        <h3>Usuarios</h3>
        <a href="#">Agregar usuario</a>
        <a href="#">Buscar usuario</a>
        <?php
        if(isset($_GET['error'])) echo '<p>No se pudo crear la publicación</p>';
        else if(isset($_GET['errorImg'])) echo '<p>No se pudo subir la imagen</p>';
        ?>
      </div>
    </div>
  </body>
</html>
