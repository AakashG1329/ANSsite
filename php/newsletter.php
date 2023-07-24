<?php
//get data from form  

$email= $_POST['email'];


$to = "Contact@agilensmart.com";
$subject = "Enquiry request from Newsletter";
$txt =
"Email: ". $email ;


$headers = "From: Contact@agilensmart.com" ;

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:newsletterthanks.html");
?>






