<?php

class StoreItem
{
    private Car $car;
    private int $price;

    public function __construct(Car $car, int $price)
    {
        $this->car = $car;
        $this->price = $price;
    }

    public function displayStoreItem(): void
    {
        echo "×*********************************" . PHP_EOL;
        echo "Brand: {$this->car->getBrand()}" . PHP_EOL;
        echo "Model: {$this->car->getModel()}" . PHP_EOL;
        echo "Engine type: {$this->car->getEngine()}" . PHP_EOL;
        echo "Mileage: {$this->car->getMileage()} km" . PHP_EOL;
        echo "Price: {$this->price} EUR" . PHP_EOL;
    }
}