<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generations')->insert([
            'name' => 'Generation I',
            'new_pokemon' => 151,
            'total_pokemon' => 151,
        ]);

        DB::table('generations')->insert([
            'name' => 'Generation II',
            'new_pokemon' => 100,
            'total_pokemon' => 251,
        ]);
    }
}
