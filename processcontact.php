<?php
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $subject = $_POST['subject'];
  $inquiry = $_POST['inquiry'];
//  $message = "FROM: " + $f_name + " " + $l_name + "\r\n" + "EMAIL: " + $email + "\r\n" + "COMPANY: " + $company + "\r\n" + "SUBJECT: " + $subject + "\r\n" + "MESSAGE: " + $inquiry;
echo $message = <<<MSG
  FROM: $f_name $l_name \n
  EMAIL: $email \n
  COMPANY: $company \n
  SUBJECT: $subject \n
  MESSAGE: $inquiry
MSG;
  mail("dane.andrews99@gmail.com", $subject, $message);
  mail("jeremyad55@gmail.com", $subject, $message);
  echo '<script>window.location = "contact_thanks.php"</script>';
 ?>
