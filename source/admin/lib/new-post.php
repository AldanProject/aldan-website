<?php
/* Made by Aldan Project | 2018 */

include("../../lib/sql-connection.php");

$path = "../../img/";
$title = $_POST['post-title'];
$description = $_POST['post-description'];
$content = $_POST['post-content'];
$image = $_FILES['post-image'];

$name_img = basename($image['name']);
$path = $path . $name_img;

$query = 'INSERT INTO blog_posts(id_post, title, description, content, img, date) VALUES(null, "'.$title.'","'.$description.'","'.$content.'","'.$name_img.'", now());';
$result = mysqli_query($connection, $query);

if(!$result)
{
  //echo mysqli_error($connection);
  header("Location: ../panel.php?m=0");
  mysqli_close($connection);
}
else
{
  if(!move_uploaded_file($image['tmp_name'], $path))
  {
    mysqli_close($connection);
    header("Location: ../panel.php?m=1");
  }
  else
  {
    mysqli_close($connection);
    header("Location: ../panel.php?m=2");
  }
}

?>
