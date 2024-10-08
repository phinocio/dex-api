<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\DexType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Game extends Model
{
    /**
     * @return HasMany<Dex>
     */
    public function dexes(): HasMany
    {
        return $this->hasMany(Dex::class)->with('pokemon');
    }

    /**
     * @return BelongsTo<Generation, Game>
     */
    public function generation(): BelongsTo
    {
        return $this->belongsTo(Generation::class);
    }

    /**
     * @return BelongsToMany<Pokemon>
     */
    public function pokemon(): BelongsToMany
    {
        return $this->belongsToMany(Pokemon::class);
    }

    /**
     * @return HasOne<Dex>
     */
    public function nationalDex(): HasOne
    {
        return $this->hasOne(Dex::class)->where('type', DexType::NATIONAL)->with('pokemon');
    }

    /**
     * @return HasOne<Dex>
     */
    public function regionalDex(): HasOne
    {
        return $this->hasOne(Dex::class)->where('type', DexType::REGIONAL)->with('pokemon');
    }

    /**
     * @return HasOne<Dex>
     */
    public function generationalDex(): HasOne
    {
        return $this->hasOne(Dex::class)->where('type', DexType::GENERATIONAL)->with('pokemon');
    }
}
