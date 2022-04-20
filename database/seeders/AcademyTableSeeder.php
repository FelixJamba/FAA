<?php

namespace Database\Seeders;

use App\Models\Academy;
use Illuminate\Database\Seeder;

class AcademyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Academia =
        [
            //Academias
            ['nameAcademy' => 'Instituto Superior Técnico Militar','fk_idMunicipe' =>101],
            ['nameAcademy' => 'Academia Militar do Exército','fk_idMunicipe' =>17],
            ['nameAcademy' => 'Academia Naval','fk_idMunicipe' =>1],
            ['nameAcademy' => 'Academia da Força Aérea','fk_idMunicipe' =>97],
            ['nameAcademy' => 'Recrutamento Geral','fk_idMunicipe' =>97],
        ];

        foreach ($Academia as $value) {
            Academy::create($value);
        }
    }
}
