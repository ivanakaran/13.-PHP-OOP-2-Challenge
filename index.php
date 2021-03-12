<?php
require_once 'Interface.php';
require_once 'Stall.php';
require_once 'Product.php';
require_once 'ProductInKG.php';
require_once 'ProductInGunnySack.php';
require_once 'Orange.php';
require_once 'Potato.php';
require_once 'Nuts.php';
require_once 'Kiwi.php';
require_once 'Pepper.php';
require_once 'Raspberry.php';
require_once 'StallOne.php';
require_once 'StallTwo.php';

$stallOne->addProduct($oranges);
$stallOne->addProduct($potatoes);
$stallOne->addProduct($nuts);

$stallTwo->addProduct($kiwi);
$stallTwo->addProduct($pepper);
$stallTwo->addProduct($raspberries);

$oranges->setTotalKg(4);
$nuts->setTotalKg(2);
$raspberries->setTotalKg(3);

$shoppingCart =
    [
    $oranges,
    $potatoes,
    $nuts,
    $kiwi,
    $pepper,
    $raspberries,
];

$sum = 0;
foreach ($shoppingCart as $product) {

    $sum += $product->total();
}
echo "The total sum is: " . $sum . " denars.<br>";