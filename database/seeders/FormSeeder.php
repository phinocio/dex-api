<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        DB::table('forms')->insert([
            [
                'name' => 'Gigantamax',
                'slug' => 'gigantamax',
            ],
            [
                'name' => 'Alolan',
                'slug' => 'alolan',
            ],
            [
                'name' => 'Galarian',
                'slug' => 'galarian',
            ],
            [
                'name' => 'Hisuian',
                'slug' => 'hisuian',
            ],
            [
                'name' => 'Paldean',
                'slug' => 'paldean',
            ],
        ]);
    }
}
