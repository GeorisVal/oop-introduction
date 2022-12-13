<?php

declare(strict_types=1);
require_once './exercise_1_classes.php';
//EXERCISE 2

//DONE: Make class beer that extends from Beverage.
//DONE: Create the properties name (string) and alcoholPercentage (float).
//DONE: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

/* class Beer extends Beverage {
    private string $name;
    private float $alcoholPercentage;
    private function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold")
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        parent::__construct($color, $price, $temperature);
    }
    private function getAlcoholPercentage():void {
        echo "$this->name has a percentage of $this->alcoholPercentage% alcohol.";
    }
}*/

// Remember for now we will use properties and methods that can be accessed from everywhere.
// DONE: Make a getAlcoholPercentage function which returns the alocoholPercentage.
// DONE: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
// DONE: Also the name equal to Duvel and the alcohol percentage to 8,5%
// DONE: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

/* $duvel = new Beer("blond", 3.5, "Duvel", 8.5);
$duvel->getAlcoholPercentage();
echo "<br>$duvel->name has a percentage of alcohol of $duvel->alcoholPercentage%.<br>";
echo $duvel->color;
echo "<br>";
$duvel->getInfo(); */

// Make sure that each print is on a different line.
// Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
// USE TYPEHINTING EVERYWHERE!