<?php

declare(strict_types=1);

namespace App\Domain\User;

interface UserRepository
{

    /**
     * @return User[]
     */
    public function findUser(string $id): array;
}
