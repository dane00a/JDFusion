<!DOCTYPE html>
<html>
  <head>
    <link href="css/webmaster.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php include("menu.html");
  //  echo "The date is: ".date("Y-m-d H:i:s")."<br>";
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
        echo "Connected Successfully to ", $db;
      }
      //END OF SQL CONNECTION; IF SUCCESSFUL, PROCESSING BEGINS HERE
      $date = date("Y-m-d H:i:s");
      echo $date;
      function fixinput($data){
        stripslashes($data);
        htmlspecialchars($data);
        return $data;
      }
      //fixed input
      $title = $body = "";
      $title = fixinput($_POST["title"]);
      $body = fixinput($_POST["body"]);
      mysql_real_escape_string($title);
      mysql_real_escape_string($body);
      echo " ".$title;
      echo " ".$body;
      //add a check for images for image support, maybe? is better solution? EDIT: NAH
      //this variable is the query to insert things into the table
      $sql = "INSERT INTO writeups (title,body,dateandtime) VALUES (\"$title\", \"$body\",\"$date\");";
      //check to see if insertion went through
    /*  if ($conn->query($sql) === TRUE){
        echo "<br> New entry created successfully";
      }
      else{
        echo "GODDAMNIT SOMETHING WENT REALLY FUCKING WRONG. ERROR: ". $sql . "<br>" . $conn->error;
      }*/
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
      //this next block determines the number of rows in the writeups table by
      $rowcountsql= "SELECT id FROM writeups ORDER BY id;";
      if ($result=$conn->query($rowcountsql))
        {
        // Return the number of rows in result set
        $rowcount=mysqli_num_rows($result);
        printf("Result set has %d rows.\n",$rowcount);
        // Free result set
        mysqli_free_result($result);
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
            echo "titlecontent is ", $titlecontent,"<br>";
            echo "writeupcontent is ", $writeupcontent,"<br>";
            echo "date and time is ", $rowdateandtime, " <br>";
            }
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
        Next, put in the Write-Up Itself. There cannot be "" or '' in the writing.
      </p>
      <textarea name="body" class="writeup"></textarea>
      <p>
        Now, after making sure all revisions are done... SUBMIT THAT SHEIT!
      </p>
      <button type="submit">UNLEASH THE KRAKEN</button>
    </form>
  </body>
</html>
