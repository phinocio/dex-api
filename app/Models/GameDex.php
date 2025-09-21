<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class GameDex extends Model
{
    /** @return BelongsToMany<Game, $this> */
    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class, 'game_game_dex');
    }

    /** @return BelongsToMany<Pokemon, $this> */
    public function pokemon(): BelongsToMany
    {
        return $this->belongsToMany(Pokemon::class, 'game_dex_pokemon');
    }
}
