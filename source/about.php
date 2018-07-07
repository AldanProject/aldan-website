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
        ofrecer la mejor experiencia a nuestros usuarios.</p>
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
            <a href="https://www.facebook.com/JuiceSanti">Facebook</a>
          </li>
          <li>
            <img src="<?php echo SERVER; ?>img/icon/instagram-icon.png">
            <a href="https://www.instagram.com/danysantiagovalle/">Instagram</a>
          </li>
          <li>
            <img src="<?php echo SERVER; ?>img/icon/twitter-icon.png">
            <a href="https://twitter.com/Juice_Santi12">Twitter</a>
          </li>
        </ul>
        <p class="description adjust">
          Hola c:<br><br>
          Mi nombre es Juan Daniel Santiago Valle, tengo 19 años y soy integrante de este proyecto.<br>
          Me gusta la música rock, el anime y los videojuego.<br>
          Soy jugador top del videojuego smash bros 4.<br>
          Espero que este proyecto sea de su agrado
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
            <a href="https://www.facebook.com/AlejandroSuarez7u7">Facebook</a>
          </li>
          <li class="instagram">
            <img src="<?php echo SERVER; ?>img/icon/instagram-icon.png">
            <a href="https://www.instagram.com/alexazumi115/">Instagram</a>
          </li>
          <li>
            <img src="<?php echo SERVER; ?>img/icon/twitter-icon.png">
            <a href="https://twitter.com/AlexAzumi">Twitter</a>
          </li>
        </ul>
        <p class="description adjust">
          Buenas, mi nombre es Cesar Alejandro Hernández Suárez, pero también me puedes encontrar en muchos lugares como Alejandro Suárez, soy de Tonalá, una pequeña ciudad en Jalisco, México, tengo 20 años y uno de mis más grandes sueños es conocer Japón, su cultura, estilo de vida y sobre todo los árboles de sakura que habitan en él.<br><br>
          Desde muy pequeño he tenido una gran afición por los videojuegos, y la tecnología, pero no fue hasta hace un par de años que desarrollé un gusto muy grande por la programación.
          Mis pasatiemos más grandes son la música (me encantaría aprender a tocar el piano), los videojuegos, y obviamente la programación.
        </p>
      </div>
    </div>
    <!-- Articles section -->

    <!-- Footer -->
    <?php include("inc/footer.php"); ?>
    <!-- Footer -->
  </body>
</html>
