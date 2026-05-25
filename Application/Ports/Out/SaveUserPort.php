<?php

namespace Application\Ports\Out;

use Domain\Models\User;

interface SaveUserPort
{
    public function create(User $user): bool;
}