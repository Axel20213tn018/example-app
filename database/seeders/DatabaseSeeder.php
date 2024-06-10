<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        //          Codigos de ejemplo
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
 
        //          Llamar a un modelo especifico
        // $this->call(CursoSeeder::class);


        User::factory(10)->create();
        Curso::factory(50)->create();

    }
}
