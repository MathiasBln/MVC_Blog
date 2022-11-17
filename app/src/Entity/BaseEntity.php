<?php

namespace Root\Html\Entity;

use Root\Html\Traits\Hydrator;

abstract class BaseEntity
{
    use Hydrator;

    public function __construct(array $data = [])
    {
       $this->hydrate($data);
    }
}
