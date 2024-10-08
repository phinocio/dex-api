<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamePokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game_pokemon')->insert([
            'game_id' => Game::RED,
            'pokemon_id' => 1,
        ]);

        DB::table('game_pokemon')->insert([
            'game_id' => Game::RED,
            'pokemon_id' => 2,
        ]);

        DB::table('game_pokemon')->insert([
            'game_id' => Game::RED,
            'pokemon_id' => 3,
        ]);

        DB::table('game_pokemon')->insert([
            'game_id' => Game::RED,
            'pokemon_id' => 4,
        ]);

        DB::table('game_pokemon')->insert([
            'game_id' => Game::RED,
            'pokemon_id' => 5,
        ]);

        DB::table('game_pokemon')->insert([
            'game_id' => Game::RED,
            'pokemon_id' => 6,
        ]);
    }
}
