<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\GameDex;
use App\Enums\Gen1Pokemon;
use App\Enums\Gen2Pokemon;
use App\Enums\Gen3Pokemon;
use App\Enums\Gen4Pokemon;
use App\Enums\Gen5Pokemon;
use App\Enums\Gen6Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Gen6DexesSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        $nationalDexXYORAS = collect([
            ...Gen1Pokemon::cases(),
            ...Gen2Pokemon::cases(),
            ...Gen3Pokemon::cases(),
            ...Gen4Pokemon::cases(),
            ...Gen5Pokemon::cases(),
            ...Gen6Pokemon::cases(),
        ])
            ->map(fn($pokemon) => [
                'game_dex_id' => GameDex::XY_ORAS_NATIONAL,
                'pokemon_id' => $pokemon->value,
            ])->toArray();


        $generationalDexXY = collect(Gen6Pokemon::cases())->map(fn($pokemon) => [
            'game_dex_id' => GameDex::DPPT_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();

        $generationalDexORAS = collect(Gen3Pokemon::cases())->map(fn($pokemon) => [
            'game_dex_id' => GameDex::DPPT_GENERATIONAL,
            'pokemon_id' => $pokemon->value,
        ])->toArray();

        DB::table('game_dex_pokemon')->insert($nationalDexXYORAS);
        DB::table('game_dex_pokemon')->insert($generationalDexXY);
        DB::table('game_dex_pokemon')->insert($generationalDexORAS);
    }
}
