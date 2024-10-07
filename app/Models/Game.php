<?php

namespace App\Models;

use App\Enums\DexType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /** @use HasFactory<\Database\Factories\GameFactory> */
    use HasFactory;

    public function dexes()
    {
        return $this->hasMany(Dex::class)->with('pokemon');
    }

    public function generation()
    {
        return $this->belongsTo(Generation::class);
    }

    public function pokemon()
    {
        return $this->belongsToMany(Pokemon::class);
    }

    public function nationalDex()
    {
        return $this->hasOne(Dex::class)->where('type', DexType::NATIONAL)->with('pokemon');
    }

    public function regionalDex()
    {
        return $this->hasOne(Dex::class)->where('type', DexType::REGIONAL)->with('pokemon');
    }

    public function generationalDex()
    {
        return $this->hasOne(Dex::class)->where('type', DexType::GENERATIONAL)->with('pokemon');
    }
}
