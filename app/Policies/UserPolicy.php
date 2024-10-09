<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return false;
    }

    public function view(User $user, User $model): bool
    {
        return $user->id === $model->id;
    }

    public function create(User $user): bool
    {
        return false; // Users aren't supported yet.
    }

    public function update(User $user, User $model): bool
    {
        return false; // Users aren't supported yet.
    }

    public function delete(User $user, User $model): bool
    {
        return false; // Users aren't supported yet.
    }

    public function restore(User $user, User $model): bool
    {
        return false; // Users aren't supported yet.
    }

    public function forceDelete(User $user, User $model): bool
    {
        return false; // Users aren't supported yet.
    }
}
