<?php

namespace Database\Seeders;

use App\Models\Types_application;
use Illuminate\Database\Seeder;

class TypeApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeCandidature =
        [
            //Cursos
            ['namesApplication' => 'Recrutamento Geral'],
            ['namesApplication' => 'Estabelecimento de Ensino'],

        ];

        foreach ($typeCandidature as $value) {
            Types_application::create($value);
        }
    }
}
