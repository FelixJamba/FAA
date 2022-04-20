<?php

namespace Database\Seeders;

use App\Models\AcademicLevel;
use Illuminate\Database\Seeder;

class AcademicLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $academicLevel =
        [
            ['nameAcademicLevel' => '4ª'],
            ['nameAcademicLevel' => '5ª'],
            ['nameAcademicLevel' => '6ª'],
            ['nameAcademicLevel' => '7ª'],
            ['nameAcademicLevel' => '8ª'],
            ['nameAcademicLevel' => '9ª'],
            ['nameAcademicLevel' => '10ª'],
            ['nameAcademicLevel' => '11ª'],
            ['nameAcademicLevel' => '12ª'],
            ['nameAcademicLevel' => '13ª'],
        ];

        foreach ($academicLevel as $value) {
            AcademicLevel::create($value);
        }
    }
}
