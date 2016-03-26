<!DOCTYPE html>
<html>
  <head>
    <link href="css/fullarticle.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-2.2.2.min.js"></script>
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
        <iframe id="article_doc" src="$body">
    </div>
  </div>
  <!-- <script src="js/clone_paper.js"></script>
  <script>
  var interval = $(function(){
    alert('content 1: ' + $('#article_doc').hasScrollBar());
  });

  (function($) {
    $.fn.hasScrollBar = function() {
        return this.get(0).scrollHeight > this.height();
    }
  })(jQuery);
  </script>-->
HERE;
        }
      }
    ?>
  </body>
</html>
