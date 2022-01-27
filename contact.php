<?php 
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

//put serval link
$email_from="Rawan's portfolio";
$email_subject="";
$email_body="User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message.\n";

$to = " black.flower55candy@gmail.com";
$headers="From:$email_from\r\n";
$headers.="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");
?>