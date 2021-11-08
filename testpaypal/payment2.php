
<?php
include("../db.php");
$data = serialize($_POST);
$get = mysql_query("SELECT * FROM article_background WHERE id='16'");
$getr = mysql_fetch_array($get);

$data = unserialize($getr[pic1]);

$curl = curl_init(); //инициализация сеанса
	curl_setopt($curl, CURLOPT_URL, 'https://ipnpb.paypal.com/cgi-bin/webscr'); //урл сайта к которому обращаемся
	curl_setopt($curl, CURLOPT_HEADER, 0); //выводим заголовки
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($curl, CURLOPT_POST, 1); //передача данных методом POST
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //теперь curl вернет нам ответ, а не выведет
	curl_setopt($curl, CURLOPT_POSTFIELDS, 'cmd=_notify-validate&'.http_build_query($data));
	$res = curl_exec($curl);
	echo $res;
//$add = mysql_query("INSERT INTO article_background(`pic1`) VALUES('$data')") or die(mysql_error());
$payNowButtonUrl = 'https://www.paypal.com/cgi-bin/websc';
$userId = 315; // id текущего пользователя

$receiverEmail = 'constantinmos@gmail.com'; //email получателя платежа(на него зарегестрирован paypal аккаунт) 

$productId = 1;
$itemName = 'Product 1';	// название продукта
$amount = '0.01'; // цена продукта(за 1 шт.)
$quantity = 1;	// количество

$returnUrl = 'https://georgiaholyland.com/paypal/suc.html';
$customData = "['user_id' => $userId, 'product_id' => $productId]";
?>

<form action="<?php echo $payNowButtonUrl; ?>" method="post">
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="business" value="<?php echo $receiverEmail; ?>">
	<input type="hidden" name="upload" value="1">
    <input id="paypalItemName" type="hidden" name="item_name_1" value="<?php echo $itemName; ?>">
    <input id="paypalQuantity" type="hidden" name="quantity_1" value="<?php echo $quantity; ?>">
    <input id="paypalAmmount" type="hidden" name="amount_1" value="<?php echo $amount; ?>">
	
    <input type="hidden" name="no_shipping" value="0">
    <input type="hidden" name="return" value="<?php echo $returnUrl; ?>">

    <input type="hidden" name="custom" value="<?php echo json_encode($customData);?>">

    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="lc" value="US">
    <input type="hidden" name="bn" value="PP-BuyNowBF">

    <button type="submit">
        Pay Now        
    </button>
 </form>