<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\GameDex;
use App\Enums\Gen9Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Gen9DexesSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {

        $generationalDex = collect(Gen9Pokemon::cases())->map(fn(Gen9Pokemon $pokemon) => [
            'game_dex_id' => GameDex::GEN_9_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();

        DB::table('game_dex_pokemon')->insert($generationalDex);
    }
}
