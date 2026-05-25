<?php

namespace Application\Services;

use Application\Ports\Out\DeleteUserPort;

class DeleteUserService
{
    private DeleteUserPort $repository;

    public function __construct(
        DeleteUserPort $repository
    ) {
        $this->repository = $repository;
    }

    public function execute(
        int $id
    ): bool {

        return $this->repository
            ->delete($id);
    }
}