<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\DexType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Game extends Model
{
    /** @return BelongsToMany<GameDex> */
    public function gameDexes(): BelongsToMany
    {
        return $this->belongsToMany(GameDex::class)->using(GameGameDex::class)->with('pokemon');
    }

    /** @return BelongsTo<Generation, Game> */
    public function generation(): BelongsTo
    {
        return $this->belongsTo(Generation::class);
    }

    /** @return BelongsToMany<Pokemon> */
    public function pokemon(): BelongsToMany
    {
        return $this->belongsToMany(Pokemon::class);
    }

    /** @return HasOneThrough<GameDex> */
    public function nationalDex(): HasOneThrough
    {
        return $this->hasOneThrough(GameDex::class, GameGameDex::class, 'game_id', 'id', 'id', 'game_dex_id')->where('game_game_dex.type', DexType::NATIONAL)->with('pokemon');
    }

    /** @return HasOneThrough<GameDex> */
    public function regionalDex(): HasOneThrough
    {
        return $this->hasOneThrough(GameDex::class, GameGameDex::class, 'game_id', 'id', 'id', 'game_dex_id')->where('game_game_dex.type', DexType::REGIONAL)->with('pokemon');
    }

    /** @return HasOneThrough<GameDex> */
    public function generationalDex(): HasOneThrough
    {
        return $this->hasOneThrough(GameDex::class, GameGameDex::class, 'game_id', 'id', 'id', 'game_dex_id')->where('game_game_dex.type', DexType::GENERATIONAL)->with('pokemon');
    }

}
