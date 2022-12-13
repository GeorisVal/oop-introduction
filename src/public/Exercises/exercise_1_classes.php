<?php

declare(strict_types=1);

// EXERCISE 1
//DONE: Create a class beverage.
//DONE: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
//DONE: Have a default value "cold" in the construct for temperature.
class Beverage {
    public string $color;
    public float $price;
    public string $temperature;
    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function getInfo():void {
        echo "This beverage is $this->temperature and $this->color.";
    }
    public function test():void {
        echo Beer::barname;
    }
}
// Remember for now we will use properties and methods that can be accessed from everywhere.
//DONE: Make a getInfo function which returns "This beverage is <temperature> and <color>."
//DONE: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically print the getInfo on the screen.
//DONE: Print the temperature on the screen.

$cola = new Beverage("black", 2);
// $cola->getInfo();
// echo "<br>".$cola->temperature;

// USE TYPEHINTING EVERYWHERE!
