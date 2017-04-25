<?php

/**
 * User: junade
 * Date: 03/02/2017
 * Time: 15:18
 */
class Person
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return "Hello! My name is " . $this->name . ".";
    }
}