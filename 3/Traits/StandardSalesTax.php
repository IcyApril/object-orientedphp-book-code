<?php

/**
 * User: junade
 * Date: 26/01/2017
 * Time: 09:32
 */
trait StandardSalesTax
{
    public function getSalesTax(): float
    {
        return ($this->salesPrice * 0.2)+0.05;
    }
}