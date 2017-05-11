<?php

/**
 * User: junade
 * Date: 04/02/2017
 * Time: 01:09
 */
class Teacher
{
    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function teach(string $subject): string
    {
        return "Teaching: " . $subject;
    }

    public function getHouse(): string
    {
        return $this->person->getHouse();
    }
}
