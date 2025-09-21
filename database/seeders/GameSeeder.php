<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\v1\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class GameSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('games')->insert(
            collect(Game::cases())->map(function (Game $game) {
                return [
                    'id' => $game->value,
                    'name' => $game->name(),
                    'slug' => $game->slug(),
                    'generation_id' => $game->generation(),
                ];
            })->toArray(),
        );
    }
}
