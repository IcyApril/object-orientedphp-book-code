<?php
/**
 * User: junade
 * Date: 03/01/2017
 * Time: 14:07
 */

require_once('./vendor/autoload.php');

$oscar = new \IcyApril\ChapterTwo\Dog();

for ($talk = 1; $talk <= 10; $talk++) {
    echo $oscar->talk() . ' ' . $oscar->getTalkCount() . PHP_EOL;
}

$dogFood = new \IcyApril\ChapterTwo\Food("Dog Food");
echo $oscar->feed($dogFood) . PHP_EOL;

echo "Dogs have " . \IcyApril\ChapterTwo\Dog::legCount() . " legs." . PHP_EOL;

$whiskers = new \IcyApril\ChapterTwo\Cat();
echo $whiskers->talk() . PHP_EOL;

$felix = new \IcyApril\ChapterTwo\AegeanCat();
echo $felix->talk() . PHP_EOL;