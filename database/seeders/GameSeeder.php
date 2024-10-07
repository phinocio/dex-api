<?php

namespace Database\Seeders;

use App\Enums\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            'id' => Game::RED,
            'name' => 'Red',
            'generation_id' => 1,
        ]);

        DB::table('games')->insert([
            'id' => Game::BLUE,
            'name' => 'Blue',
            'generation_id' => 1,
        ]);

        DB::table('games')->insert([
            'id' => Game::YELLOW,
            'name' => 'Yellow',
            'generation_id' => 1,
        ]);

        DB::table('games')->insert([
            'id' => Game::GOLD,
            'name' => 'Gold',
            'generation_id' => 2,
        ]);

        DB::table('games')->insert([
            'id' => Game::SILVER,
            'name' => 'Silver',
            'generation_id' => 2,
        ]);

        DB::table('games')->insert([
            'id' => Game::CRYSTAL,
            'name' => 'Crystal',
            'generation_id' => 2,
        ]);
    }
}
