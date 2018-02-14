<?php
/* Made by Aldan Project | 2018 */

if(!isset($_GET['search']))
  include("lib/sql-connection.php");
else
  include("../lib/sql-connection.php");

$query = "SELECT * FROM blog_posts ORDER BY id_post DESC";
$result = mysqli_query($connection, $query);

if(!$result)
{
  echo '<p class="message">Error al realizar la consulta</p>';
}
else
{
  $num = mysqli_num_rows($result);
  if($num != 0)
  {
    write_posts($result);
    mysqli_close($connection);
  }
  else
  {
    echo '<p class="message">No se encontraron publicaciones</p>';
  }
}

function write_posts($res)
{
  $first = False;
  while($post = mysqli_fetch_array($res))
  {
    if($first == False)
    {
      echo '<article class="simple-article ';
      if(isset($_GET['search']))
        echo 'search ';

      echo 'first-article" id="' . $post['id_post'] . '">'; //First post class
      $first = True;
    }
    else
    {
      echo '<article class="simple-article ';
      if(isset($_GET['search']))
        echo 'search';

      echo '"id="' . $post['id_post'] . '">'; //Two or more posts
    }
    if(!isset($_GET['search'])) //Image location
      echo '<img src="img/';
    else
      echo '<img src="../img/';

    echo $post['img'] . '">';
    echo '<h2>' . $post['title'] . '</h2>'; //Title
    echo '<p class="date">' . $post['date'] . '</p>'; //Date
    echo '<p>' . $post['description'] . '</p>'; //Description
    if(!isset($_GET['search']))
      echo '<p class="read-more"><a href="post.php?id=' . $post['id_post'] . '">Leer más</a></p>'; //Read more link
    else
    {
      echo '<form action="post.php" method="get" class="edit">';
      echo '<input type="hidden" name="id" value="' . $post['id_post'] . '">';
      echo '<input type="submit" value="Editar"></form>';
      echo '<form action="lib/delete.php" method="get" class="delete">';
      echo '<input type="hidden" name="id" value="' . $post['id_post'] . '">';
      echo '<input type="submit" value="Eliminar"></form>';
    }
    echo '</article>'; //Ends article
  }
}

?>
