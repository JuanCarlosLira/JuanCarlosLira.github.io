<?php
  session_start();
  $varsession = $_SESSION['user'];

  if ($varsession == null || $varsession == '') {
    //echo "Unauthorized Acces";
    header('Location:index.php');
    die();
  }

  // Connect to Server and select DB
  mysql_connect("localhost", "root", "mysql");
  mysql_query("SET NAMES 'utf8'");
  mysql_select_db("cprd");

  // Query DB for users
  $result = mysql_query("select * from userDet where mat = '$varsession'")
            or die("Failed to query database ".mysql_error());
  $row = mysql_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> CPRD  </title>

    <style>
      #menu {
        position: relative;
        top: 45%;
        background-image:url("imgs/deportes.png");
        background-size:1000px 200px;
        background-repeat: no-repeat;
        background-position: center;
        width:100%;
        height:100%;
        font-size: 65;
        font-family:Times New Roman ;
      }

      #form {
        margin: auto;
        width: 90%;
        border: 3px solid green;
        padding: 10px;
      }

      .detailForm{
        margin: auto;
        width: 95%;
        border: 3px solid #505050;
        padding: 10px;
      }

      body
      {
        font-family:Helvetica;
        font-size: 10;
      }
    </style>
  </head>

  <body>
    <div id=menu>
      <img align="left" src="imgs/tec.jpg"  alt="Tec"  height="50" width="50">
      <img align="left" src="imgs/life.jpg" alt="Life" height="50" width="75">
      <br><br><br>
      <br><br><br>
      <br><br>
    </div>

    <br>
    <h1>CPRD </h1>
    <h3>Bievenido: <?php echo $_SESSION['user']; ?></h3>
    <p align="right">
      <a class="btn btn-dark" href="php/logOut.php" role="button">Log Out</a>
    </p>
    <br>

    <div class="detailForm">
      <h3 align="center">Datos Personales</h3>
      <form class="form" action="php/usrDet.php" method="post">
        <table align="center">
          <tr>
            <td>Nombre:</td>
            <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
            <td>Apellido Paterno:</td>
            <td><input type="text" name="ap_pat" value="<?php echo $row['apPat']; ?>"></td>
            <td>Apellido Materno:</td>
            <td><input type="text" name="ap_mat" value="<?php echo $row['apMat']; ?>"></td>
          </tr>
          <tr>
            <td>Sexo:</td>
            <td>
              <select name="sex">
                <?php
                  if($row['sex']=="F") echo "<option value=\"F\" selected='true'> Femenino </option>";
                  else echo "\t<option value=\"F\"> Femenino </option>\n";

                  if($row['sex']=="M") echo "<option value=\"M\" selected='true'> Masculino </option>";
                  else echo "\t<option value=\"M\"> Masculino </option>\n";
                ?>
              </select>
            </td>
            <td>Fecha de Nacimiento:</td>
            <td><input type="date" name="f_nac" value="<?php echo $row['dob']; ?>"></td>
            <td>Deporte:</td>
            <td>
              <select name="sport">
                <?php
                  if($row['sport']=="Basketball Femenil") echo "<option value=\"Basketball Femenil\" selected='true'> Basketball Femenil </option>";
                  else echo "\t<option> Basketball Femenil </option>\n";

                  if($row['sport']=="Basketball Varonil") echo "<option value=\"Basketball Varonil\" selected='true'> Basketball Varonil </option>";
                  else echo "\t<option> Basketball Varonil </option>\n";

                  if($row['sport']=="Volleyball Femenil") echo "<option value=\"Volleyball Femenil\" selected='true'> Volleyball Femenil </option>";
                  else echo "\t<option> Volleyball Femenil </option>\n";

                  if($row['sport']=="Soccer Varonil") echo "<option value=\"Soccer Varonil\" selected='true'> Soccer Varonil </option>";
                  else echo "\t<option> Soccer Varonil </option>\n";

                  if($row['sport']=="Fútbol Rápido Femenil") echo "<option value=\"Fútbol Rápido Femenil\" selected='true'> Fútbol Rápido Femenil </option>";
                  else echo "\t<option> Fútbol Rápido Femenil </option>\n";

                  if($row['sport']=="Baloncesto Juvenil") echo "<option value=\"Baloncesto Juvenil\" selected='true'> Baloncesto Juvenil </option>";
                  else echo "\t<option> Baloncesto Juvenil </option>\n";
                ?>
              </select>
            </td>
          </tr>
        </table>
        <div align="right">
          <input class="btn btn-dark" type="submit" name="save" value="Guardar" />
        </div>
      </form>
    </div>

    <br>

    <div class="container-fluid">
      <h3> Instrucciones </h3>
      <p>
        Contesta cada una de las preguntas indicando en qué medida te encuentras de acuerdo con ellas en una etapa general, no buena ni mala.
        <br>
        Siendo 1 totalmente en desacuerdo y 5 totalmente de acuerdo.
      </p>
      <br>

      <form action="php/form.php" method="POST">
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th colspan="2"></th>
              <th colspan="3"> Totalmente en Desacuerdo</th>
              <th colspan="2"> Totalmente Deacuerdo</th>
            </tr>
            <tr>
              <th>#</th>
              <th>Pregunta</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
            </tr>
          </thead>
          <tbody>
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
                $idQues = $row['idQues'];
                $query = "SELECT * FROM ans WHERE mat='$varsession' AND ques = $idQues";
                // Query DB answer
                $resultAns = mysql_query($query)
                          or die("Failed to query database ".mysql_error());
                if (mysql_num_rows($resultAns)==0) {
                  // code...
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
                } else {
                  $rowAns = mysql_fetch_assoc($resultAns);
                  $ans = $rowAns['ans'];
                  switch ($ans) {
                    case 1:
                ?>
                <tr>
                  <td><?php echo $row['idQues']; ?></td>
                  <td><?php echo $row['ques']; ?></td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="1" checked="true"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="2"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="3"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="4"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="5"> </td>
                </tr>
                <?php
                      //echo "One Selected";
                      break;
                    case 2:
                ?>
                <tr>
                  <td><?php echo $row['idQues']; ?></td>
                  <td><?php echo $row['ques']; ?></td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="1"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="2" checked="true"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="3"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="4"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="5"> </td>
                </tr>
                <?php
                      //echo "Two Selected";
                      break;
                    case 3:
                ?>
                <tr>
                  <td><?php echo $row['idQues']; ?></td>
                  <td><?php echo $row['ques']; ?></td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="1"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="2"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="3" checked="true"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="4"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="5"> </td>
                </tr>
                <?php
                      //echo "Three Selected";
                      break;
                    case 4:
                ?>
                <tr>
                  <td><?php echo $row['idQues']; ?></td>
                  <td><?php echo $row['ques']; ?></td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="1"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="2"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="3"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="4" checked="true"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="5"> </td>
                </tr>
                <?php
                      //echo "Four Selected";
                      break;
                    case 5:
                ?>
                <tr>
                  <td><?php echo $row['idQues']; ?></td>
                  <td><?php echo $row['ques']; ?></td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="1"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="2"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="3"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="4"> </td>
                  <td> <input type="radio" name="q<?php echo $row['idQues']; ?>" value="5" checked="true"> </td>
                </tr>
                <?php
                      //echo "Five Selected";
                      break;
                    default:
                      // code...
                      break;
                  }
                  /*echo "<tr>
                          <td>" . $row['idQues'] . "</td>
                          <td>" . $row['ques'] . "</td>

                        </tr>";*/
                }
              }
            ?>
          </tbody>
        </table>
        <div align="right">
          <input class="btn btn-dark" type="submit" name="save" value="Guardar" />
        </div>
        <br>
      </form>
    </div>

  </body>
</html>
