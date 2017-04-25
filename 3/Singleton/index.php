<?php
/**
 * User: junade
 * Date: 24/01/2017
 * Time: 09:32
 */

require_once('Singleton.php');

$first = Singleton::instance();
echo $first->returnSomething() . PHP_EOL;

$second = Singleton::instance();
echo $second->returnSomething() . PHP_EOL;