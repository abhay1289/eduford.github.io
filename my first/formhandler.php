<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from= 'abhay98894201@gmail.com';

$email_subject='New Form Submission'

$emai_body="user name: $name.\n".
            "user Email:"visitor_email.\n".
            "subject:$subject.\n".
            "user message:$message.\n";

            $to = 'abhay98894201@gmail.com';

            $headers= "From:$email_from \r\n";
            
            $headers= "reply to:$visitor_email \r\n";

            mail($to,email_subject , $email_body , $headers);

            header ("location:contact.html");
?>