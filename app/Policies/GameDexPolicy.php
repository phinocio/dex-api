<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\GameDex;
use App\Models\User;

class GameDexPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, GameDex $gameDex): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, GameDex $gameDex): bool
    {
        return false;
    }

    public function delete(User $user, GameDex $gameDex): bool
    {
        return false;
    }

    public function restore(User $user, GameDex $gameDex): bool
    {
        return false;
    }

    public function forceDelete(User $user, GameDex $gameDex): bool
    {
        return false;
    }
}
