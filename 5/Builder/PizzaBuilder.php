<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 13/03/2017
 * Time: 20:45
 */
class PizzaBuilder
{
    private $recipe;
    private $extraCheese;
    private $size;
    private $sauce;

    public function __construct(string $recipe)
    {
        $this->recipe = $recipe;
        $this->extraCheese = false;
        $this->size = 9;
        $this->sauce = "tomato";
    }

    public function addCheese()
    {
        $this->extraCheese = true;
    }

    public function setSize(int $size)
    {
        if ($size < 4) {
            throw new Exception('Pizza too small!');
        }

        $this->size = $size;
    }

    public function setSauce(string $sauce)
    {
        $this->sauce = $sauce;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}