<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$message = $_POST['message'];

$email_from='WebsitesEmail...com-DomainName';

$email_body = "User Name: $name.\n".
              "User Email: $vistor_email.\n". 
              "User Messsage: $message.\n". 
$to = 'BusinesssEmailAddress';

$headers ="From: $email_from \r\n";
$headers.="Reply-To: $vistor_email\r\n";

mail($to, $email_body, $headers);

header("Location: CONTACT2.html");
              



?>
