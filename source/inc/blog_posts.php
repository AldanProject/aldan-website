<?php
/* Made by Aldan Project | 2018 */

if(!isset($_GET['search']) && !isset($_GET['search-keywords']))
{
  include("lib/sql-connection.php");
  $query = "SELECT * FROM blog_posts ORDER BY id_post DESC";
}
else if(isset($_GET['search']) && $_GET['search'] == "all")
{
  include("../lib/sql-connection.php");
  $query = "SELECT * FROM blog_posts ORDER BY id_post DESC";
}
else
{
  include("../lib/sql-connection.php");
  $text = $_GET['search-keywords'];
  $caps = " LIKE ";
  if(isset($_GET['search-type']))
    $type = $_GET['search-type'];
  else
    header("Location: panel.php?m=10");

  if($type == "id_post")
    $caps = " = ";
  else
    $text = '%' . $text . '%';

  $query = "SELECT * FROM blog_posts WHERE {$type} {$caps} '{$text}' ORDER BY id_post DESC";
}

$result = mysqli_query($connection, $query);

if(!$result)
{
  echo '<p class="message">Error al realizar la consulta</p>';
  //echo '<p class="message">" . mysqli_error($connection) . "</p>';
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
      if(isset($_GET['search']) || isset($_GET['search-keywords']))
        echo 'search ';

      echo 'first-article" id="' . $post['id_post'] . '">'; //First post class
      $first = True;
    }
    else
    {
      echo '<article class="simple-article ';
      if(isset($_GET['search']) || isset($_GET['search-keywords']))
        echo 'search';

      echo '"id="' . $post['id_post'] . '">'; //Two or more posts
    }
    if(!isset($_GET['search']) && !isset($_GET['search-keywords'])) //Image location
      echo '<img src="img/';
    else
      echo '<img src="../img/';

    echo $post['img'] . '">';
    echo '<h2>' . $post['title'] . '</h2>'; //Title
    echo '<p class="date">' . $post['date'] . '</p>'; //Date
    echo '<p>' . $post['description'] . '</p>'; //Description
    if(!isset($_GET['search']) && !isset($_GET['search-keywords']))
      echo '<p class="read-more"><a href="post.php?id=' . $post['id_post'] . '">Leer más</a></p>'; //Read more link
    else
    {
      echo '<form action="post.php" method="get" class="edit">';
      echo '<input type="hidden" name="id" value="' . $post['id_post'] . '">';
      echo '<input type="submit" value="Editar"></form>';
      echo '<form action="lib/delete-post.php" method="get" class="delete" onsubmit="return submitForm(this);">';
      echo '<input type="hidden" name="id" value="' . $post['id_post'] . '">';
      echo '<button value="submit">Eliminar</button></form>';
    }
    echo '</article>'; //Ends article
  }
}

?>
