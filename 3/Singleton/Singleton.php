<?php

/**
 * User: junade
 * Date: 24/01/2017
 * Time: 09:24
 */
final class Singleton
{
    private $random;

    /**
     * Singleton constructor.
     *
     * Private so it cannot be constructed externally.
     */
    private function __construct()
    {
        $this->random = rand(0, 1000);
    }

    /**
     * Prevent cloning.
     */
    private function __clone()
    {
    }

    /**
     * Prevent serialize.
     */
    private function __sleep()
    {
    }

    /**
     * Prevent unserialize.
     */
    private function __wakeup()
    {
    }

    /**
     * Call this method to get singleton
     */
    public static function instance(): Singleton
    {
        static $instance = false;
        if ($instance === false) {
            // Late static binding (PHP 5.3+)
            $instance = new static();
        }

        return $instance;
    }

    public function returnSomething(): string
    {
        return "Something " . $this->random;
    }
}