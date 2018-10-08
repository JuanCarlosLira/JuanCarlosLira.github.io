<?php
  session_start();
  $varsession = $_SESSION['user'];

  if ($varsession == null || $varsession == '') {
    echo "Unauthorized Acces";
    die();
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> CPRD </title>
  </head>

  <body>
    <h1>CPRD</h1>
    <h2>Bievenido: <?php echo $_SESSION['user']; ?></h2>
    <a href="php/logOut.php"> LogOut </a>
  </body>
</html>
