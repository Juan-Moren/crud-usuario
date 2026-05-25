<?php

namespace Application\Services;

use Domain\Models\User;
use Application\Ports\Out\UpdateUserPort;

class UpdateUserService
{
    private UpdateUserPort $repository;

    public function __construct(
        UpdateUserPort $repository
    ) {
        $this->repository = $repository;
    }

    public function execute(
        int $id,
        string $name,
        string $email,
        string $role,
        string $status
    ): bool {

        $user = new User(
            $id,
            $name,
            $email,
            '',
            $role,
            $status
        );

        return $this->repository
            ->update($user);
    }
}