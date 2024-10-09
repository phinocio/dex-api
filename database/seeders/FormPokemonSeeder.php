<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormPokemonSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        DB::table('form_pokemon')->insert([
            [
                'pokemon_id' => 3,
                'form_id' => 1,
            ],
        ]);
    }
}
