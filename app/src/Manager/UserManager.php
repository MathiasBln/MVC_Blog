<?php

namespace Root\Html\Manager;

use Root\Html\Entity\User;

class UserManager extends BaseManager
{
    /**
     * @return User[]
     */
    public function getAllUsers(): array
    {
        $query = $this->pdo->query("select * from user");

        $users = [];

        while ($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $users[] = new User($data);
        }

        return $users;
    }

    public function getUser($userId): array
    {
        $query = $this->pdo->query("select * from user where user.id = $userId");

        $user = [];

        while ($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $user[] = new User($data);
        }

        return $user;
    }
}
