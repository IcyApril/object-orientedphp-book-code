<?php

/**
 * User: junade
 * Date: 04/02/2017
 * Time: 01:21
 */
class HeadTeacher
{
    private $teacher;

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    public function createRule(string $rule): string
    {
        return date("Y-m-d h:i:sa") . ": " . $rule;
    }

    public function getHouse(): string
    {
        $this->person->getHouse();
    }
}