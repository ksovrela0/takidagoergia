<?
include("db.php");

include("person.php");


$person = new person();

$person->dataAccept($_POST);
$ans = $person->startAction();

echo $ans;
?>