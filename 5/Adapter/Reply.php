<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/03/2017
 * Time: 00:15
 */
interface Reply
{
    public function __construct(string $threadID, string $body, int $timestamp);

    public function addLike();

    public function getBody(): string;

    public function getTimestamp(): int;

    public function getLikes(): int;
}