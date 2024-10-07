<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    /** @use HasFactory<\Database\Factories\PokemonFactory> */
    use HasFactory;

    protected $table = 'pokemon'; // Pokemon is already plural

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

    public function generation()
    {
        return $this->belongsTo(Generation::class);
    }
}
