<?php
  session_start();
  $varsession = $_SESSION['user'];

  if ($varsession == null || $varsession == '') {
    //echo "Unauthorized Acces";
    header('Location:index.php');
    die();
  }

  // Get values passed from the form
  $user = $_SESSION['user'];
  $name = $_POST['name'];
  $apPat = $_POST['ap_pat'];
  $apMat = $_POST['ap_mat'];
  $sex = $_POST['sex'];
  $dob = $_POST['f_nac'];
  $sport = $_POST['sport'];

  // Prevent sql injection
  $user = stripslashes($user);
  $name = stripslashes($name);
  $apPat = stripslashes($apPat);
  $apMat = stripslashes($apMat);
  $sex = stripslashes($sex);
  $dob = stripslashes($dob);
  $sport = stripslashes($sport);
  $user = mysql_real_escape_string($user);
  $name = mysql_real_escape_string($name);
  $apPat = mysql_real_escape_string($apPat);
  $apMat = mysql_real_escape_string($apMat);
  $sex = mysql_real_escape_string($sex);
  $dob = mysql_real_escape_string($dob);
  $sport = mysql_real_escape_string($sport);

  // Connect to Server and select DB
  mysql_connect("localhost", "root", "mysql");
  mysql_query("SET NAMES 'utf8'");
  mysql_select_db("cprd");

  // Query DB for users
  $query = "INSERT INTO userDet (mat,name,apPat,apMat,sex,dob,sport)
            VALUES ('$user','$name','$apPat','$apMat','$sex','$dob','$sport')
            ON DUPLICATE KEY UPDATE
            name = '$name',
            apPat = '$apPat',
            apMat = '$apMat',
            sex = '$sex',
            dob = '$dob',
            sport = '$sport'";
  $result = mysql_query($query)
            or die("Failed to query database ".mysql_error());

  echo '<p>Query: ' . $query . "\n";
  echo '<p>User: ' . $_SESSION['user'] . "\n";
  echo '<p>Nombre: ' . $name . "\n";
  echo '<p>Ap Pat: ' . $apPat . "\n";
  echo '<p>Ap Mat: ' . $apMat . "\n";
  echo '<p>Sexo: ' . $sex . "\n";
  echo '<p>D of B: ' . $dob . "\n";
  echo '<p>Deporte: ' . $sport . "\n";
?>
