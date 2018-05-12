<?php
/* Made by Aldan Project | 2018 */

include("../../lib/sql-connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = $connection->prepare("SELECT username, level FROM users WHERE username = ? AND password = SHA2(?, 256)");
if($query == false)
{
  die('pepare() failed: ' . htmlspecialchars($connection->error));
}
else
{
  $query->bind_param('ss', $username, $password);
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
}

function login($user)
{
  if($user['level'] == 1)
  {
    //Session starts here
    session_start();
    $_SESSION['username'] = $user['username'];
    $_SESSION['level'] = $user['level'];

    header("Location: ../panel.php");
  }
  else
    header("Location: ../index.php?e=2");
}

?>
