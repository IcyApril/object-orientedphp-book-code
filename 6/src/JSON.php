<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 23/04/2017
 * Time: 20:44
 */

namespace IcyApril\Six;


class JSON
{
    private $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function store(\stdClass $object)
    {
        $json = json_encode($object);

        if ($json === false) {
            throw new JSONException('Could not encode JSON.');
        }

        return $this->storage->storeContents($json);
    }

    public function retrieve(): \stdClass
    {
        $contents = $this->storage->getContents();

        if (empty($contents)) {
            return new \stdClass();
        }

        $data = json_decode($contents);

        if (json_last_error() > 0) {
            throw new JSONException('Could not decode JSON.');
        }

        return $data;
    }
}