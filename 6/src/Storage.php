<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 23/04/2017
 * Time: 18:34
 */

namespace IcyApril\Six;

interface Storage
{
    public function __construct(string $path);

    public function storeContents(string $value): bool;

    public function getContents(): string;
}