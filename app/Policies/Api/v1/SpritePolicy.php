<?php

declare(strict_types=1);

namespace App\Policies\Api\v1;

use App\Models\Sprite;
use App\Models\User;

class SpritePolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Sprite $sprite): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Sprite $sprite): bool
    {
        return false;
    }

    public function delete(User $user, Sprite $sprite): bool
    {
        return false;
    }

    public function restore(User $user, Sprite $sprite): bool
    {
        return false;
    }

    public function forceDelete(User $user, Sprite $sprite): bool
    {
        return false;
    }
}
