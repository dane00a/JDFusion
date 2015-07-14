<!DOCTYPE html>
<html>
  <head>
    <link href="webmaster.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php include("menu.html");
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error){
      die("Connection failed: ". $conn->connect_error);
    }
    else{
      echo "Connected Successfully";
    }
    ?>
  </body>
</html>
