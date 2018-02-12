<?php
/* Made by Aldan Project | 2018 */

session_start();
if(!isset($_SESSION['username']))
{
  header("Location: index.php");
}
?>
