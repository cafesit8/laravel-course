<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //   $curso = new Curso();
    //   $curso->name = 'Laravel';
    //   $curso->description = 'El mejor framework de Php';
    //   $curso->category = 'Desarrollo Web';
    //   $curso->save();

    //   $curso2 = new Curso();
    //   $curso2->name = 'React';
    //   $curso2->description = 'La mejor librería de JavaScript';
    //   $curso2->category = 'Desarrollo Web';
    //   $curso2->save();

    //   $curso3 = new Curso();
    //   $curso3->name = 'Next.js';
    //   $curso3->description = 'El mejor framework de JavaScript';
    //   $curso3->category = 'Desarrollo Web';
    //   $curso3->save();

    //   $curso4 = new Curso();
    //   $curso4->name = 'JavaScript';
    //   $curso4->description = 'El lenguaje rey de la web';
    //   $curso4->category = 'Desarrollo Web';
    //   $curso4->save();
    // }
    public function run(){
      Curso::factory(30)->create();
    }
}
