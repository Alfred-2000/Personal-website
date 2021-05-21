<?php
//get data from form  

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "palfred1003@gmail.com";
$subject = "Mail From Personal website";
$txt ="First Name = ". $firstname . "\r\n  Last Name = ". $lastname . 
        "\r\n  Email = ". $email . "\r\n Subject =". $subject . "\r\n Message =". $message;
        
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
