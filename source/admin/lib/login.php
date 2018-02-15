<?php
/* Made by Aldan Project | 2018 */

include("../../lib/sql-connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = 'SELECT username FROM users WHERE username = "' . $username . '" AND password = md5("' . $password . '");';
$result = mysqli_query($connection, $query);

if(!$result)
{
  header("Location: ../index.php?e=1");
}
else
{
  $num = mysqli_num_rows($result);
  if($num > 0)
  {
    $row = mysqli_fetch_array($result);
    login($row);
  }
  else
  {
    header("Location: ../index.php?e=2");
  }
}

function login($user)
{
  //Session starts here
  session_start();
  $_SESSION['username'] = $user['username'];

  header("Location: ../panel.php");
}

?>
