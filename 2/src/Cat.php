<?php
/**
 * User: junade
 * Date: 21/01/2017
 * Time: 18:58
 */

namespace IcyApril\ChapterTwo;


class Cat extends Mammal
{
    final public function talk(): string
    {
        return "Meow.";
    }
}