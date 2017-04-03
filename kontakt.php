<?php
//variables
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$title = $_POST['title'];
$who = "compol";
$to = "sklep@compol.com.pl";

//header for Polish characters
$header ="";
$header .="Od:" . $from . " \n";
$header .="Content-Type:text/plain;charset=utf-8";


//create message
$messageToSend = "";
$messageToSend .= "Imie i nazwisko: " . $name . "\n";
$messageToSend .= "Email: " . $email . "\n";
$messageToSend .= "Treść: " . $message . "\n";

mail($to, $title, $messageToSend, $header);

?>