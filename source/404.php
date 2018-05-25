<!DOCTYPE html>
<!-- Made by Aldan Project | 2018 -->
<html>
  <head>
    <?php include("lib/config.php"); ?>
    <meta charset="utf-8">
    <title>Página no encontrada | Aldan Project</title>
    <!-- Styles -->
    <style>
      html, body {
        height: 100vh;
        width: 100vw;
        overflow: hidden;
        background-color: #333;
      }
      body {
        display: flex;
      }
      h2 {
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        color: white;
        width: auto;
        font-size: 210%;
        margin-top: 8px;
        margin-bottom: 5px;
        padding-bottom: 4px;
      }
      div {
        display: none;
      }
      div.main-frame {
        background-color: #494949;
        border-radius: 10px;
        border: 2px solid white;
        box-shadow: 0px 0px 5px 3px rgba(255,255,255,0.50);
        color: white;
        display: block;
        font-family: 'Montserrat', sans-serif;
        font-size: 125%;
        margin: auto;
        padding: 12px;
      }
      a {
        color: #FF0080;
        text-decoration: none;
        font-weight: bold;
      }
      a:hover {
        background-color: white;
      }
      p {
        text-align: center;
      }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat|Poppins" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.png">
    <!--Styles -->
  </head>
  <body>
    <div class="main-frame">
      <h2>Error 404</h2>
      <p>Por alguna razón, la página que solicitaste no existe.</p>
      <p>Puedes regresar al inicio haciendo <a href="<?php echo SERVER; ?>">CLICK AQUÍ</a></p>
    </div>
  </body>
</html>
