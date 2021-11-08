<?php
require '../PHPMailer/PHPMailerAutoload.php';
						$mail = new PHPMailer;

						$mail->isSMTP();
						//$mail->SMTPDebug = 3;
						$mail->CharSet = 'UTF-8';
						$mail->Host = 'smtp.office365.com';
						$mail->Port       = 587;
						$mail->SMTPSecure = 'tls';
						$mail->SMTPAuth   = true;
						$mail->Username = 'info@auto4rental.com';
						$mail->Password = 'Aa123456@';
						$mail->From = 'info@auto4rental.com';
						$mail->FromName = 'Auto4rental Company';
						$mail->AddAddress("info@auto4rental.com");
						//$mail->AddAddress("info@auto4rental.com");
						$mail->Subject  = 'ახალი შეკითხვა';
						$mail->Body     = 'მომხმარებელის სახელი: '.$_POST['name'].'<br>E-mail: '.$_POST[email].'<br>მობილური: '.$_POST[mob].'<br>შეკითხვა: '.$_POST[question];
						$mail->IsHTML(true);
						$mail->send();
?>