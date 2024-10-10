<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\GameDex;
use App\Enums\Gen1Pokemon;
use App\Enums\Gen2Pokemon;
use App\Enums\Gen3Pokemon;
use App\Enums\Gen4Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Gen4DexesSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        $nationalDexDPPTHGSS = collect([
            ...Gen1Pokemon::cases(),
            ...Gen2Pokemon::cases(),
            ...Gen3Pokemon::cases(),
            ...Gen4Pokemon::cases(),
        ])
            ->map(fn($pokemon) => [
                'game_dex_id' => GameDex::DPPT_HGSS_NATIONAL,
                'pokemon_id' => $pokemon->value,
            ])->toArray();


        $generationalDexDPPT = collect(Gen4Pokemon::cases())->map(fn($pokemon) => [
            'game_dex_id' => GameDex::DPPT_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();

        $generationalDexHGSS = collect(Gen2Pokemon::cases())->map(fn($pokemon) => [
            'game_dex_id' => GameDex::DPPT_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();

        DB::table('game_dex_pokemon')->insert($nationalDexDPPTHGSS);
        DB::table('game_dex_pokemon')->insert($generationalDexDPPT);
        DB::table('game_dex_pokemon')->insert($generationalDexHGSS);
    }
}
