<?php
/* Made by Aldan Project | 2018 */

session_start();
if(!isset($_SESSION['username']) || $_SESSION['level'] != 1)
{
  header("Location: index.php");
}
?>
