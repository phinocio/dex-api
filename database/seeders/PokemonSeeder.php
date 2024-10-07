<?php

namespace Database\Seeders;

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
        DB::table('pokemon')->insert([
            'name' => 'Bulbasaur',
            'slug' => 'bulbasaur',
            'generation_id' => Generation::I,
            'national_dex_number' => 1,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Ivysaur',
            'slug' => 'ivysaur',
            'generation_id' => Generation::I,
            'national_dex_number' => 2,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Venusaur',
            'slug' => 'venusaur',
            'generation_id' => Generation::I,
            'national_dex_number' => 3,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charmander',
            'slug' => 'charmander',
            'generation_id' => Generation::I,
            'national_dex_number' => 4,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charmeleon',
            'slug' => 'charmeleon',
            'generation_id' => Generation::I,
            'national_dex_number' => 5,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charizard',
            'slug' => 'charizard',
            'generation_id' => Generation::I,
            'national_dex_number' => 6,
        ]);
    }
}
