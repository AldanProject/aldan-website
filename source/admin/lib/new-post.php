<?php
/* Made by Aldan Project | 2018 */

include("../../lib/sql-connection.php");

$path = "../../img/";
$title = $_POST['post-title'];
$description = $_POST['post-description'];
$content = $_POST['post-content'];
$image = $_FILES['post-image'];

$query = $connection->prepare("INSERT INTO blog_posts(id_post, title, description, content, date) VALUES(null, ?, ?, ?, now())");
$query->bind_param("sss", $title, $description, $content);
$query->execute();
if($query)
{
  $query = "SELECT id_post FROM blog_posts WHERE title = '{$title}'";
  $result = mysqli_query($connection, $query);
  if($result)
  {
    $rows = mysqli_fetch_assoc($result);
    $uploadFile = $path . "blog" . $rows['id_post'] . ".jpg";
    if(!move_uploaded_file($image['tmp_name'], $uploadFile))
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
  else
  {
    mysqli_close($connection);
    header("Location: ../panel.php?m=2");
  }
}
else
{
  mysqli_close($connection);
  header("Location: ../panel.php?m=1");
}

?>
