<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\v1\GameDex;
use App\Enums\v1\Gen1Pokemon;
use App\Enums\v1\Gen2Pokemon;
use App\Enums\v1\Gen3Pokemon;
use App\Enums\v1\Gen4Pokemon;
use App\Enums\v1\Gen5Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class Gen5DexesSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        $nationalDex = collect([
            ...Gen1Pokemon::cases(),
            ...Gen2Pokemon::cases(),
            ...Gen3Pokemon::cases(),
            ...Gen4Pokemon::cases(),
            ...Gen5Pokemon::cases(),
        ])
            ->map(fn ($pokemon) => [
                'game_dex_id' => GameDex::GEN_5_NATIONAL,
                'pokemon_id' => $pokemon->value,
            ])->toArray();

        $generationalDex = collect(Gen5Pokemon::cases())->map(fn (Gen5Pokemon $pokemon) => [
            'game_dex_id' => GameDex::GEN_5_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();

        DB::table('game_dex_pokemon')->insert($nationalDex);
        DB::table('game_dex_pokemon')->insert($generationalDex);
    }
}
