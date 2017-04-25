<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 13/03/2017
 * Time: 20:38
 */
class Pizza
{
    private $recipe;
    private $extraCheese;
    private $size;
    private $sauce;

    public function __construct(PizzaBuilder $builder)
    {
        $this->recipe = $builder->recipe;
        $this->extraCheese = $builder->extraCheese;
        $this->size = $builder->size;
        $this->sauce = $builder->sauce;
    }

    public function getLabel(): string
    {
        $cheese = $this->extraCheese ? " (with extra cheese) " : "";

        return $this->recipe . $cheese . " pizza with " . $this->sauce . " sauce. Diameter (inches): " . $this->size;
    }
}