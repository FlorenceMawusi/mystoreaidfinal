<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['phone'];
  $message = $_POST['message'];

  


  $email_from = 'support@mystoreaid.com';

   $email_subject = "New Form submission";

	
    $email_body = "You have received a new message from $name.\n.Here is the message:\n $message. \n Contact $name at $visitor_email";

    $to = "pearlmakgem2@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    // $headers .= "Cc: someone@domain.com \r\n";

    // $headers .= "Bcc: someoneelse@domain.com \r\n";

    mail($to,$email_subject,$email_body,$headers);


    header("Location: index.html");
 exit();
?>

