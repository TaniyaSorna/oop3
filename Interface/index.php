<?php
interface  Vehicles
{
    public function basePrice();
    public function perKilo();
    public function total($kilo);
}

class Bike implements Vehicles
{
    public function basePrice()
    {
        return 100;
    }
    public function perKilo()
    {
        return 20;
    }
    public function total($kilo)
    {
        return $this->basePrice() + ($this->perKilo() * $kilo);
    }
}

class Car implements Vehicles
{
    public function basePrice()
    {
        return 300;
    }
    public function perKilo()
    {
        return 80;
    }
    public function total($kilo)
    {
        return $this->basePrice() + ($this->perKilo() * $kilo);
    }
}

$bike = new Bike();
echo $bike->total(7) . PHP_EOL;

$car = new Car();
echo $car->total(7);
