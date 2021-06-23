<?php

require_once "traits/product-basics.php";
require_once "user/primeUser.php";
require "product/product.php";
require_once "payment/creditCard.php";
require_once "product/smartphone.php";
require_once "product/laptop.php";
require_once "product/tablet.php";


try {
    $tommaso = new User("Tommaso", "Cavaletti", "ilBigo", 25, "cavalettitommaso@gmail.com");
    var_dump($tommaso);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

try{
    $osammot = new PrimeUser("Tommaso", "Cavaletti", "ilBigo", 25, "cavalettitommaso@gmail.com");
    var_dump($osammot);
}  catch (Exception $e) {
    var_dump($e->getMessage());
}


try {
    $carta = new CreditCard("1345678945467234", "145", "Tommaso", "Cavaletti", "01/05/2020");
    var_dump($carta);
} catch(Exception $e) {
    var_dump($e->getMessage()); 
}
$iPhoneX = new Smartphone(999, "iPhone X", "Apple", 4.5, 12, 5, 2018);
$AsusROG505 = new Laptop(1280, "RoG 505", "Asus", 4.2, 25, 36, 2019);
$iPad4 = new Tablet(750, "iPad 4", "Apple", 4.8, 18, 12, 2016);

var_dump($iPhoneX);
var_dump($AsusROG505);
var_dump($iPad4);

?>

