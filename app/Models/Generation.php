<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Generation extends Model
{
    /** @return HasMany<Game, $this> */
    public function games(): HasMany
    {
        return $this->hasMany(Game::class);
    }

    /** @return HasMany<Pokemon, $this> */
    public function pokemon(): HasMany
    {
        return $this->hasMany(Pokemon::class);
    }
}
