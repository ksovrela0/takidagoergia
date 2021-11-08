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
						$mail->Subject  = 'ახალი ჯავშანი';
						$mail->Body     = 'მომხმარებელის სახელი: '.$_POST['firstname'].'<br>E-mail: '.$_POST[email].'<br>მობილური: '.$_POST[mob].'<br>მანქანა: '.$_POST[car].'!!! <br>წელი: '.$_POST[caryear].'<br>დაწყება: '.$_POST[pick].'<br>დამთავრება: '.$_POST['end'].'<br>'.$_POST[pickoff].'<br>ფასი: '.$_POST[price].'<br>სერვისები: '.$_POST[serv];
						$mail->IsHTML(true);
						$mail->send();
?>