<?php

declare(strict_types=1);

namespace App\Policies\Api\v1;

use App\Models\Generation;
use App\Models\User;

class GenerationPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Generation $generation): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Generation $generation): bool
    {
        return false;
    }

    public function delete(User $user, Generation $generation): bool
    {
        return false;
    }

    public function restore(User $user, Generation $generation): bool
    {
        return false;
    }

    public function forceDelete(User $user, Generation $generation): bool
    {
        return false;
    }
}
