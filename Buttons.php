<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>

<!-- style Section  -->
    <style >

      #stop {
        position: absolute;
        margin-left: 650px;
        margin-top: 400px;
        font-size: 40px;
      }

      #up {
        position: absolute;
        left: 640px;

        font-size: 40px;
        top:330px

      }

      #right {
        position: absolute;
        top: 400px;

        font-size: 40px;
left:530px
      }

      #left {
        position: absolute;
        top: 400px;

        font-size: 40px;
left:750px
      }

      #down {
        position:absolute ;
        left: 640px;

        font-size: 40px;
        top:490px

      }
    /* controls the buttons steps  */

    </style>

  </head>
  <?php
  $conn = new mysqli("localhost", "root", "");
  // Check connection

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Create database
  $sql = "CREATE DATABASE CONTROL";
  if ($conn->query($sql) === TRUE) {


  }

  $conn->close();

  $conn1 = new mysqli("localhost", "root", "","CONTROL");
  // Check connection
  if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
  }

  // sql to create table
  $sql = "CREATE TABLE CONTROL_PANEL (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Up VARCHAR(30) ,
  Down VARCHAR(30) ,
  Rightt VARCHAR(50),
  Leftt VARCHAR(50),
  Stop VARCHAR(50)
  )";



  if ($conn1->query($sql) === TRUE) {

    $sql1= "INSERT INTO CONTROL_PANEL (Up, Down, Rightt ,Leftt,Stop)
    VALUES ('Forward','Backward','Right','Left','Stop')";

  }

  ?>
  <body >

<form  action="pageto.php" method="post">

    <!-- four buttons -->
    <button id='stop' type="submit" name="Stop" value="S"   >⏸</button>

    <button id='right' type="submit" name="Left" value="R"  >▶️➡️</button>

    <button id='left' type="submit"  name="Right" value="L" >▶️⬅️</button>

    <button id='down' type="submit"  name="Down" value="D"  >▶️⬇️</button>

    <button id='up' type="submit"  name="Up" value="U"  >▶️⬆️</button>
</form>

  </body>

</html>
