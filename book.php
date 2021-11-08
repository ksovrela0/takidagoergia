<?
include("db.php");

if(isset($_POST['trip']) and isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['number_person']))
{
	$trip = $_POST['trip'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pers = $_POST['number_person'];
	if(empty($trip) or empty($name) or empty($email) or empty($phone) or empty($pers))
	{
		echo 'Вы пропустили важные поля';
	}
	else
	{
		require 'PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->isSMTP();
		//$mail->SMTPDebug = 3;
		$mail->CharSet = 'UTF-8';
		$mail->Host = 'smtp.office365.com';
		$mail->Port       = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth   = true;
		$mail->Username = 'info@georgiaholyland.com';
		$mail->Password = 'c4d3e64c!';
		$mail->From = 'info@georgiaholyland.com';
		$mail->FromName = 'Takida';
		$mail->AddAddress("yulianna1972@mail.ru");
		//$mail->AddAddress("info@auto4rental.com");
		$mail->Subject  = 'takidageorgia.com - Новая Бронь';
		$mail->Body     =  'ФИО: '.$name.'<br>Название тура: '.$trip.'<br>E-mail: '.$email.'<br>Мобильный: '.$phone.'<br>Кол-во чел: '.$pers;
		$mail->IsHTML(true);
		$mail->send();
		
		echo 'Мы получили вашу заявку. Наш оператор скоро свяжется с вами!!!';
	}
}
?>