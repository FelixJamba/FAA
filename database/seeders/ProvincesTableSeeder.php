<?php

namespace Database\Seeders;

use App\Models\Provinces;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $provincias =
        [
            ['nameProvince' => 'Bengo'],
            ['nameProvince' => 'Benguela'],
            ['nameProvince' => 'Bié'],
            ['nameProvince' => 'Cabinda'],
            ['nameProvince' => 'Cuando-Cubango'],
            ['nameProvince' => 'Cuanza Norte'],
            ['nameProvince' => 'Cuanza Sul'],
            ['nameProvince' => 'Cunene'],
            ['nameProvince' => 'Huambo'],
            ['nameProvince' => 'Huíla'],
            ['nameProvince' => 'Luanda'],
            ['nameProvince' => 'Lunda Norte'],
            ['nameProvince' => 'Lunda Sul'],
            ['nameProvince' => 'Malanje'],
            ['nameProvince' => 'Moxico'],
            ['nameProvince' => 'Namibe'],
            ['nameProvince' => 'Uíge'],
            ['nameProvince' => 'Zaire'],
        ];

        foreach ($provincias as $value) {
            Provinces::create($value);
        }
    }
}
