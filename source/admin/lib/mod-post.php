<?php
/* Made by Aldan Project | 2018 */

include("../../lib/sql-connection.php");

$path = "../../img/";
$id = $_POST['id_post'];
$title = $_POST['post-title'];
$description = $_POST['post-description'];
$content = $_POST['post-content'];
$image = $_FILES['post-image'];

if(!empty($image))
{
  $uploadFile = $path . "blog{$id}.jpg";
}

$query = "UPDATE blog_posts SET title = '{$title}', description = '{$description}', content = '{$content}' WHERE id_post = {$id}";
$result = mysqli_query($connection, $query);

if(!$result)
{
  header("Location: ../panel.php?m=5");
  //echo mysqli_error($connection);
}
else
{
  if(!empty($uploadFile))
  {
    if(!move_uploaded_file($image['tmp_name'], $uploadFile))
    {
      mysqli_close($connection);
      header("Location: ../panel.php?m=1");
    }
    else
    {
      mysqli_close($connection);
      header("Location: ../panel.php?m=6");
    }
  }
  else
  {
    mysqli_close($connection);
    header("Location: ../panel.php?m=6");
  }
}
?>
