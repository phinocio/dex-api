<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GameDex extends Model
{
    /** @return BelongsToMany<Game> */
    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class);
    }

    /** @return BelongsToMany<Pokemon> */
    public function pokemon(): BelongsToMany
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
