<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameGameDexSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        $mappings = config('constants.game_dex_mappings');

        foreach ($mappings as $game => $gameDexes) {
            foreach ($gameDexes as $gameDex) {
                DB::table('game_game_dex')->insert([
                    'game_id' => $game,
                    'game_dex_id' => $gameDex->value,
                    'type' => $gameDex->type(),
                ]);
            }
        }
    }
}
