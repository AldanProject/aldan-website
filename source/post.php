<!DOCTYPE html>
<!-- Made by Aldan Project | 2018 -->
<html>
  <head>
    <meta charset="utf-8">
    <?php
    include("lib/config.php");
    include("lib/sql-connection.php");

    $id = $_GET['id'];

    //Placeholder | Thanks @saber-nyan!
    $query = $connection->prepare("SELECT * FROM blog_posts WHERE id_post = ?");
    if($query == false)
    {
      die('pepare() failed: ' . htmlspecialchars($connection->error));
    }
    else
    {
      $query->bind_param("i", $id);
      $query->execute();
      $result = $query->get_result();

      if(!$result)
      {
        echo '<p class="message">Error al realizar la consulta</p>';
      }
      else
      {
        $num = mysqli_num_rows($result);
        if($num > 0)
        {
          $post = True;
          $row = mysqli_fetch_array($result);
          echo '<title>' . $row['title'] . ' | Aldan Project</title>';
        }
        else
        {
          $post = False;
          echo '<title>Publicación no encontrada | Aldan Project</title>';
        }
      }
    }
    ?>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo SERVER; ?>lib/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat|Poppins" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo SERVER; ?>favicon.png">
    <!-- Styles -->
  </head>
  <body class="blog">
    <!-- Navigation bar -->
    <?php include("inc/navbar.php"); ?>
    <!-- Navigation bar -->

    <!-- Post section -->
    <?php
    if($post)
    {
      echo '<article class="post" id="' .$row['id_post'] . '">'; //Post starts
      echo '<h2>' . $row['title'] . '</h2>';
      echo '<p class="date">Publicado: ' . $row['date'] . '</p>';
      echo '<img src="'. SERVER .'img/' . $row['img'] . '">';
      echo '<p>' . $row['content'] . '</p>';
      echo '</article>'; //Post ends
    }
    else
    {
        echo '<p class="message">La publicación no fue encontrada</p>';
        echo '<p class="message"><a href="'. SERVER .'">Regresar al inicio</a></p>';
    }
    mysqli_close($connection);
    ?>
    <!-- Post section -->

    <!-- Footer -->
    <?php include("inc/footer.php"); ?>
    <!-- Footer -->
  </body>
</html>
