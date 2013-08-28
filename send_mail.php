<?php
	$to = "daniel@hsdesignhouse.com"; /* Your Email */
	$subject = "Contact Form CityGrillGulfShores.com"; /* Issue */
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A"); 	
	$msg="
	Name: $_REQUEST[name]
	Email: $_REQUEST[email]
	
	Message sent from website.\n

	Message:
	$_REQUEST[message]";

	mail($to, $subject, $msg, "From: $_REQUEST[email]");
	echo "Thank you for your message";
?>
