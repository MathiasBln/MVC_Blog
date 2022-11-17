<?php

namespace Root\Html\Manager;

use  Root\Html\Interfaces\Database;

abstract class BaseManager
{
    protected \PDO $pdo;

    public function __construct(Database $database)
    {
        $this->pdo = $database->getMySqlPDO();
    }
}
