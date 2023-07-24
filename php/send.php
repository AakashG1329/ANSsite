<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['emailaddress'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "Contact@agilensmart.com";
$subject = "Enquiry request from Contact-form";
$txt =
"Name   :". $name . "\r\n  
Email   : " . $email . "\r\n  
subject : ". $subject . "\r\n
Message : " . $message;


$headers = "From: Contact@agilensmart.com" ;

 if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>






