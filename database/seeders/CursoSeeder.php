<?php

namespace Database\Seeders;

use App\Models\Curso;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Curso::factory(50)->create();
    }
}
