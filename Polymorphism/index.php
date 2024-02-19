<?php
abstract class Vehicle
{
    public abstract function basePrice();
    public abstract function perKilo();
    public function total($kilo)
    {
        return $this->basePrice() + ($this->perKilo() * $kilo);
    }
}

class Bike extends Vehicle
{
    public function basePrice()
    {
        return 100;
    }
    public function perKilo()
    {
        return 20;
    }
}

class Car extends Vehicle
{
    public function basePrice()
    {
        return 150;
    }
    public function perKilo()
    {
        return 50;
    }
}

$bike = new Bike();
echo $bike->total(7) . PHP_EOL;

$car = new Car();
echo $car->total(5);
