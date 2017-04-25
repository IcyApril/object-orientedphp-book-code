<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 18/03/2017
 * Time: 22:53
 */
class Song implements Music
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function play(): string
    {
        return "Playing song: " . $this->name . "\n";
    }
}