<?php

namespace Database\Seeders;

use App\Enums\Generation;
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
            'id' => Generation::I,
            'name' => 'Generation I',
            'slug' => 'generation-i',
            'new_pokemon' => 151,
            'total_pokemon' => 151,
        ]);

        DB::table('generations')->insert([
            'id' => Generation::II,
            'name' => 'Generation II',
            'slug' => 'generation-ii',
            'new_pokemon' => 100,
            'total_pokemon' => 251,
        ]);
    }
}
