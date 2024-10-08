<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DexPokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dex_pokemon')->insert([
            'dex_id' => 1,
            'pokemon_id' => 1,
        ]);
        DB::table('dex_pokemon')->insert([
            'dex_id' => 1,
            'pokemon_id' => 2,
        ]);
        DB::table('dex_pokemon')->insert([
            'dex_id' => 1,
            'pokemon_id' => 3,
        ]);
        DB::table('dex_pokemon')->insert([
            'dex_id' => 1,
            'pokemon_id' => 4,
        ]);
        DB::table('dex_pokemon')->insert([
            'dex_id' => 1,
            'pokemon_id' => 5,
        ]);
        DB::table('dex_pokemon')->insert([
            'dex_id' => 1,
            'pokemon_id' => 6,
        ]);
        DB::table('dex_pokemon')->insert([
            'dex_id' => 2,
            'pokemon_id' => 1,
        ]);
        DB::table('dex_pokemon')->insert([
            'dex_id' => 2,
            'pokemon_id' => 2,
        ]);
        DB::table('dex_pokemon')->insert([
            'dex_id' => 2,
            'pokemon_id' => 3,
        ]);
        DB::table('dex_pokemon')->insert([
            'dex_id' => 2,
            'pokemon_id' => 4,
        ]);
        DB::table('dex_pokemon')->insert([
            'dex_id' => 2,
            'pokemon_id' => 5,
        ]);
        DB::table('dex_pokemon')->insert([
            'dex_id' => 2,
            'pokemon_id' => 6,
        ]);
    }
}
