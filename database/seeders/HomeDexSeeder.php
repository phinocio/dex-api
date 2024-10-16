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
use App\Enums\Gen7Pokemon;
use App\Enums\Gen8Pokemon;
use App\Enums\Gen9Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeDexSeeder extends Seeder
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
            ...Gen6Pokemon::cases(),
            ...Gen7Pokemon::cases(),
            ...Gen8Pokemon::cases(),
            ...Gen9Pokemon::cases(),
        ])
            ->map(fn($pokemon) => [
                'game_dex_id' => GameDex::HOME_NATIONAL,
                'pokemon_id' => $pokemon->value,
            ])->toArray();

        DB::table('game_dex_pokemon')->insert($nationalDex);
    }
}
