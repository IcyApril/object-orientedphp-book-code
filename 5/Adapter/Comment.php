<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/03/2017
 * Time: 00:14
 */
class Comment
{
    private $thread;
    private $body;
    private $time;
    private $likes;

    public function __construct(string $body, int $time, string $thread)
    {
        $this->thread = $thread;
        $this->body = $body;
        $this->time = $time;
        $this->likes = 0;
    }

    public function addLike()
    {
        $this->likes++;
    }

    public function showBody(): string
    {
        return $this->body;
    }

    public function showTime(): int
    {
        return $this->time;
    }

    public function countLikes(): int
    {
        return $this->likes;
    }
}