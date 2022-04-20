<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course =
        [
            //Cursos
            ['nameCourse' => 'Engenharia','fk_idacademy' =>1],
            ['nameCourse' => 'Medicina','fk_idacademy' =>1],
            ['nameCourse' => 'Regrutamento Geral','fk_idacademy' =>5],

        ];

        foreach ($course as $value) {
            Course::create($value);
        }
    }
}
