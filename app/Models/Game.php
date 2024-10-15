<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\DexType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    /** @return BelongsToMany<GameDex> */
    public function gameDexes(): BelongsToMany
    {
        return $this->belongsToMany(GameDex::class)->with('pokemon');
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

    /** @return BelongsToMany<GameDex> */
    public function nationalDex(): BelongsToMany
    {
        return $this->belongsToMany(GameDex::class)->withPivotValue('type', DexType::NATIONAL)->with('pokemon');
    }

    /** @return BelongsToMany<GameDex> */
    public function regionalDex(): BelongsToMany
    {
        return $this->belongsToMany(GameDex::class)->withPivotValue('type', DexType::REGIONAL)->with('pokemon');
    }

    /** @return BelongsToMany<GameDex> */
    public function generationalDex(): BelongsToMany
    {
        return $this->belongsToMany(GameDex::class)->withPivotValue('type', DexType::GENERATIONAL)->with('pokemon');
    }

}
