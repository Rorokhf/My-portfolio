<?php
if(isset($_post['send']))
{
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if (empty($name) || empty($visitor_email) || empty($message)) {
    header('location:index.php?error');
} else {
    //put serval link
    $email_from = "https://rorokhf.github.io/My-portfolio/";
    $email_subject = "";
    $email_body = "User Name: $name.\n" .
        "User Email: $visitor_email.\n" .
        "User Message: $message.\n";

    $to = " black.flower55candy@gmail.com";
    $headers = "From:$email_from\r\n";
    $headers .= "Reply-To: $visitor_email \r\n";


    if (mail($to, $email_subject, $email_body, $headers)) {
        header("location:index.php?success");
    }
}
}