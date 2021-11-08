<?phpphp

if(isset($_REQUEST['name']) and isset($_REQUEST['amount']) and isset($_REQUEST['country']))
{
    if(!empty($_REQUEST['amount']))
    {
        $amount = $_REQUEST['amount'];
        $country = $_REQUEST['country'];
        if(empty($_REQUEST['name']))
        {
            $name = 'Anonymous';
        }
        else{
            $name =$_REQUEST['name'];
        }
    }

    
}
$payNowButtonUrl = 'https://www.paypal.com/cgi-bin/websc';

$receiverEmail = 'constantinmos@gmail.com'; //email получателя платежа(на него зарегестрирован paypal аккаунт) 

$returnUrl = 'https://georgiaholyland.com/paypal/suc.html';
$customData = array("username"=>$name,"country"=>$country);

?>
<p>Please wait... redirecting to payment page......</p>
<form action="<?phpphp echo $payNowButtonUrl; ?>" method="post">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="<?phpphp echo $receiverEmail; ?>">
	<input type="hidden" name="upload" value="1">
	
    <input type="hidden" name="no_shipping" value="0">
    <input type="hidden" name="return" value="<?phpphp echo $returnUrl; ?>">

    <input type="hidden" name="custom" value='<?phpphp echo json_encode($customData);?>'>
    <input type='hidden'name='amount' value="<?phpphp echo $amount ?>">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="lc" value="US">
    <input type="hidden" name="bn" value="PP-BuyNowBF">

    <button type="submit">
        Pay Now        
    </button>
 </form>