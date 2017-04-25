<?php

/**
 * User: junade
 * Date: 04/02/2017
 * Time: 01:00
 */
class Person
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
        if ($this->validateName($name) === false) {
            throw New Exception('Name must contain at least 2 segments.');
        }

        if ($this->validateHouse($house) === false) {
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

        return true;
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
    public function getHouse(): string
    {
        return $this->house;
    }
}