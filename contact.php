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
		$mail->Host = 'smtp.example.com';                     
		$mail->SMTPAuth = true;                                  
		$mail->Username = 'myGmailAdress';                     
		$mail->Password = 'myGmailPassword';                               
		$mail->SMTPSecure = 'tls';        
		$mail->Port = 465; 

		//email settings
		$mail->isHTML(true); 
		$mail->setFrom($email, $name); 
		$mail->addAddress('sharipkinanna@gmail.com');
		$mail->Subject = ('$email ($subject)'); 
		$mail->Body = $message;
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
