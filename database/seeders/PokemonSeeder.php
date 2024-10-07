<?php

namespace Database\Seeders;

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
            'generation_id' => 1,
            'national_dex_number' => 1,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Ivysaur',
            'generation_id' => 1,
            'national_dex_number' => 2,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Venusaur',
            'generation_id' => 1,
            'national_dex_number' => 3,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charmander',
            'generation_id' => 1,
            'national_dex_number' => 4,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charmeleon',
            'generation_id' => 1,
            'national_dex_number' => 5,
        ]);

        DB::table('pokemon')->insert([
            'name' => 'Charizard',
            'generation_id' => 1,
            'national_dex_number' => 6,
        ]);
    }
}
