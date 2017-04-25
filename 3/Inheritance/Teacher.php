<?php

/**
 * User: junade
 * Date: 03/02/2017
 * Time: 16:32
 */
class Teacher extends Person
{
    public function teach(string $subject): string
    {
        return "Teaching: " . $subject;
    }
}