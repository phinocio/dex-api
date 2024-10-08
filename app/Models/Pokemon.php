<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pokemon extends Model
{
    protected $table = 'pokemon';

    /**
     * @return BelongsToMany<Game>
     */
    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class);
    }

    /**
     * @return BelongsTo<Generation, Pokemon>
     */
    public function generation(): BelongsTo
    {
        return $this->belongsTo(Generation::class);
    }

    /**
     * @return HasMany<Sprite>
     */
    public function sprites(): HasMany
    {
        return $this->hasMany(Sprite::class);
    }
}
