<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Shop\Shop;
use Shop\Item;

$items = array(
    new Item('Dexterity vest', 10, 20),
    new Item('Blue cheese', 2, 0),
    new Item('Healing potion', 5, 7),
    new Item('Mjolnir', 0, 80),
    new Item('Mjolnir', -1, 80),
    new Item('Concert tickets', 15, 20),
    new Item('Concert tickets', 10, 49),
    new Item('Concert tickets', 5, 49),
    // new Item('Magic cake', 3, 9)
);

$app = new Shop($items);

$days = 2;
if (count($argv) > 1) {
    $days = (int) $argv[1];
}

for ($i = 0; $i < $days; $i++) {
    echo("-------- day $i --------" . PHP_EOL);
    echo("name, sellIn, quality" . PHP_EOL);
    foreach ($items as $item) {
        echo $item . PHP_EOL;
    }
    echo PHP_EOL;
    $app->updateQuality();
}
