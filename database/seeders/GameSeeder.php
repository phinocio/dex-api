<?php

namespace Database\Seeders;

use App\Enums\Game;
use App\Enums\Generation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('games')->insert(
            collect(Game::cases())->map(function (Game $game) {
                return [
                    'id' => $game->value,
                    'name' => $game->name(),
                    'slug' => $game->slug(),
                    'generation_id' => match ($game) {
                        Game::RED, Game::BLUE, Game::YELLOW => Generation::I,
                        Game::GOLD, Game::SILVER, Game::CRYSTAL => Generation::II,
                        Game::RUBY, Game::SAPPHIRE, Game::EMERALD, Game::FIRE_RED, Game::LEAF_GREEN => Generation::III,
                        Game::DIAMOND, Game::PEARL, Game::PLATINUM, Game::HEART_GOLD, Game::SOUL_SILVER => Generation::IV,
                        Game::BLACK, Game::WHITE, Game::BLACK_2, Game::WHITE_2 => Generation::V,
                        Game::X, Game::Y, Game::OMEGA_RUBY, Game::ALPHA_SAPPHIRE => Generation::VI,
                        Game::SUN, Game::MOON, Game::ULTRA_SUN, Game::ULTRA_MOON, Game::LETS_GO_PIKACHU, Game::LETS_GO_EEVEE => Generation::VII,
                    },
                ];
            })->toArray()
        );
    }
}
