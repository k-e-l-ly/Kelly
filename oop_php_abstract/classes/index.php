<?php

include_once "abstract/paymenttypes_abstract.php";
include_once "classes/BuyProductClass.php";

$buyProduct = new BuyProduct();
echo $buyProduct -> getPayment();

?>

