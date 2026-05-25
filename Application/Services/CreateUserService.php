<?php

namespace Application\Services;

use Domain\Models\User;
use Application\Ports\Out\SaveUserPort;

class CreateUserService
{
    private SaveUserPort $repository;

    public function __construct(
        SaveUserPort $repository
    ) {
        $this->repository = $repository;
    }

    public function execute(
        string $name,
        string $email,
        string $password,
        string $role
    ): bool {

        $user = new User(
            null,
            $name,
            $email,
            password_hash(
                $password,
                PASSWORD_DEFAULT
            ),
            $role,
            'ACTIVE'
        );

        return $this->repository
            ->create($user);
    }
}