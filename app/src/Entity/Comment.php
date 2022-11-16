<?php

namespace Root\Html\Entity;

class Comment
{
    private int $id;
    private string $content;
    private int $userId;
    private int $postId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Comment
     */
    public function setId(int $id): Comment
    {
        $this->id = $id;
        return $this;
    }


        /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Comment
     */
    public function setContent(string $content): Comment
    {
        $this->content = $content;
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
     * @param int $iuserIdd
     * @return Comment
     */
    public function setUserId(int $userId): Comment
    {
        $this->userId = $userId;
        return $this;
    }


    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     * @return Comment
     */
    public function setPostId(int $postId): Comment
    {
        $this->postId = $postId;
        return $this;
    }

}
