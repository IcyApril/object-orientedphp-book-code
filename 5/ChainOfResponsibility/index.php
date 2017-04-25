<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/03/2017
 * Time: 12:37
 */

require_once('Purchaser.php');
require_once('Executive.php');
require_once('Manager.php');
require_once('HeadOfDepartment.php');
require_once('CEO.php');

$developer = new Executive();
$engineeringManager = new Manager();
$headOfEngineering = new HeadOfDepartment();
$ceo = new CEO();

$developer->setNextPurchaser($engineeringManager);
$engineeringManager->setNextPurchaser($headOfEngineering);
$headOfEngineering->setNextPurchaser($ceo);

$developer->buy(500);
echo "\n";
$developer->buy(5000);
echo "\n";
$developer->buy(50000);
echo "\n";
$developer->buy(500000);
echo "\n";
