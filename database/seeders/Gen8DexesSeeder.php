<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\GameDex;
use App\Enums\Gen8Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Gen8DexesSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {

        $generationalDex = collect(Gen8Pokemon::cases())->map(fn(Gen8Pokemon $pokemon) => [
            'game_dex_id' => GameDex::GEN_8_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();


        DB::table('game_dex_pokemon')->insert($generationalDex);
    }
}
