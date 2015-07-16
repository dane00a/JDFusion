<!DOCTYPE html>
<html>
  <head>
    <link href="css/webmaster.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php include("menu.html");
    echo "The date is: ".date("Y-m-d H:i:s")."<br>";
    //CHECK FOR A POST REQ, THEN BEGIN PROCESSING
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
            //SQL CREDS 'N SHIT
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "writeup";
      $conn = new mysqli($servername, $username, $password, $db);
      if ($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
      }
      else{
        echo "Connected Successfully to ".$db;
      }
      //END OF SQL CONNECTION; IF SUCCESSFUL, PROCESSING BEGINS HERE
      $date = date("Y-m-d H:i:s");
      echo $date;
      function fixinput($data){
        stripslashes($data);
        htmlspecialchars($data);
        return $data;
      }
      $title = $body = "";
      $title = fixinput($_POST["title"]);
      $body = fixinput($_POST["body"]);
      mysql_real_escape_string($title);
      mysql_real_escape_string($body);
      echo " ".$title;
      echo " ".$body;
      //add a check for images for image support, maybe? is better solution? EDIT: NAH
      $sql = "INSERT INTO writeups (title,body,dateandtime) VALUES (\"$title\", \"$body\",\"$date\");";
      //check to see if insertion went through
    /*  if ($conn->query($sql) === TRUE){
        echo "<br> New entry created successfully";
      }
      else{
        echo "GODDAMNIT SOMETHING WENT REALLY FUCKING WRONG. ERROR: ". $sql . "<br>" . $conn->error;
      }*/
      //echo $conn->query("SELECT * FROM writeups WHERE id='1';");
      echo "<br><br>";
      /*this block is the first test of retrieval and reference code; it works
      if($result = $conn->query("SELECT * FROM writeups")){
        if ($count = $result->num_rows){
          echo "<p>The row count is ",$count,"</p>";
            while ($row = $result->fetch_object()){
              echo $row->title, $row->body;
            }
            $result->free();
        }
        else{
          die($conn->error);
        }
      }*/
      $inc = 1;
      //this variable must increment when looping through the db for various items
      if ($result = $conn->query("SELECT * FROM writeups LIMIT ".$inc.", 1;")){
        if ($count = $result->num_rows){
          echo "The row count for this query is ",$count;
          while($row = $result->fetch_object()){
          echo $row->title,"<br>", $row->body;
          }
        }
      }
    }?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h1>Hello, this is the Input Page for Write-Ups</h1>
      <p>
        Currently, only text is supported; images will come later, if I get to it.
      </p>
      <p>
        Input the title below:
      </p>
      <input class="title" name="title">
      <p>
        Next, put in the Write-Up Itself
      </p>
      <textarea name="body" class="writeup"></textarea>
      <p>
        Now, after making sure all revisions are done... SUBMIT THAT SHEIT!
      </p>
      <button type="submit">UNLEASH THE KRAKEN</button>
    </form>
  </body>
</html>
