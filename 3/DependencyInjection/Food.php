<?php

/**
 * User: junade
 * Date: 24/01/2017
 * Time: 07:58
 */
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