<!DOCTYPE html>
<html>
  <head>
    <link href="css/polywell.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <?php include("menu.html");?>
    <div class="wrapper">
      <h1>Polywell Writeups</h1>
      <p>
        This is a blog of our progress on the Polywell Reactor.
      </p>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "writeup";
    $conn = new mysqli($servername, $username, $password, $db);
    //check Connection
    if ($conn->connect_error){
      die("ERROR: ". $conn->connect_error);
    }
    else{
      //nothing, essentially
    }
    $rowcountsql= "SELECT id FROM writeups ORDER BY id;";
    if ($result=$conn->query($rowcountsql))
      {
      // Return the number of rows in result set
      $rowcount=mysqli_num_rows($result);
      }

    //this variable must increment when looping through the db for various items. yeah
    for ($sqlindex = 0; $sqlindex <= $rowcount; $sqlindex++){
      if ($result = $conn->query("SELECT * FROM writeups LIMIT ".$sqlindex.", 1;")){
        if ($count = $result->num_rows){
        //  echo "The row count for this query is ",$count,"<br>";
          while($row = $result->fetch_object()){
          $titlecontent =  $row->title;
          $writeupcontent = $row->body;
          $rowdateandtime = $row->dateandtime;
          echo $str=<<<ARTICLE
          <div class="article">
            <div class="titleanddate">
              <h2>$titlecontent</h2>
              <h3>Written $rowdateandtime</h3>
            </div>
            <div class="truncate">
              <p class="writeup">
                $writeupcontent
              </p>
              <a href="templatepage.php">Read More...</a>
            </div>
          </div>
ARTICLE;
          }
        }
      }
    }
    ?>
    <div class="spacer">

    </div>
  </div>
  </body>
</html>
