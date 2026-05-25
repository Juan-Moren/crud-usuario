<?php

namespace Application\Ports\Out;

interface FindUserPort
{
    public function getAll(): array;

    public function findById(int $id): ?array;
}