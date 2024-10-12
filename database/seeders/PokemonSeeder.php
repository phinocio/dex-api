<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\Gen1Pokemon;
use App\Enums\Gen2Pokemon;
use App\Enums\Gen3Pokemon;
use App\Enums\Gen4Pokemon;
use App\Enums\Gen5Pokemon;
use App\Enums\Gen6Pokemon;
use App\Enums\Gen7Pokemon;
use App\Enums\Gen8Pokemon;
use App\Enums\Gen9Pokemon;
use App\Enums\PokemonEvolutions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        $pokemon = collect([
            ...Gen1Pokemon::cases(),
            ...Gen2Pokemon::cases(),
            ...Gen3Pokemon::cases(),
            ...Gen4Pokemon::cases(),
            ...Gen5Pokemon::cases(),
            ...Gen6Pokemon::cases(),
            ...Gen7Pokemon::cases(),
            ...Gen8Pokemon::cases(),
            ...Gen9Pokemon::cases(),
        ]);
        DB::table('pokemon')->insert(
            $pokemon
           ->map(function (mixed $pokemon) {
               return [
                   'name' => $pokemon->name(),
                   'slug' => $pokemon->slug(),
                   'generation_id' => $pokemon->generation(),
                   'national_dex_number' => $pokemon->value,
               ];
           })->toArray(),
        );

        DB::table('pokemon')->upsert(
            $pokemon->map(function (mixed $pokemon) {
                return [
                    'name' => $pokemon->name(),
                    'slug' => $pokemon->slug(),
                    'generation_id' => $pokemon->generation(),
                    'national_dex_number' => $pokemon->value,
                    'evolves_from' => PokemonEvolutions::evolvesFrom($pokemon)->value ?? null,
                ];
            })->toArray(),
            ['slug'],
            ['evolves_from'],
        );
    }
}
