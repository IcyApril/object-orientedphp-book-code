<?php

/**
 * User: junade
 * Date: 10/02/2017
 * Time: 04:46
 */
class Village implements Region
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getInfo(): string
    {
        return $this->name . " is a village.";
    }
}