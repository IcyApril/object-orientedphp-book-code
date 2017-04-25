<?php

/**
 * User: junade
 * Date: 10/02/2017
 * Time: 04:45
 */
class Town implements Region
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getInfo(): string
    {
        return $this->name . " is a town.";
    }
}