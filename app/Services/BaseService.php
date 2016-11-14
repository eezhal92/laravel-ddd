<?php

namespace App\Services;

use EntityManager;

abstract class BaseService
{
    /**
     * Get repository of entity.
     *
     * @param  string $className
     * @return EntityRepository
     */
    public function repo($className)
    {
        return EntityManager::getRepository($className);
    }
}