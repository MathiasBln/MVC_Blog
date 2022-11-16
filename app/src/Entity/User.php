<?php

namespace Root\Html\Entity;

class User
{
    private int $id;
    private string $username;
    private string $password;
    private int $token;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }


        /**
     * @return int
     */
    public function getUsername(): int
    {
        return $this->id;
    }

    /**
     * @param int $username
     * @return User
     */
    public function setUsername(int $username): User
    {
        $this->username = $username;
        return $this;
    }

        /**
     * @return string
     */
    public function getPassword(): int
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(int $password): User
    {
        $this->password = $password;
        return $this;
    }


    /**
     * @return int
     */
    public function getToken(): int
    {
        return $this->token;
    }

    /**
     * @param int $token
     * @return User
     */
    public function setToken(int $token): User
    {
        $this->token = $token;
        return $this;
    }
}
