<?php

declare(strict_types=1);
require_once './exercise_1_classes.php';

// EXERCISE 3

// DONE: Copy the code of exercise 2 to here and delete everything related to cola.
// DONE: Make all properties private.
// DONE: Make all the other prints work without error.
// DONE: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
// DONE: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
/* class Beer extends Beverage {
    private string $name;
    private float $alcoholPercentage;
    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold")
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        parent::__construct($color, $price, $temperature);
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getAlcoholPercentage():void {
        echo "$this->name has a percentage of $this->alcoholPercentage% alcohol.";
    }
    public function getName():string {
        return $this->name;
    }
    public function getPercentage():float {
        return $this->alcoholPercentage;
    }
    private function beerInfo():string {
        return "Hi I'm $this->name and have an alcohol percentage of $this->alcoholPercentage% and I have a $this->color color.";
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
$duvel->getAlcoholPercentage();
echo "<br>". $duvel->getName()." has a percentage of alcohol of ".$duvel->getPercentage()."%.<br>";
echo $duvel->color;
$duvel->setColor("light");
echo "<br>";
$duvel->getInfo();
echo "<br>";
$reflective = new ReflectionMethod('Beer', 'beerInfo');
$reflective->setAccessible(true);
echo $reflective->invoke($duvel);
*/
// Make sure that you use the variables and not just this text line.

// DONE: Print this method on the screen on a new line.

// USE TYPEHINTING EVERYWHERE!
