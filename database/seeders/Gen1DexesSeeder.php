<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\DexType;
use App\Enums\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameDexSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        // Define an array of games with their corresponding names and slugs
        $games = [
            Game::RED => 'Red',
            Game::BLUE => 'Blue',
            Game::YELLOW => 'Yellow',
            Game::GOLD => 'Gold',
            Game::SILVER => 'Silver',
            Game::CRYSTAL => 'Crystal',
            Game::RUBY => 'Ruby',
            Game::SAPPHIRE => 'Sapphire',
            Game::EMERALD => 'Emerald',
            Game::DIAMOND => 'Diamond',
            Game::PEARL => 'Pearl',
            Game::PLATINUM => 'Platinum',
            Game::BLACK => 'Black',
            Game::WHITE => 'White',
            Game::BLACK_2 => 'Black 2',
            Game::WHITE_2 => 'White 2',
            Game::X => 'X',
            Game::Y => 'Y',
            Game::SUN => 'Sun',
            Game::MOON => 'Moon',
            Game::ULTRA_SUN => 'Ultra Sun',
            Game::ULTRA_MOON => 'Ultra Moon',
            Game::LET_S_GO_PIKACHU => "Let's Go, Pikachu!",
            Game::LET_S_GO_EEVEE => "Let's Go, Eevee!",
            Game::SWORD => 'Sword',
            Game::SHIELD => 'Shield',
            Game::BRILLIANT_DIAMOND => 'Brilliant Diamond',
            Game::SHINING_PEARL => 'Shining Pearl',
            Game::LEGENDS_ARYCEUS => 'Legends: Arceus',
            Game::SCARLET => 'Scarlet',
            Game::VIOLET => 'Violet',
            // Add more games as needed
        ];

        // Loop through each game and insert the dex entries
        foreach ($games as $gameId => $gameName) {
            DB::table('game_dexes')->insert([
                'name' => "{$gameName} National",
                'slug' => strtolower(str_replace(' ', '-', "{$gameName} National")),
                'game_id' => $gameId,
                'type' => DexType::NATIONAL,
            ]);

            DB::table('game_dexes')->insert([
                'name' => "{$gameName} Generational",
                'slug' => strtolower(str_replace(' ', '-', "{$gameName} Generational")),
                'game_id' => $gameId,
                'type' => DexType::GENERATIONAL,
            ]);

            DB::table('game_dexes')->insert([
                'name' => "{$gameName} Regional",
                'slug' => strtolower(str_replace(' ', '-', "{$gameName} Regional")),
                'game_id' => $gameId,
                'type' => DexType::REGIONAL,
            ]);
        }
    }
}
