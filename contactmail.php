<?php
//get data from form  
$firstname = $_POST['name'];
$phone = $_POST['phone']; 
$email= $_POST['email'];
$service= $_POST['service'];
$message= $_POST['message'];
$to = "tuyizerediane01@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $firstname . "\r\n Phone number = " . $phone . "\r\n Email =" . $email. "\r\n service =" . $service. "\r\n Message =" . $message ;
$headers = "From: noreply@ukc.com" . "\r\n" .
"CC: test@ukc.rw";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>