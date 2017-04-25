<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/03/2017
 * Time: 00:39
 */
class CommentAdapter implements Reply
{
    private $comment;

    public function __construct(string $threadID, string $body, int $timestamp)
    {
        $this->comment = new Comment($body, $timestamp, $threadID);
    }

    public function addLike()
    {
        return $this->comment->addLike();
    }

    public function getBody(): string
    {
        return $this->comment->showBody();
    }

    public function getTimestamp(): int
    {
        return $this->comment->showTime();
    }

    public function getLikes(): int
    {
        return $this->comment->countLikes();
    }

}