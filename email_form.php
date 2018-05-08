<?php

$name = $_POST['name'];
$contact = $_POST['contact'];
$requests = $_POST['requests'];


$to = "anthony13nicholson@live.com";
$subject = "Photography Request";
$body = "This is an automated message from http://www.kaleighcentralfloridaphotography.com courtesy of your wonderful fiance " . \n\n . "You have recieved a message from " . $name . " who can be contacted at " . $contact . \n\n . $_requests;

mail ($to,$subject,$body);
header("Location: http://www.kaleighcentralfloridaphotography.com");

?>
