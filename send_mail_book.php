<?php
	$to = "jmartinez@imaginacionweb.net,jdrendon@imaginacionweb.net"; /* Your Email */
	$subject = "Classic Restaurant Book a Table"; /* Issue */
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A"); 	
	$msg="
	Message sent from website on date for a book table $date, hour: $time.\n
	the Information is next:\n

	Name: $_REQUEST[name]
	Number: $_REQUEST[number]
	Date: $_REQUEST[date]
	Time: $_REQUEST[time]
	";

	mail($to, $subject, $msg, "From: $_REQUEST[name]");
	echo "Thank you for your message";
?>
