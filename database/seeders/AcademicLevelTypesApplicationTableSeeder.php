<?php

namespace Database\Seeders;

use App\Models\AcademicLevel_TypesApplication;
use Illuminate\Database\Seeder;

class AcademicLevelTypesApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $academicLevelTypeApplication =
        [
            //Academias
            ['fk_idAcademicLevel' => '1','fk_idTypes_application' =>1],
            ['fk_idAcademicLevel' => '2','fk_idTypes_application' =>1],
            ['fk_idAcademicLevel' => '3','fk_idTypes_application' =>1],
            ['fk_idAcademicLevel' => '4','fk_idTypes_application' =>1],
            ['fk_idAcademicLevel' => '5','fk_idTypes_application' =>1],
            ['fk_idAcademicLevel' => '6','fk_idTypes_application' =>1],
            ['fk_idAcademicLevel' => '7','fk_idTypes_application' =>1],
            ['fk_idAcademicLevel' => '8','fk_idTypes_application' =>1],
            ['fk_idAcademicLevel' => '9','fk_idTypes_application' =>1],
            ['fk_idAcademicLevel' => '10','fk_idTypes_application' =>1],
            ['fk_idAcademicLevel' => '9','fk_idTypes_application' =>2],
            ['fk_idAcademicLevel' => '10','fk_idTypes_application' =>2],
        ];

        foreach ($academicLevelTypeApplication as $value) {
            AcademicLevel_TypesApplication::create($value);
        }
    }
}
