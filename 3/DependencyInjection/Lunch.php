<?php

/**
 * User: junade
 * Date: 24/01/2017
 * Time: 07:58
 */
class Lunch
{
    private $main;
    private $dessert;

    public function __construct(Food $main, Food $dessert)
    {
        $this->main   = $main;
        $this->dessert = $dessert;
    }

    public function getMenu(): array
    {
        return [
            'main'   => $this->main->getFood(),
            'desert' => $this->dessert->getFood()
        ];
    }
}