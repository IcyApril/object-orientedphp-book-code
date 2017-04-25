<?php

/**
 * User: junade
 * Date: 03/02/2017
 * Time: 17:01
 */
final class HeadTeacher extends Teacher
{
    public function createRule(string $rule): string
    {
        return date("Y-m-d h:i:sa") . ": " . $rule;
    }
}