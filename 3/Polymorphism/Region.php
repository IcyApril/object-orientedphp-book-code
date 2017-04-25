<?php

/**
 * User: junade
 * Date: 10/02/2017
 * Time: 04:17
 */
interface Region
{
    public function __construct(string $name);

    public function getInfo(): string;
}