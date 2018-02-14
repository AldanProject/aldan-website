<?php
 if(isset($_GET['new']))
 {
   echo '<h2>Crear nueva publicación</h2>';
 }
 else if(isset($_GET['id']))
 {
   include("../lib/sql-connection.php");
   $id = $_GET['id'];
   $query = "SELECT * FROM blog_posts WHERE id_post = " . $id;
   $result = mysqli_query($connection, $query);
   if(!$result)
   {
     header("Location: panel.php?errorSearch");
     mysqli_close($connection);
   }
   else
   {
     $num = mysqli_num_rows($result);
     if($num > 0)
     {
       $rows = mysqli_fetch_array($result);
       echo '<h2>Modificar publicación | ID: '.$rows['id_post'] . '</h2>';

       $title = $rows['title'];
       $description = $rows['description'];
       $content = $rows['content'];
     }
   }
 }
 else
 {
   header("Location: panel.php");
 }
?>
