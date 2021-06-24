<?php
	// if (isset($_POST["submit"])) {
	// 	// Mail Transport
	// 	$transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
    // 	->setUsername('username@gmail.com') // Your Gmail Username
    // 	->setPassword('my_secure_gmail_password'); // Your Gmail Password
	// 	$name = $_POST['name'];
	// 	$email = $_POST['email'];
	// 	$message = $_POST['message'];
	// 	$from = 'From Client Contact Form'; 
	// 	$to = 'sharipkinanna@gmail.com'; 
	// 	$subject = $_POST['subject']; 
	
	// 	$body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
	
	// 	mail($to, $subject, $body, $from) or die("Error!");
	// 	header("location: thank-you.html");
	
	// }



	

		//Import PHPMailer classes into the global namespace
		use PHPMailer\PHPMailer;
		use PHPMailer\SMTP;
		use PHPMailer\Exception;

		//Include PHPMailer library files
		require 'PHPMailer/PHPMailer.php';
		require 'PHPMailer/SMTP.php';
		require 'PHPMailer/Exception';

		$mail = new PHPMailer();

		//smtp settings
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host = 'smtp.example.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth = true;                                   //Enable SMTP authentication
		$mail->Username = 'sharipkinanna@gmail.com';                     //SMTP username
		$mail->Password = '1609tygarin1';                               //SMTP password
		$mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port = 465; //465TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//email settings
		$mail->isHTML(true); 
		$mail->setFrom($email, $name); 
		$mail->addAddress('sharipkinanna@gmail.com'); 
		$mail->Subject = ('$email ($subject)'); 
		$mail->Body = $message; //$body


		if(isset($_POST['name']) && isset($_POST['email'])){
			$name = $_POST['name'];
	 		$email = $_POST['email'];
			$email = $_POST['subject'];
			$body = $_POST['message'];

			if($mail->send()){
				$status = "success";
				// $response = "Email is sent!";
				header("location: thank-you.html");
			}
			else{
				$status = "failed";
				$response = "Message could not be sent. Mailer Error: <br>" . $mail->ErrorInfo;
			}
				
		}


	
?> 