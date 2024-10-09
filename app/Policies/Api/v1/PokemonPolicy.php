<?php

declare(strict_types=1);

namespace App\Policies\Api\v1;

use App\Models\Pokemon;
use App\Models\User;

class PokemonPolicy
{
    public function viewAny(?User $user): bool
    {
        return true;
    }

    public function view(?User $user, Pokemon $pokemon): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Pokemon $pokemon): bool
    {
        return false;
    }

    public function delete(User $user, Pokemon $pokemon): bool
    {
        return false;
    }

    public function restore(User $user, Pokemon $pokemon): bool
    {
        return false;
    }

    public function forceDelete(User $user, Pokemon $pokemon): bool
    {
        return false;
    }
}
