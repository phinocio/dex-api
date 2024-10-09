<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\GameDex;
use App\Enums\Gen1Pokemon;
use App\Enums\Gen2Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Gen2DexesSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        $nationalDex = collect([
            ...Gen1Pokemon::cases(),
            ...Gen2Pokemon::cases()])
            ->map(fn($pokemon) => [
                'game_dex_id' => GameDex::GSC_NATIONAL,
                'pokemon_id' => $pokemon->value,
            ])->toArray();

        $generationalDex = collect(Gen2Pokemon::cases())->map(fn($pokemon) => [
            'game_dex_id' => GameDex::GSC_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();

        DB::table('game_dex_pokemon')->insert($nationalDex);
        DB::table('game_dex_pokemon')->insert($generationalDex);
    }
}
