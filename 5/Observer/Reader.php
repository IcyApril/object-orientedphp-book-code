<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/03/2017
 * Time: 18:37
 */
class Reader implements SplObserver
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(\SplSubject $subject)
    {
        echo $this->name . ' is reading post ' . $subject->getContent() . " \n";
    }
}