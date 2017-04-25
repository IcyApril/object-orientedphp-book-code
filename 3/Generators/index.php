<?php
/**
 * User: junade
 * Date: 10/02/2017
 * Time: 05:12
 */

function squareNumbers()
{
    for ($i = 1; $i <= 10; $i++) {
        yield pow($i, 2);
    }
}

$numbers = squareNumbers();

foreach ($numbers as $number) {
    echo $number . "\n";
}