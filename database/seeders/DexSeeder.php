<?php

namespace Database\Seeders;

use App\Enums\DexType;
use App\Enums\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dexes')->insert([
            'game_id' => Game::RED,
            'type' => DexType::NATIONAL,
        ]);

        DB::table('dexes')->insert([
            'game_id' => Game::RED,
            'type' => DexType::GENERATIONAL,
        ]);

        DB::table('dexes')->insert([
            'game_id' => Game::RED,
            'type' => DexType::REGIONAL,
        ]);

        DB::table('dexes')->insert([
            'game_id' => Game::BLUE,
            'type' => DexType::NATIONAL,
        ]);

        DB::table('dexes')->insert([
            'game_id' => Game::BLUE,
            'type' => DexType::GENERATIONAL,
        ]);

        DB::table('dexes')->insert([
            'game_id' => Game::BLUE,
            'type' => DexType::REGIONAL,
        ]);
    }
}
