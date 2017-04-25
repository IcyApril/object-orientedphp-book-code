<?php
/**
 * User: junade
 * Date: 18/01/2017
 * Time: 10:35
 */

namespace IcyApril\ChapterTwo;


class Food
{
    private $food;

    public function __construct(string $food)
    {
        $this->food = $food;
    }

    public function getFood(): string
    {
        return $this->food;
    }
}