<!DOCTYPE html>
<html>
  <head>
    <link href="css/contact.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php
      include("menu.html");
      ?>
      <div class="wrapper">
        <form action="processcontact.php" method="GET">
          <label>First Name</label><input id="f_name" name="f_name" class="form_field_nta" placeholder="First Name">
          <label>Last Name</label><input id="l_name" name="l_name" class="form_field_nta" placeholder="Last Name">
          <label>Email</label><input id="email" name="email" class="form_field_nta" placeholder="Email">
          <label>Company, If Applicable</label><input id="company" name="company" class="form_field_nta" placeholder="Company">
          <label>Subject</label><input id="subject" name="subject" class="form_field_nta" placeholder="Subject">
          <label>Inquiry</label><textarea id="inquiry" name="inquiry" class="form_field_textarea" placeholder="Inquiry"></textarea>
          <button type="submit" class="submit_button">SUBMIT</button>
        </form>
      </div>
  </body>
</html>
