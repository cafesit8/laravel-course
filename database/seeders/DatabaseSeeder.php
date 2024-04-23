<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      // $this->call(CursoSeeder::class); // Aquí estás usando el seeder Curso, cosa que si quieres más datos además de Curso, te llenarás de Seeders y Factories
      Curso::factory(30)->create(); // En su lugar llamamos directamente al factory y nos evitamos de crear muchos Seeders
      // User::factory(10)->create();
      User::factory(10)->create();
    }
}
