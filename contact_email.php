
<html>

  <body>
    <?php
    $to = "russvetsper@gmail.com/index.html";
    $subject = "work contact";
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    $headers = "From: $email";
    $sent = mail($to,$subject,$message,$headers);
     ?>
  </body>
</html>
