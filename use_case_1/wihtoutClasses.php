<?php

$banana = 1;
$apple = 1.5;
$wineBottle = 10;


$fruitTax = ((6* $banana ) + (3 * $apple))  * 0.06;
$fruitAfterTax = ((6* $banana ) + (3 * $apple)) + $fruitTax;


$wineTax = 2 * $wineBottle * 0.21;
$wineAfterTax = 2 * $wineBottle + $wineTax;


$fruitBasket = (6* $banana ) + (3 * $apple) + (2* $wineBottle);
$taxBasket = $fruitAfterTax + $wineAfterTax;

echo "<br> Price of full fruitbasket without tax: $fruitBasket";
echo "<br> Price of full basket with tax: $taxBasket ";
