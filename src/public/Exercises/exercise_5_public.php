<?php

declare(strict_types=1);

// EXERCISE 5

//Copy the class of exercise 1.
class Beverage2
{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): void
    {
        echo "This beverage is $this->temperature and $this->color.";
    }
}
$cola = new Beverage2('Black', 2.0);
$reflect = new ReflectionProperty("Beverage2", "color");
echo $reflect->getValue($cola) . "<br>";
$reflect2 = new ReflectionProperty("Beverage2", "price");
echo $reflect2->getValue($cola) . "<br>";
$reflect2->setValue($cola, "3.5");
echo $reflect2->getValue($cola);
// DONE: Change the properties to private.
// DONE: Fix the errors without using getter and setter functions.
// DONE: Change the price to 3.5 euro and print it also on the screen on a new line.
