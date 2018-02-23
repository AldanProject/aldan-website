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

$query = $connection->prepare("INSERT INTO blog_posts(id_post, title, description, content, img, date) VALUES(null, ?, ?, ?, ?, now())");
$query->bind_param("ssss", $title, $description, $content, $name_img);
$query->execute();
$result = $query->get_result();

if(!$result)
{
  mysqli_close($connection);
  header("Location: ../panel.php?m=0");
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
