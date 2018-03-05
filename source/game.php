<!DOCTYPE html>
<!-- Made by Aldan Project | 2018 -->
<html>
  <head>
    <?php include("lib/config.php"); ?>
    <meta charset="utf-8">
    <title>Sobre nosotros | Aldan Project</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo SERVER; ?>lib/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat|Poppins" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo SERVER; ?>favicon.png">
    <!--Styles -->
  </head>
  <body>
    <!-- Navigation bar -->
    <?php include("inc/navbar.php"); ?>
    <!-- Navigation bar -->

    <!-- Articles section -->
    <div class="about">
      <h1>Medal of Darkness</h1>
      <video id="game-video" controls muted autoplay>
        <source src="lib/sample-video.mp4" type="video/mp4">
      </video>
    </div>
    <!-- Articles section -->

    <!-- Footer -->
    <?php include("inc/footer.php"); ?>
    <!-- Footer -->
  </body>
</html>
