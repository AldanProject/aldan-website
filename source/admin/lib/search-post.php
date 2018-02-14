<?php
 /* Made by Aldan Project | 2018 */
 if(isset($_GET['search']))
 {
   $type = $_GET['search'];

   if($type != 'all')
   {
     include("../lib/sql-connection.php");
   }
   else
   {
     include("../inc/blog_posts.php");
   }
 }
?>
