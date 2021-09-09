<?php

class Car
{
    private string $brand;
    private string $model;
    private string $engine;
    private int $mileage;

    public function __construct(string $brand, string $model, string $engine, int $mileage)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->engine = $engine;
        $this->mileage = $mileage;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getEngine(): string
    {
        return $this->engine;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }
}