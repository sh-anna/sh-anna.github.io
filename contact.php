<?php
	if (isset($_POST["submit"])) {
		
		//bdika
		//smtp settings
		$mail->isSMTP();                                            
		$mail->Host = 'smtp.example.com';                     
		$mail->SMTPAuth = true;                                  
		$mail->Username = 'sharipkinanna@gmail.com';                     
		$mail->Password = '1609tygarin1';                               
		$mail->SMTPSecure = 'tls';        
		$mail->Port = 465; 

		//email settings
		$mail->isHTML(true); 
		$mail->setFrom($email, $name); 
		$mail->addAddress('sharipki
		//sofbdika
		
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
