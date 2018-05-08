<?php


$myemail = 'anthony13nicholson@live.com';

if (isset($_POST['submit'])){

$name = $_POST['name'];
$contact = $_POST['contact'];
$requests = $_POST['requests'];

$to            = $myemail;
$email_subject = "Contact form submission: $name";
$email_body    = "You have received a new message. Here are the details: \n Name: $name \n Email: $contact \n Message: \n $requests";

$headers = "From: $myemail \n";
$headers .= "Reply-To:  $contact";
 
mail($to, $email_subject, $email_body, $headers);

//redirect to the 'Home' page
header("Location: http://www.kaleighcentralfloridaphotography.com");
}

?>
