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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> CPRD </title>
  </head>

  <body>
    <h1>CPRD</h1>
    <h2>Bievenido: <?php echo $_SESSION['user']; ?></h2>
    <a href="php/logOut.php"> LogOut </a>

  <br><br>

    <table>
      <thead>
        <tr>
          <th>CPRD</th>
        </tr>
      </thead>
      <tbody>
        <form action="index.html" method="POST">
          <?php
            // Connect to Server and select DB
            mysql_connect("localhost", "root", "mysql");
            mysql_query("SET NAMES 'utf8'");
            mysql_select_db("cprd");

            // Query DB for users
            $result = mysql_query("select * from form")
                      or die("Failed to query database ".mysql_error());

            // Add entry for every question
            while ($row = mysql_fetch_assoc($result)) {
              ?>
              <tr>
                <td><?php echo $row['idQues']; ?></td>
                <td><?php echo $row['ques']; ?></td>
                <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="1"> </td>
                <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="2"> </td>
                <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="3"> </td>
                <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="4"> </td>
                <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="5"> </td>
              </tr>
              <?php
            }
          ?>
        </form>
      </tbody>
    </table>

  </body>
</html>
