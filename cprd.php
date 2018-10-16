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
    <title> CPRD  </title>
  </head>
<style>  #menu {
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

  body
  {
    font-family:Helvetica;
    font-size: 10;
  }
</style>
  <body>
    <div id=menu width=100% height=25%>

    <img align="left"src="imgs/tec.jpg" height="50" width="50">
    <img align="left"src="imgs/life.jpg" height="50" width="75">  <p3 align="center">
    <br><br>  <p3><h1 font-color="yellow" background-color="white">.  </h1></p3><br><br>
    </div>
    <p3 align="center"><h1 font-color="E7FF03" background-color="white">CPRD </h1></p3>
  <p1 align="left">  <h3>Bievenido: <?php echo $_SESSION['user']; ?></h3></p1>

  <p align="right">  <a  href="php/logOut.php"> LogOut </a></p>

    <table align="center">
      <thead>
        <tr align="center">

          <h3 align="left">DATOS PERSONALES</h3>
<form>
        </tr>
        <tr>
          <th>
            Apellido Paterno: <input type="text" name="ap_pat">
          </th>
          <th>
            Apellido Materno: <input type="text" name="ap_mat">
          </th>
          <th>
            Nombre(s): <input type="text" name="nombre">
          </th>
        </tr>

          <tr>
          </tr>
          <tr>
          </tr>
        <tr>
          <th>
            Sexo: <input type="radio" name="sexo" value="F">F <input type="radio" name="sexo" value="M">M
          </th>
          <th>

              Fecha de nacimiento: <input type="date" name="f_nac">

          </th>

          <th>
            Deporte: <input list="deporte">

<datalist id="deporte">
  <option value="Basketball Femenil">
    <option value="Basketball Varonil">
      <option value="Volleyball Femenil">
  <option value="Soccer Varonil">
    <option value="Fútbol Rápido Femenil">
  <option value="Baloncesto Juvenil">
</datalist>
          </th>

        </tr>
      </thead>
    </table>
    <br>
    <br>
  </form>
    <table>
      <thead>
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
