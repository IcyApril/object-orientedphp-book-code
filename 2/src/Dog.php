<?php
/**
 * User: junade
 * Date: 03/01/2017
 * Time: 14:06
 */

namespace IcyApril\ChapterTwo;


class Dog extends Mammal
{
    private $talkCount = 0;
    
    public function talk(): string
    {
        $this->talkCount++;

        return "Woof!";
    }

    public function getTalkCount(): int
    {
        return $this->talkCount;
    }
}