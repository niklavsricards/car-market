<?php

require_once 'Car.php';
require_once 'StoreItem.php';
require_once 'Store.php';

$store = new Store([
    new StoreItem(
        new Car('Audi', 'A4', 'Diesel', 250000), 10000
    ),
    new StoreItem(
        new Car('Bmw', '320i', 'Petrol', 350000), 5000
    ),
    new StoreItem(
        new Car('Mercedes', 'S200', 'Diesel', 175000), 7500
    ),
]);

$store->showAllItems();