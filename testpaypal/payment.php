<?
include("db.php");
if(isset($_POST[txn_id]))
{
	$IPN = $_POST;
	
	$curl = curl_init(); //инициализация сеанса
	curl_setopt($curl, CURLOPT_URL, 'https://ipnpb.paypal.com/cgi-bin/webscr'); //урл сайта к которому обращаемся
	curl_setopt($curl, CURLOPT_HEADER, 0); //выводим заголовки
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($curl, CURLOPT_POST, 1); //передача данных методом POST
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //теперь curl вернет нам ответ, а не выведет
	curl_setopt($curl, CURLOPT_POSTFIELDS, 'cmd=_notify-validate&'.http_build_query($IPN));
	$res = curl_exec($curl);
	if($res == 'INVALID')
	{
		$datetime = date('d.m.Y - H:i');
		$custom = json_decode(stripslashes($IPN['custom']),true);
		$user = $custom['username'];
		$country = $custom['country'];
		$amount = 0;
		$txn_id = $IPN[txn_id];
		$payer_email = $IPN['payer_email'];
		$amount = $amount + $IPN['mc_gross'];

		$checkTran = mysql_query("SELECT * FROM transaction WHERE txn_id='$txn_id' LIMIT 1");
		$checkTranC = mysql_num_rows($checkTran);
		if($checkTranC == 0)
		{
			$regTran = mysql_query("INSERT INTO transaction(`VERIFIED`,`txn_id`,`user`,`amount`,`status`,`country`,`payer_email`,`datetime`) VALUES('$res','$txn_id','$user','$amount','proccessing','$country','$payer_email','$datetime')") or die(mysql_error());
			$valid = true;
			
			if($IPN[payment_status] != 'Completed')
			{
				$valid = false;
			}
			if($IPN[receiver_email] != 'constantinmos@gmail.com')
			{
				$valid = false;
			}
			
			if($valid == true)
			{
				$reg = mysql_query("UPDATE transaction SET status='Paid' WHERE txn_id='$txn_id'");
			}
			else
			{
				$reg = mysql_query("UPDATE transaction SET status='Failed' WHERE txn_id='$txn_id'");
			}
		}
	}
}
	
	

?>