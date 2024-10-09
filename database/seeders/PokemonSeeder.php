<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\Gen1Pokemon;
use App\Enums\Gen2Pokemon;
use App\Enums\Gen3Pokemon;
use App\Enums\Gen4Pokemon;
use App\Enums\Generation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        DB::table('pokemon')->insert(
            collect(Gen1Pokemon::cases())->map(function (Gen1Pokemon $pokemon) {
                return [
                    'name' => $pokemon->name(),
                    'slug' => $pokemon->slug(),
                    'generation_id' => Generation::I,
                    'national_dex_number' => $pokemon->value,
                ];
            })->toArray(),
        );

        DB::table('pokemon')->insert(
            collect(Gen2Pokemon::cases())->map(function (Gen2Pokemon $pokemon) {
                return [
                    'name' => $pokemon->name(),
                    'slug' => $pokemon->slug(),
                    'generation_id' => Generation::II,
                    'national_dex_number' => $pokemon->value,
                ];
            })->toArray(),
        );

        DB::table('pokemon')->insert(
            collect(Gen3Pokemon::cases())->map(function (Gen3Pokemon $pokemon) {
                return [
                    'name' => $pokemon->name(),
                    'slug' => $pokemon->slug(),
                    'generation_id' => Generation::III,
                    'national_dex_number' => $pokemon->value,
                ];
            })->toArray(),
        );

        DB::table('pokemon')->insert(
            collect(Gen4Pokemon::cases())->map(function (Gen4Pokemon $pokemon) {
                return [
                    'name' => $pokemon->name(),
                    'slug' => $pokemon->slug(),
                    'generation_id' => Generation::IV,
                    'national_dex_number' => $pokemon->value,
                ];
            })->toArray(),
        );
    }
}
