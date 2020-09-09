<?php
  $name= $_post['name'];
  $visitor_email= $_post['email'];
  $message=$_post['message'];


  $email_form='infoaymen05@gmail.com';

  $email_subject="any questions about informatique";

  $email_body="User Name: $name .\n".
              "user email: $visitor-email.\n".
               "user Message: $message.\n"


  $to ="infoaymen05@gmail.com";
  
  $headers ="FROM : §email_from \r\n";

  $headers = "Reply-To: §visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("location: index.html");
  ?>
  
