<?php
/* Made by Aldan Project | 2018 */

include("../../lib/sql-connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = $connection->prepare("SELECT * FROM users WHERE username = ? AND password = md5(?)");
$query->bind_param("ss", $username, $password);
$query->execute();
$result = $query->get_result();

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
    die(mysqli_error($connection));
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
