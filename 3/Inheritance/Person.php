<?php

/**
 * User: junade
 * Date: 23/01/2017
 * Time: 22:41
 */
abstract class Person
{
    protected $name;
    protected $house;

    /**
     * Person constructor.
     *
     * @param String $name
     * @param String $house
     *
     * @throws Exception
     */
    public function __construct(String $name, String $house)
    {
        if ($this->validateName($name)) {
            throw New Exception('Name must contain at least 2 segments.');
        }

        if ($this->validateHouse($house)) {
            throw New Exception('Invalid house.');
        }

        $this->name  = $name;
        $this->house = $house;
    }

    /**
     * Check name contains at least 2 parts.
     *
     * @param String $name
     *
     * @return bool
     */
    private function validateName(String $name): bool
    {
        $nameSegments = explode(" ", $name);

        if (count($nameSegments) < 2) {
            return false;
        }
    }

    /**
     * Check if a house is valid.
     *
     * @param String $house
     *
     * @return bool
     */
    private function validateHouse(String $house): bool
    {
        $validHouses = ['Griffindor', 'Slytherin', 'Hufflepuff', 'Ravenclaw'];

        if (in_array($house, $validHouses)) {
            return true;
        }

        return false;
    }

    /**
     * Gets a persons house.
     *
     * @return String
     */
    public function getHouse(): String
    {
        return $this->house;
    }
}