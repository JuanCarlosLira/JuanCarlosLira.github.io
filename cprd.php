<?php
  session_start();
  $varsession = $_SESSION['user'];

  if ($varsession == null || $varsession == '') {
    //echo "Unauthorized Acces";
    header('Location:index.php');
    die();
  }
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
        width: 90%;
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
      <form class="form" action="index.pnp" method="post">
        <table align="center">
          <tr>
            <td>Nombre:</td>
            <td><input type="text" name="name"></td>
            <td>Apellido Paterno:</td>
            <td><input type="text" name="ap_pat"></td>
            <td>Apellido Materno:</td>
            <td><input type="text" name="ap_mat"></td>
          </tr>
          <tr>
            <td>Sexo:</td>
            <td>
              <select>
                <option value="F"> Femenino </option>
                <option value="M"> Masculino </option>
              </select>
            </td>
            <td>Fecha de Nacimiento:</td>
            <td><input type="date" name="f_nac"></td>
            <td>Deporte:</td>
            <td>
              <select>
                <option value="Basketball Femenil"> Basketball Femenil </option>
                <option value="Basketball Varonil"> Basketball Varonil </option>
                <option value="Volleyball Femenil"> Volleyball Femenil </option>
                <option value="Soccer Varonil"> Soccer Varonil </option>
                <option value="Fútbol Rápido Femenil"> Fútbol Rápido Femenil </option>
                <option value="Baloncesto Juvenil"> Baloncesto Juvenil </option>
              </select>
            </td>
          </tr>
        </table>
      </form>
    </div>

    <br>

    <table class="table table-striped">
      <thead class="thead-dark">
        <tr align="left">
          <h3 >INSTRUCCIONES</h3>
          Contesta cada una de las preguntas indicando en qué medida te encuentras de acuerdo con ellas en una etapa general, no buena ni mala.
          <br> Siendo 1 totalmente en desacuerdo y 5 totalmente de acuerdo.
        </tr>

        <tr >
          <p align="center">
          <th><h2>CPRD</h2></th><th></th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th>
            </p>
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
