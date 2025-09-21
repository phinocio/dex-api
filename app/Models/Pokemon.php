<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Pokemon extends Model
{
    protected $table = 'pokemon';

    /** @return BelongsTo<Pokemon, $this> */
    public function evolvesFrom(): BelongsTo
    {
        return $this->belongsTo(self::class, 'evolves_from');
    }

    /** @return BelongsToMany<Form, $this> */
    public function forms(): BelongsToMany
    {
        return $this->belongsToMany(Form::class);
    }

    /** @return BelongsToMany<Game, $this> */
    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class, 'game_pokemon');
    }

    /** @return BelongsToMany<GameDex, $this> */
    public function gameDexes(): BelongsToMany
    {
        return $this->belongsToMany(GameDex::class, 'game_dex_pokemon');
    }

    /** @return BelongsTo<Generation, $this> */
    public function generation(): BelongsTo
    {
        return $this->belongsTo(Generation::class);
    }

    /** @return HasMany<Sprite, $this> */
    public function sprites(): HasMany
    {
        return $this->hasMany(Sprite::class);
    }
}
