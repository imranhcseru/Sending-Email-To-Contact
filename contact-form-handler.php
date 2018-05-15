<?php 
	$name = $_POST['name'];
	$to = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'imranhosen133@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "Email Sender : $name.\n".
					"Email From : $email_from.\n".
					"The message  : $message.\n";
	$headers = "From: $email_from\r\n";
	$headers = "Reply-To: $visitor_email\r\n";
	mail($to,$email_subject,$message,$headers);
	header("Location:index.html");

?>