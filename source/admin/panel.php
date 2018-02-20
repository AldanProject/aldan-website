<!DOCTYPE html>
<!-- Made by Aldan Project | 2018 -->
<html class="login">
  <head>
    <meta charset="utf-8">
    <title>Panel del control | Aldan Project</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../lib/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat|Poppins" rel="stylesheet">
    <link rel="icon" type="image/png" href="../favicon.png">
    <!-- Styles -->

    <!-- Login check -->
    <?php include("lib/login-check.php"); ?>
    <!-- Login check -->
  </head>
  <body class="login">
    <div class="login">
      <div class="control-panel">
        <h4><?php echo "Bienvenido/a " . $_SESSION['username']; ?></h4>
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
        if(isset($_GET['m']))
        {
          switch ($_GET['m'])
          {
            case 0:
              echo '<p>No se pudo crear la publicación</p>';
              break;
            case 1:
              echo '<p>No se pudo subir la imagen</p>';
              break;
            case 2:
              echo '<p>Se creó la publicación exitosamente</p>';
              break;
            case 3:
              echo '<p>La publicación fue eliminada exitosamente</p>';
              break;
            case 4:
              echo '<p>No se pudo eliminar la publicación</p>';
              break;
            case 5:
              echo '<p>No se pudo realizar los cambios</p>';
              break;
            case 6:
              echo '<p>Se han guardado los cambios</p>';
              break;
            case 10:
              echo '<p>Faltan argumentos</p>';
              break;
            default:
              echo '<p>Se ha generado un error desconocido</p>';
              break;
          }
        }
        ?>
      </div>
    </div>
  </body>
</html>
