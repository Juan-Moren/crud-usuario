<?php

namespace Application\Ports\Out;

use Domain\Models\User;

interface UpdateUserPort
{
    public function update(User $user): bool;
}