<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\GameDex;
use App\Enums\Gen1Pokemon;
use App\Enums\Gen2Pokemon;
use App\Enums\Gen3Pokemon;
use App\Enums\Gen4Pokemon;
use App\Enums\Gen8Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Gen8DexesSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {

        $nationalDexBDSP = collect([
            ...Gen1Pokemon::cases(),
            ...Gen2Pokemon::cases(),
            ...Gen3Pokemon::cases(),
            ...Gen4Pokemon::cases(),
        ])
            ->map(fn($pokemon) => [
                'game_dex_id' => GameDex::BDSP_NATIONAL,
                'pokemon_id' => $pokemon->value,
            ])->toArray();

        $generationalDexSWSH = collect(Gen8Pokemon::cases())->map(fn($pokemon) => [
            'game_dex_id' => GameDex::SWSH_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();

        $generationalDexBDSP = collect(Gen4Pokemon::cases())->map(fn($pokemon) => [
            'game_dex_id' => GameDex::BDSP_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();

        $generationalDexLA = collect(Gen4Pokemon::cases())->map(fn($pokemon) => [
            'game_dex_id' => GameDex::LA_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();


        DB::table('game_dex_pokemon')->insert($nationalDexBDSP);
        DB::table('game_dex_pokemon')->insert($generationalDexSWSH);
        DB::table('game_dex_pokemon')->insert($generationalDexBDSP);
        DB::table('game_dex_pokemon')->insert($generationalDexLA);
    }
}
