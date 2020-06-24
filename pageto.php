


<?php


// Create connection

$Connection = new mysqli("localhost", "root","","CONTROL");
$stmt = $Connection->prepare("select * from CONTROL_PANEL");
if($Connection-> connect_error){

  die("error connection". $mysqli->connect_error);
}else{
  $stmt-> execute();
   $result = $stmt->get_result();
//  while ($row=$result->fetch_assoc()) {
 if(isset($_POST['Stop'])) {
   while ($row=$result->fetch_assoc()) {

   echo "$row[Stop]";


    }

    }
     if(isset($_POST['Right'])) {
      while ($row=$result->fetch_assoc()) {

      echo "$row[Rightt]";

       }

       }
       if(isset($_POST['Left'])) {
        while ($row=$result->fetch_assoc()) {

        echo "$row[Leftt]";


         }

         }
         if(isset($_POST['Up'])) {
          while ($row=$result->fetch_assoc()) {

          echo "$row[Up]";


           }

           }
           if(isset($_POST['Down'])) {
            while ($row=$result->fetch_assoc()) {

            echo "$row[Down]";


             }

             }

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br><br><br>
    <button type="button" name="button" Onclick=Go()>Back to home</button>
  </body>
  <script type="text/javascript">
    function Go(){
      window.history.back();

    }
  </script>
</html>
