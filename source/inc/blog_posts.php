<?php
/* Made by Aldan Project | 2018 */

include("lib/sql-connection.php");

$query = "SELECT * FROM blog_posts";
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
      echo '<article class="simple-article first-article" id="' . $post['id_post'] . '">'; //First post class
      $first = True;
    }
    else
    {
      echo '<article class="simple-article" id="' . $post['id_post'] . '">'; //Two or more posts
    }
    echo '<img src="img/' . $post['img'] . '">'; //Image
    echo '<h2>' . $post['title'] . '</h2>'; //Title
    echo '<p>' . $post['description'] . '</p>'; //Description
    echo '<p class="read-more"><a href="post.php?id=' . $post['id_post'] . '">Leer más</a></p>'; //Read more link
    echo '</article>'; //Ends article
  }
}

?>
