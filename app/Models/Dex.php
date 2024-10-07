<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dex extends Model
{
    /** @use HasFactory<\Database\Factories\DexFactory> */
    use HasFactory;

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function pokemon()
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
