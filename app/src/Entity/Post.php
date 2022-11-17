<?php

namespace Root\Html\Entity;

class Post extends BaseEntity
{
    private int $id;
    private string $post;
    private string $date;
    private int $userId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Post
     */
    public function setId(int $id): Post
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return string
     */
    public function getPost(): string
    {
        return $this->post;
    }

    /**
     * @param string $post
     * @return Post
     */
    public function setPost(string $post): Post
    {
        $this->post = $post;
        return $this;
    }


    /**
     * @return string
     */
    public function getdate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return Post
     */
    public function setDate(string $date): Post
    {
        $this->date = $date;
        return $this;
    }


    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $date
     * @return Post
     */
    public function setUserId(int $userId): Post
    {
        $this->userId = $userId;
        return $this;
    }

}
