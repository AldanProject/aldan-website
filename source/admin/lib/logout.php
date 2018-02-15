<?php
 /* Made by Aldan Project | 2018 */

 session_start();

 session_unset();
 session_destroy(); //Destroys the session

 header("Location: ../");
?>
