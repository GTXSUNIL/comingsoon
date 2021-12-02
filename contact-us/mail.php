
<?php
//get data from form  
$name = $_POST['First Name'];
$LastName = $_POST['Last Name'];
$email= $_POST['E-mail'];
$message= $_POST['Message'];
$number = $_POST['Phone'];

$to = "sunilsahu0577@gmail.com";

$subject = "Mail From codeconia";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message ."\r\n Mobile number =". $number ."\r\n Last Name =".$Last Name;

$headers = "From: noreply@unityenterprise.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contact.html");
?>
