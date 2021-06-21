<?php

require_once "user\primeUser.php";
require_once "creditCard\creditCard.php";
require_once "product/smartphone.php";


$tommaso = new User("Tommaso", "Cavaletti", "ilBigo", 25, "cavalettitommaso@gmail.com");
$osammot = new PrimeUser("Tommaso", "Cavaletti", "ilBigo", 25, "cavalettitommaso@gmail.com");
$carta = new CreditCard("1234567894561234", "145", "Tommaso", "Cavaletti", "01/08/2022");
$iPhoneX = new Smartphone(999, "iPhone X", "Apple", 4.5, 12, 5, 2018);
var_dump($tommaso);
var_dump($osammot);
var_dump($carta);
var_dump($iPhoneX);


?>

