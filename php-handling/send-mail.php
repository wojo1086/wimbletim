<?php
// 0 = successful
// 1 = not all post values are set
// 2 = mail not sent
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']))
	{
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
		$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		$compMessage = $name . "<br />" . $email . "<br />" . $phone . "<br />" . $message;
		
		require '../PHPMailer-master/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'mail.wimbletim.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'tim@wimbletim.com';                 // SMTP username
		$mail->Password = 'Badboy21!';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 26;                                    // TCP port to connect to

		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->setFrom('tim@wimbletim.com', 'Inquiry');
		$mail->addAddress('t.wojtylak@gmail.com');     // Add a recipient

		$mail->Subject = 'Wimbletim Inquiry';
		$mail->Body    = $compMessage;


		if(!$mail->send()) {
			$ret = 2;
		} else {
		   	$ret = 0;
		}
	}else{
		$ret = 1;
	}
	echo $ret;
?>