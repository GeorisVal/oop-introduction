<?php

declare(strict_types=1);
require_once './exercise_1_classes.php';
// EXERCISE 6

// Copy the classes of exercise 2.
class Beer extends Beverage {
    private string $name;
    private float $alcoholPercentage;
    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold")
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        parent::__construct($color, $price, $temperature);
    }
    public function getAlcoholPercentage():void {
        echo "$this->name has a percentage of $this->alcoholPercentage% alcohol.";
    }

    const barname = 'Het Vervolg';

    public function getBarname():string {
        return self::barname;
    }

    static string $address = "Melkmarkt 9, 2000 Antwerpen";

    public function getAddress():string {
        return self::$address;
    }
}
// DONE: Change the properties to private.
// DONE: Make a const barname with the value 'Het Vervolg'.
// DONE: Print the constant on the screen.
// DONE: Create a function in beverage and use the constant.
// DONE: Do the same in the beer class.
// DONE: Print the output of these functions on the screen.
// DONE: Make sure that every print is on a new line.

// Use typehinting everywhere!
$jupiler = new Beer("blond", 1.80, "Jupiler", 6.4, "cold");
echo Beer::barname ."<br>";
echo $jupiler->getBarname() ."<br>";
echo $jupiler->test();