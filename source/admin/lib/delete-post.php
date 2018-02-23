<?php
 /* Made by Aldan Project | 2018 */
 include("../../lib/sql-connection.php");

 $id = $_GET['id'];
 $query = $connection->prepare("DELETE FROM blog_posts WHERE id_post = ?");
 $query->bind_param("i", $id);
 $query->execute();
 $result = $query->get_result();

 if(!$result)
 {
   mysqli_close($connection);
   header("Location: ../panel.php?m=4");
 }
 else
 {
   mysqli_close($connection);
   header("Location: ../panel.php?m=3");
 }
?>
