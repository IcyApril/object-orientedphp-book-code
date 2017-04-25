<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 23/04/2017
 * Time: 18:54
 */

namespace IcyApril\Six;


class File implements Storage
{
    private $path;

    public function __construct(string $path)
    {
        if (file_exists($path) === false) {
            throw new FileException('File does not exist.');
        }

        $this->path = $path;
    }

    public function storeContents(string $value): bool
    {
        return file_put_contents($this->path, $value);
    }

    public function getContents(): string
    {
        $contents = file_get_contents($this->path);

        if ($contents === false) {
            throw new FileException('Could not get contents (file may no longer exist).');
        }

        return $contents;
    }

}