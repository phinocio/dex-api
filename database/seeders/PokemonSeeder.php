<?php

namespace Database\Seeders;

use App\Enums\Gen1Pokemon;
use App\Enums\Gen2Pokemon;
use App\Enums\Generation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pokemon')->insert(
            collect(Gen1Pokemon::cases())->map(function (Gen1Pokemon $pokemon) {
                return [
                    'id' => $pokemon->value,
                    'name' => $pokemon->name(),
                    'slug' => $pokemon->slug(),
                    'generation_id' => Generation::I,
                    'national_dex_number' => $pokemon->value, // DOESNT WORK ONCE I ADD FORMS
                ];
            })->toArray()
        );

        DB::table('pokemon')->insert(
            collect(Gen2Pokemon::cases())->map(function (Gen2Pokemon $pokemon) {
                return [
                    'id' => $pokemon->value,
                    'name' => $pokemon->name(),
                    'slug' => $pokemon->slug(),
                    'generation_id' => Generation::II,
                    'national_dex_number' => $pokemon->value, // DOESNT WORK ONCE I ADD FORMS
                ];
            })->toArray()
        );
    }
}
