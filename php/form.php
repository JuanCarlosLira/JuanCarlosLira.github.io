<?php
  echo "This process the form";

  session_start();
  $varsession = $_SESSION['user'];

  if ($varsession == null || $varsession == '') {
    //echo "Unauthorized Acces";
    header('Location:index.php');
    die();
  }

  $user = $_SESSION['user'];
  // Prevent sql injection
  $user = stripslashes($user);
  $user = mysql_real_escape_string($user);

  // Connect to Server and select DB
  $conn = mysql_connect("localhost", "root", "mysql");
  mysql_query("SET NAMES 'utf8'");
  mysql_select_db("cprd");

  for ($i=0; $i < 55; $i++) {
    $j = $i +1;
    if ($_POST['q'.($i+1)] != null) {
      $ans = $_POST['q'.($i+1)];
      echo '<p>'. ($i+1) . ': ' . $_POST['q'.($i+1)] . "\n";
      // Query DB for users
      $query = "SELECT mat FROM ans WHERE mat='$user' AND ques = $j";
      echo $query . "\n";
      $result = mysql_query($query)
                or die("Failed to query database ".mysql_error());

      if (mysql_num_rows($result)==0) {
        echo "Perform Insert";
        $query = "INSERT INTO ans (mat,ques,ans)
                  VALUES ('$user',$j,$ans)";
        echo $query . "\n";
      } else {
        echo "Perform Update";
        $query = "UPDATE ans
                  SET ans = $ans
                  WHERE mat = \"$user\" AND ques = $j";
        echo $query . "\n";
      }

      $result = mysql_query($query)
                or die("Failed to query database ".mysql_error());
    }
  }
?>
