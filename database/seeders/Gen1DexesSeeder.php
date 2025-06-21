<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\v1\GameDex;
use App\Enums\v1\Gen1Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class Gen1DexesSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        $nationalDex = collect([
            ...Gen1Pokemon::cases(),
        ])
            ->map(fn (Gen1Pokemon $pokemon) => [
                'game_dex_id' => GameDex::GEN_1_NATIONAL->value,
                'pokemon_id' => $pokemon->value,
            ])->toArray();

        $generationalDex = collect([
            ...Gen1Pokemon::cases(),
        ])
            ->map(fn (Gen1Pokemon $pokemon) => [
                'game_dex_id' => GameDex::GEN_1_GENERATIONAL->value,
                'pokemon_id' => $pokemon->value,
            ])->toArray();

        DB::table('game_dex_pokemon')->insert($nationalDex);
        DB::table('game_dex_pokemon')->insert($generationalDex);
    }
}
