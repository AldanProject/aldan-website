<!DOCTYPE html>
<!-- Made by Aldan Project | 2018 -->
<html class="login">
  <head>
    <meta charset="utf-8">
    <title>Buscar publicación | Aldan Project</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../lib/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat|Poppins" rel="stylesheet">
    <!-- Styles -->

    <!-- Login check -->
    <?php include("lib/login-check.php"); ?>
    <!-- Login check -->
  </head>
  <body class="login">
    <?php include("lib/search-post.php"); ?>
    <div class="login">
      <div class="control-panel">
        <form action="panel.php" class="logout">
          <input type="submit" value="Regresar" class="return-search">
        </form>
        <h2 class="main">Buscar publicación</h2>
        <form action="search.php" method="post" class="new-post">
          <input type="search" name="search-keywords">
          <t class="center">Buscar por</t>
          <select name="search-type">
            <option value="0">Título</option>
            <option value="0">ID</option>
          </select>
          <div class="check">
            <input type="checkbox" name="search-same">Coincidir mayúsculas y minúsculas
          </div>
          <input type="submit" value="Buscar">
        </form>
        <form action="search.php" method="get" class="new-post">
          <input type="submit" value="Mostrar todas">
        </form>
      </div>
    </div>
  </body>
</html>
