<?php
		//Import PHPMailer classes into the global namespace
		use PHPMailer\PHPMailer;
		use PHPMailer\SMTP;
		use PHPMailer\Exception;

		//Include PHPMailer library files
		require 'PHPMailer/PHPMailer.php';
		require 'PHPMailer/SMTP.php';
		require 'PHPMailer/Exception';

		$mail = new PHPMailer();
	/////

		//bdika
		//smtp settings
		$mail->isSMTP();                                            
		$mail->Host = 'smtp.gmail.com';                     
		$mail->SMTPAuth = true;                                  
		$mail->Username = 'myGmailAdress';                     
		$mail->Password = 'myGmailPassword';                               
		$mail->SMTPSecure = 'tls';        
		$mail->Port = 465; 
		$mail->isHTML(true); 
		
		//sofbdika


		if (isset($_POST["submit"])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$from = 'Contact with your Client - Contact Form'; 
			$to = 'sharipkinanna@gmail.com'; 
			$subject = $_POST['subject']; 
		
			$body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
	

			mail($to, $subject, $body, $from) or die("Error!");
			header("location: thank-you.html");	
		}
	
?>
