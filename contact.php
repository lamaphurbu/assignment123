<?php

$firstname = $_post['firstname'];
$lastname = $_post['lastname'];
$email = $_post['email'];
$username = $_post['username'];
$password = $_post['psw'];
$DOB = $_post['dob'];
$gender = $_post['gender']
$message = $_post['messages'];

//$to = "phurbumala97@gmail.com";
$subject ="mail from website";
$text = "from"=.$username. "r/n message"=.$message;

//$header="from:website12@gmail.com";

if($email!=null){
	mail("phurbumala97@gmail.com",$subject,$text,)
}
?>
