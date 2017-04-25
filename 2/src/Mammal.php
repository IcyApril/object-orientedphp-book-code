<?php
/**
 * User: junade
 * Date: 21/01/2017
 * Time: 18:45
 */

namespace IcyApril\ChapterTwo;


abstract class Mammal
{
    private static $legCount = 4;

    public abstract function talk(): string;

    public function feed(Food $food): string
    {
        return "Eaten: " . $food->getFood();
    }

    public static function legCount(): int
    {
        return self::$legCount;
    }
}