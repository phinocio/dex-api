<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\v1\DexType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

final class Game extends Model
{
    /** use HasFactory<\Database\Factories\GameFactory> */
    use HasFactory;

    /** @return BelongsToMany<GameDex, $this, GameGameDex> */
    public function gameDexes(): BelongsToMany
    {
        return $this->belongsToMany(GameDex::class)->using(GameGameDex::class)->with('pokemon');
    }

    /** @return BelongsTo<Generation, $this> */
    public function generation(): BelongsTo
    {
        return $this->belongsTo(Generation::class);
    }

    /** @return BelongsToMany<Pokemon, $this> */
    public function pokemon(): BelongsToMany
    {
        return $this->belongsToMany(Pokemon::class, 'game_pokemon');
    }

    /** @return HasOneThrough<GameDex, GameGameDex, $this> */
    public function nationalDex(): HasOneThrough
    {
        return $this->hasOneThrough(GameDex::class, GameGameDex::class, 'game_id', 'id', 'id', 'game_dex_id')->where('game_game_dex.type', DexType::NATIONAL)->with('pokemon');
    }

    /** @return HasOneThrough<GameDex, GameGameDex, $this> */
    public function regionalDex(): HasOneThrough
    {
        return $this->hasOneThrough(GameDex::class, GameGameDex::class, 'game_id', 'id', 'id', 'game_dex_id')->where('game_game_dex.type', DexType::REGIONAL)->with('pokemon');
    }

    /** @return HasOneThrough<GameDex, GameGameDex, $this> */
    public function generationalDex(): HasOneThrough
    {
        return $this->hasOneThrough(GameDex::class, GameGameDex::class, 'game_id', 'id', 'id', 'game_dex_id')->where('game_game_dex.type', DexType::GENERATIONAL)->with('pokemon');
    }
}
