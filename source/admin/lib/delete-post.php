<?php
 /* Made by Aldan Project | 2018 */
 include("../../lib/sql-connection.php");

 $id = $_GET['id'];
 $query = "DELETE FROM blog_posts WHERE id_post = " . $id;
 $result = mysqli_query($connection, $query);

 if(!$result)
 {
   mysqli_close($connection);
   header("Location: ../panel?m=4");
 }
 else
 {
   mysqli_close($connection);
   header("Location: ../panel?m=3");
 }
?>
