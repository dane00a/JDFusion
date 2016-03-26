<!DOCTYPE html>
<html>
  <head>
    <link href="css/fullarticle.css" type="text/css" rel="stylesheet">
  </head>
  <body class="not_html_body">
    <?php
      include("menu.html");
      $id = $_GET['id'];
      //echo $id;
      $servername = "localhost";
      $username = "dane00a";
      $password = "andrewsD22799!";
      $db = "writeups";
      $conn = new mysqli($servername, $username, $password, $db);
      //check Connection
      if ($conn->connect_error){
        die("ERROR: ". $conn->connect_error);
      }
      else{
        //nothing, essentially
      }
      $query = "SELECT * FROM writeups WHERE id IN ($id)";
      if($result = $conn->query($query)){
        if($row = $result->fetch_object()){
          $title = $row->title;
          $body = $row->body;
          $dateandtime = $row->dateandtime;
          $body = nl2br($body);
echo <<<HERE
  <div class="wrapper">
    <div class="titleinfo">
      <h1 class="title">$title</h1>
      <p class="dateandtime">
      Posted $dateandtime
      </p>
      <p class="body_text">
        <iframe class="article_doc" src="$body"></iframe>
      </p>
    </div>
  </div>
  <!-- <script src="js/clone_paper.js"></script> -->

HERE;
        }
      }
    ?>
  </body>
</html>
