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
      <h1>Sobre nosotros</h1>
      <p>Aldan Project es un grupo de trabajo del Centro de Enseñanza Técnica Industrial, plantel Tonalá
        con el objetivo de brindar un ecosistema para nuestro videojuego llamado <b>Medal of Darkness</b>, y así
        dar la mejor experiencia a nuestros usuarios.</p>
      <h2>Miembros de Aldan Project</h2>
      <div class="members">
        <img src="<?php echo SERVER; ?>img/profile/juice.jpg" class="profile">
        <h4>Juan Daniel Santiago Valle</h4>
        <ul class="links">
          <li>
            <img src="<?php echo SERVER; ?>img/icon/github-icon.png">
            <a href="https://github.com/JuiceSanti12">Perfil de GitHub</a>
          </li>
          <li>
            <img src="<?php echo SERVER; ?>img/icon/facebook-icon.png">
            <a href="#">Facebook</a>
          </li>
          <li>
            <img src="<?php echo SERVER; ?>img/icon/instagram-icon.png">
            <a href="#">Instagram</a>
          </li>
          <li>
            <img src="<?php echo SERVER; ?>img/icon/twitter-icon.png">
            <a href="#">Twitter</a>
          </li>
        </ul>
        <p class="description">
          Descripción acerca de @Juice_Santi12.
        </p>
      </div>
      <div class="members">
        <img src="<?php echo SERVER; ?>img/profile/alexazumi.jpg" class="profile">
        <h4>Cesar Alejandro Hernández Suárez</h4>
        <ul class="links">
          <li>
            <img src="<?php echo SERVER; ?>img/icon/github-icon.png">
            <a href="https://github.com/AlexAzumi">Perfil de GitHub</a>
          </li>
          <li>
            <img src="<?php echo SERVER; ?>img/icon/facebook-icon.png">
            <a href="#">Facebook</a>
          </li>
          <li class="instagram">
            <img src="<?php echo SERVER; ?>img/icon/instagram-icon.png">
            <a href="#">Instagram</a>
          </li>
          <li>
            <img src="<?php echo SERVER; ?>img/icon/twitter-icon.png">
            <a href="#">Twitter</a>
          </li>
        </ul>
        <p class="description">
          Descripción acerca de @AlexAzumi.
        </p>
      </div>
    </div>
    <!-- Articles section -->

    <!-- Footer -->
    <?php include("inc/footer.php"); ?>
    <!-- Footer -->
  </body>
</html>
