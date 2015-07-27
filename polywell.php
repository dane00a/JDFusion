<!DOCTYPE html>
<html>
  <head>
    <link href="css/polywell.css" type="text/css" rel="stylesheet">
      <script>
    /*  function assignCookie(){
        window.alert(i);
        //total nr in list
       /*window.alert(document.getElementsByClassName("article").length);
        //pos in list and definition of variable per button
        var sqlindex = $sqlindex;
        for (i=0; i<=sqlindex;i++){
          var name = i;
          this [name] = $sqlindex;
          window.alert(name);//how do we get this to work?
        }*/
      /* This code will be developed later, I suppose... need to fix the above
       window.alert(dtartnum);
        var pattern = /Article Number \d{1,3}/;
          if(pattern.test(document.getElementsByClassName(dtartnum).value)){
            window.alert(pattern.test(document.getElementsByClassName(dtartnum).value));
          }
          else{
            window.alert(getElementsByClassName(dtartnum).value);
          }
      }*/
      function assignCookie(ele)      {
      window.alert("Caller is " +arguments.callee.caller.toString());
        var id = ele.id;
        window.alert('area element id = ' + id);
        window.location.href="templatepage.php?id="+id+"";
      }
      </script>
  </head>
  <body>
    <?php include("menu.html");?>
    <div class="wrapper">
      <div class="article first">
        <h1>Polywell Writeups</h1>
        <p>
          This is a blog of our progress on the Polywell Reactor.
        </p>
      </div>
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
          $article_number = $sqlindex + 1;
          echo $str=<<<ARTICLE
          <div class="article">
            <div class="titleanddate">
              <h2>$titlecontent</h2>
              <h3 class="dtartnum">Written $rowdateandtime, Article Number $article_number</h3>
            </div>
            <div class="truncate">
              <p class="writeup">
                $writeupcontent
              </p>
              <a style="font-weight:normal; font-size:1.2em;" id="$article_number" onClick="assignCookie(this)" >Read More...</a>
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
