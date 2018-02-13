<!DOCTYPE html>
<!-- Made by Aldan Project | 2018 -->
<html>
  <head>
    <meta charset="utf-8">
    <?php
    include("lib/sql-connection.php");

    $id = $_GET['id'];
    $query = "SELECT * FROM blog_posts WHERE id_post = " . $id;
    $result = mysqli_query($connection, $query);

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

    ?>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="lib/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat|Poppins" rel="stylesheet">
  </head>
  <body class="blog">
    <h1>Aldan Project</h1>
    <!-- Navigation bar -->
    <?php include("inc/navbar.php"); ?>
    <!-- Navigation bar -->

    <!-- Post section -->
    <?php
    if($post)
    {
      echo '<article class="post" id="' .$row['id_post'] . '">'; //Post starts
      echo '<h2>' . $row['title'] . '</h2>';
      echo '<img src="img/' . $row['img'] . '">';
      echo '<p>' . $row['content'] . '</p>';
      echo '</article>'; //Post ends
    }
    else
    {
        echo '<p class="message">La publicación no fue encontrada</p>';
        echo '<p class="message"><a href="index.php">Regresar al inicio</a></p>';
    }
    mysqli_close($connection);
    ?>
    <!-- Post section -->

    <!-- Footer -->
    <?php include("inc/footer.php"); ?>
    <!-- Footer -->
  </body>
</html>
