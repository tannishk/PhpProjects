<html>
<head>
<title>Sending email using PHP</title>
</head>
<body>
<?php
   $to = "tannishk@gmail.com";// change it to see the magic  
   $subject = "This is subject";
   $message = "This is simple text message.";
   $header = "From:tannishk@gmail.com\r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }
?>
</body>
</html>
