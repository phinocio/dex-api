<?php

declare(strict_types=1);

namespace App\Policies\v1;

use App\Models\Game;
use App\Models\User;

final class GamePolicy
{
    public function viewAny(?User $user): bool
    {
        return true;
    }

    public function view(?User $user, ?Game $game): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Game $game): bool
    {
        return false;
    }

    public function delete(User $user, Game $game): bool
    {
        return false;
    }

    public function restore(User $user, Game $game): bool
    {
        return false;
    }

    public function forceDelete(User $user, Game $game): bool
    {
        return false;
    }
}
