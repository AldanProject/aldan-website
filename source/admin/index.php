<!DOCTYPE html>
<!-- Made by Aldan Project | 2018 -->
<html class="login">
  <head>
    <meta charset="utf-8">
    <title>Inicio de sesión | Aldan Project</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../lib/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat|Poppins" rel="stylesheet">
    <!-- Styles -->

    <!-- User logged -->
    <?php
    session_start();
    if(isset($_SESSION['username']))
    {
      header("Location: panel.php");
    }
    ?>
    <!-- User logged -->
  </head>
  <body class="login">
    <!-- Form -->
    <div class="login">
      <form action="lib/login.php" method="post" class="log-form">
        <h1>Aldan Project</h1><hr>
        <p>Usuario</p>
        <input type="text" name="username" required>
        <p>Contraseña</p>
        <input type="password" name="password" required><br>
        <input type="submit" value="Entrar">
        <?php
        if(isset($_GET['e']))
        {
          switch($_GET['e'])
          {
            case 1:
              echo '<p class="error">Error en consulta</p>';
              break;
            case 2:
              echo '<p class="error">Usuario/contraseña incorrecto</p>';
              break;
          }
        }
        ?>
      </form>
    </div>
    <!-- Form -->
  </body>
</html>
