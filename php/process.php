<?php
  // Get values passed from the form in index.php
  $username = $_POST['user'];
  $password = $_POST['pass'];

  // Prevent sql injection
  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);

  // Connect to Server and select DB
  mysql_connect("localhost", "root", "mysql");
  mysql_select_db("cprd");

  // Query DB for users
  $result = mysql_query("select * from users where username = '$username' and password = '$password'")
            or die("Failed to query database ".mysql_error());

  $row = mysql_fetch_array($result);
  if ($row['username'] == $username && $row['password'] == $password) {
    if($username != ""){
      echo "Login success!!! Welcome ".$row['username'];
    } else {
      echo "Failed to login!";
    }
  } else {
    echo "Failed to login!";
  }
?>
