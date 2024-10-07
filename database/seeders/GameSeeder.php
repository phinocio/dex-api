<?php

namespace Database\Seeders;

use App\Enums\Game;
use App\Enums\Generation;
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
            'slug' => 'red',
            'generation_id' => Generation::I,
        ]);

        DB::table('games')->insert([
            'id' => Game::BLUE,
            'name' => 'Blue',
            'slug' => 'blue',
            'generation_id' => Generation::I,
        ]);

        DB::table('games')->insert([
            'id' => Game::YELLOW,
            'name' => 'Yellow',
            'slug' => 'yellow',
            'generation_id' => Generation::I,
        ]);

        DB::table('games')->insert([
            'id' => Game::GOLD,
            'name' => 'Gold',
            'slug' => 'gold',
            'generation_id' => Generation::II,
        ]);

        DB::table('games')->insert([
            'id' => Game::SILVER,
            'name' => 'Silver',
            'slug' => 'silver',
            'generation_id' => Generation::II,
        ]);

        DB::table('games')->insert([
            'id' => Game::CRYSTAL,
            'name' => 'Crystal',
            'slug' => 'crystal',
            'generation_id' => Generation::II,
        ]);
    }
}
