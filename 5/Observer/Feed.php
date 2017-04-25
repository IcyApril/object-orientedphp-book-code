<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/03/2017
 * Time: 18:39
 */
class Feed implements SplSubject
{
    private $name;
    private $observers = array();
    private $content;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attach(SplObserver $observer)
    {
        $observerHash = spl_object_hash($observer);
        $this->observers[$observerHash] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        $observerHash = spl_object_hash($observer);
        unset($this->observers[$observerHash]);
    }

    public function breakOutNews($content)
    {
        $this->content = $content;
        $this->notify();
    }

    public function getContent()
    {
        return $this->content . " on " . $this->name . ".";
    }

    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}