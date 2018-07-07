<!DOCTYPE html>
<!-- Made by Aldan Project | 2018 -->
<html>
  <head>
    <?php include("lib/config.php"); ?>
    <meta charset="utf-8">
    <title>Inicio | Aldan Project</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="lib/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat|Poppins" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.png">
    <!--Styles -->
  </head>
  <body class="blog">
    <!-- Navigation bar -->
    <?php include("inc/navbar.php"); ?>
    <!-- Navigation bar -->

    <!-- Articles section -->
    <div class="post main">
      <?php include("inc/blog_posts.php"); ?>
    </div>
    <!-- Articles section -->

    <!-- Footer -->
    <?php include("inc/footer.php"); ?>
    <!-- Footer -->
  </body>
</html>
