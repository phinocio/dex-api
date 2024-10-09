<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\DexType;
use App\Enums\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameDexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game_dexes')->insert([
            'name' => 'Red National',
            'slug' => 'red-national',
            'game_id' => Game::RED,
            'type' => DexType::NATIONAL,
        ]);

        DB::table('game_dexes')->insert([
            'name' => 'Red Generational',
            'slug' => 'red-generational',
            'game_id' => Game::RED,
            'type' => DexType::GENERATIONAL,
        ]);

        DB::table('game_dexes')->insert([
            'name' => 'Red Regional',
            'slug' => 'red-regional',
            'game_id' => Game::RED,
            'type' => DexType::REGIONAL,
        ]);

        DB::table('game_dexes')->insert([
            'name' => 'Blue National',
            'slug' => 'blue-national',
            'game_id' => Game::BLUE,
            'type' => DexType::NATIONAL,
        ]);

        DB::table('game_dexes')->insert([
            'name' => 'Blue Generational',
            'slug' => 'blue-generational',
            'game_id' => Game::BLUE,
            'type' => DexType::GENERATIONAL,
        ]);

        DB::table('game_dexes')->insert([
            'name' => 'Blue Regional',
            'slug' => 'blue-regional',
            'game_id' => Game::BLUE,
            'type' => DexType::REGIONAL,
        ]);
    }
}
