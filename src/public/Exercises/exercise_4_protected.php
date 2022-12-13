<?php

declare(strict_types=1);
require_once './exercise_1_classes.php';

//EXERCISE 4

// Copy the code of exercise 3 to here and delete everything related to cola.
/* class Beer extends Beverage {
    protected string $name;
    protected float $alcoholPercentage;
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
echo $reflective->invoke($duvel);*/
// DONE: Make all properties protected.
// DONE: Make all the other prints work without error without changing the beverage class.
// HUH?: Don't call getters in de child class.

// USE TYPEHINTING EVERYWHERE!
