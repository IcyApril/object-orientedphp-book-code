<?php

/**
 * User: junade
 * Date: 09/02/2017
 * Time: 22:26
 */
interface Reader
{
    public function __construct(JSON $data);

    public function getContent(): Generator;
}