<?php
$db = @mysql_connect("localhost","ks2","N12345678");
mysql_select_db("paypal_test",$db);
mysql_set_charset("utf8");
date_default_timezone_set("Asia/Tbilisi");

//$path = dirname(dirname(__FILE__));


?>