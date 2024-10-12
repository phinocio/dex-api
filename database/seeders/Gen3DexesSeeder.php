<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\GameDex;
use App\Enums\Gen1Pokemon;
use App\Enums\Gen2Pokemon;
use App\Enums\Gen3Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Gen3DexesSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        $nationalDex = collect([
            ...Gen1Pokemon::cases(),
            ...Gen2Pokemon::cases(),
            ...Gen3Pokemon::cases(),
        ])
            ->map(fn($pokemon) => [
                'game_dex_id' => GameDex::RSE_NATIONAL,
                'pokemon_id' => $pokemon->value,
            ])->toArray();

        $generationalDex = collect(Gen3Pokemon::cases())->map(fn(Gen3Pokemon $pokemon) => [
            'game_dex_id' => GameDex::RSE_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();

        DB::table('game_dex_pokemon')->insert($nationalDex);
        DB::table('game_dex_pokemon')->insert($generationalDex);
    }
}
