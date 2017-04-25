<?php

/**
 * User: junade
 * Date: 10/02/2017
 * Time: 03:47
 */
class Text implements Reader
{
    private $data;

    public function __construct(JSON $data)
    {
        $this->data = $data;
    }

    public function getContent(): Generator
    {
        $entries = $this->data->getDataByType('text');

        foreach ($entries as $text) {
            yield $text;
        }
    }
}