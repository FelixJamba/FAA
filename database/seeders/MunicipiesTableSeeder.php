<?php

namespace Database\Seeders;

use App\Models\Municipies;
use Illuminate\Database\Seeder;

class MunicipiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipios =
        [
            //Bengo
            ['nameMunicipe' => 'Ambriz','fk_idprovinces' =>1],
            ['nameMunicipe' => 'Bula Atumba','fk_idprovinces' =>1],
            ['nameMunicipe' => 'Dande','fk_idprovinces' =>1],
            ['nameMunicipe' => 'Dembos','fk_idprovinces' =>1],
            ['nameMunicipe' => 'Nambuangongo','fk_idprovinces' =>1],
            ['nameMunicipe' => 'Pango','fk_idprovinces' =>1],
            ['nameMunicipe' => 'Aluquém', 'fk_idprovinces' =>1],
            //Benguela
            ['nameMunicipe' => 'Balombo','fk_idprovinces' =>2],
            ['nameMunicipe' => 'Baía Farta','fk_idprovinces' =>2],
            ['nameMunicipe' => 'Benguela','fk_idprovinces' =>2],
            ['nameMunicipe' => 'Bocoio','fk_idprovinces' =>2],
            ['nameMunicipe' => 'Caimbambo','fk_idprovinces' =>2],
            ['nameMunicipe' => 'Catumbela','fk_idprovinces' =>2],
            ['nameMunicipe' => 'Chongorói','fk_idprovinces' =>2],
            ['nameMunicipe' => 'Cubal','fk_idprovinces' =>2],
            ['nameMunicipe' => 'Ganda','fk_idprovinces' =>2],
            ['nameMunicipe' => 'Lobito','fk_idprovinces' =>2],
            //Bié
            ['nameMunicipe' => 'Andulo','fk_idprovinces' =>3],
            ['nameMunicipe' => 'Camacupa','fk_idprovinces' =>3],
            ['nameMunicipe' => 'Catabola','fk_idprovinces' =>3],
            ['nameMunicipe' => 'Chinguar','fk_idprovinces' =>3],
            ['nameMunicipe' => 'Chitembo','fk_idprovinces' =>3],
            ['nameMunicipe' => 'Cuemba','fk_idprovinces' =>3],
            ['nameMunicipe' => 'Cunhinga','fk_idprovinces' =>3],
            ['nameMunicipe' => 'Cuíto','fk_idprovinces' =>3],
            ['nameMunicipe' => 'Nharea','fk_idprovinces' =>3],
            //Cabinda
            ['nameMunicipe' => 'Belize','fk_idprovinces' =>4],
            ['nameMunicipe' => 'Buco-Zau','fk_idprovinces' =>4],
            ['nameMunicipe' => 'Cabinda','fk_idprovinces' =>4],
            ['nameMunicipe' => 'Cacongo','fk_idprovinces' =>4],
            //Cuando Cubango
            ['nameMunicipe' => 'Calai','fk_idprovinces' =>5],
            ['nameMunicipe' => 'Cuangar','fk_idprovinces' =>5],
            ['nameMunicipe' => 'Cuchi','fk_idprovinces' =>5],
            ['nameMunicipe' => 'Cuito Cuanavale','fk_idprovinces' =>5],
            ['nameMunicipe' => 'Dirico','fk_idprovinces' =>5],
            ['nameMunicipe' => 'Mavinga','fk_idprovinces' =>5],
            ['nameMunicipe' => 'Menongue','fk_idprovinces' =>5],
            ['nameMunicipe' => 'Nancova','fk_idprovinces' =>5],
            ['nameMunicipe' => 'Rivungo','fk_idprovinces' =>5],
            //Cuanza Norte
            ['nameMunicipe' => 'Ambaca','fk_idprovinces' =>6],
            ['nameMunicipe' => 'Banga','fk_idprovinces' =>6],
            ['nameMunicipe' => 'Bolongongo','fk_idprovinces' =>6],
            ['nameMunicipe' => 'Cambambe','fk_idprovinces' =>6],
            ['nameMunicipe' => 'Cazengo','fk_idprovinces' =>6],
            ['nameMunicipe' => 'Golungo Alto','fk_idprovinces' =>6],
            ['nameMunicipe' => 'Gonguembo','fk_idprovinces' =>6],
            ['nameMunicipe' => 'Lucala','fk_idprovinces' =>6],
            ['nameMunicipe' => 'Quiculungo','fk_idprovinces' =>6],
            ['nameMunicipe' => 'Samba Caju','fk_idprovinces' =>6],
            //Cuanza Sul
            ['nameMunicipe' => 'Amboim','fk_idprovinces' =>7],
            ['nameMunicipe' => 'Cassongue','fk_idprovinces' =>7],
            ['nameMunicipe' => 'Cela','fk_idprovinces' =>7],
            ['nameMunicipe' => 'Conda','fk_idprovinces' =>7],
            ['nameMunicipe' => 'Ebo','fk_idprovinces' =>7],
            ['nameMunicipe' => 'Libolo','fk_idprovinces' =>7],
            ['nameMunicipe' => 'Mussende','fk_idprovinces' =>7],
            ['nameMunicipe' => 'Porto Amboim','fk_idprovinces' =>7],
            ['nameMunicipe' => 'Quibala','fk_idprovinces' =>7],
            ['nameMunicipe' => 'Quilenda','fk_idprovinces' =>7],
            ['nameMunicipe' => 'Seles','fk_idprovinces' =>7],
            ['nameMunicipe' => 'Sumbe','fk_idprovinces' =>7],
            //Cunene
            ['nameMunicipe' => 'Cahama','fk_idprovinces' =>8],
            ['nameMunicipe' => 'Cuanhama','fk_idprovinces' =>8],
            ['nameMunicipe' => 'Curoca','fk_idprovinces' =>8],
            ['nameMunicipe' => 'Cuvelai','fk_idprovinces' =>8],
            ['nameMunicipe' => 'Namacunde','fk_idprovinces' =>8],
            ['nameMunicipe' => 'Ombadja','fk_idprovinces' =>8],
            //Huambo
            ['nameMunicipe' => 'Bailundo','fk_idprovinces' =>9],
            ['nameMunicipe' => 'Cachiungo','fk_idprovinces' =>9],
            ['nameMunicipe' => 'Caála','fk_idprovinces' =>9],
            ['nameMunicipe' => 'Ecunha','fk_idprovinces' =>9],
            ['nameMunicipe' => 'Huambo','fk_idprovinces' =>9],
            ['nameMunicipe' => 'Londuimbali','fk_idprovinces' =>9],
            ['nameMunicipe' => 'Longonjo','fk_idprovinces' =>9],
            ['nameMunicipe' => 'Mungo','fk_idprovinces' =>9],
            ['nameMunicipe' => 'Chicala-Choloanga','fk_idprovinces' =>9],
            ['nameMunicipe' => 'Chinjenje','fk_idprovinces' =>9],
            ['nameMunicipe' => 'Ucuma','fk_idprovinces' =>9],
            //Huila
            ['nameMunicipe' => 'Caconda','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Cacula','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Caluquembe','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Chiange','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Chibia','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Chicomba','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Chipindo','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Cuvango','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Humpata','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Jamba','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Lubango','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Matala','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Quilengues','fk_idprovinces' =>10],
            ['nameMunicipe' => 'Quipungo','fk_idprovinces' =>10],
            //Luanda
            ['nameMunicipe' => 'Belas','fk_idprovinces' =>11],
            ['nameMunicipe' => 'Cacuaco','fk_idprovinces' =>11],
            ['nameMunicipe' => 'Cazenga','fk_idprovinces' =>11],
            ['nameMunicipe' => 'Ícolo e Bengo','fk_idprovinces' =>11],
            ['nameMunicipe' => 'Luanda','fk_idprovinces' =>11],
            ['nameMunicipe' => 'Quilamba Quiaxi','fk_idprovinces' =>11],
            ['nameMunicipe' => 'Quissama','fk_idprovinces' =>11],
            ['nameMunicipe' => 'Talatona','fk_idprovinces' =>11],
            ['nameMunicipe' => 'Viana','fk_idprovinces' =>11],
            //Lunda-Norte
            ['nameMunicipe' => 'Cambulo','fk_idprovinces' =>12],
            ['nameMunicipe' => 'Capenda-Camulemba','fk_idprovinces' =>12],
            ['nameMunicipe' => 'Caungula','fk_idprovinces' =>12],
            ['nameMunicipe' => 'Chitato','fk_idprovinces' =>12],
            ['nameMunicipe' => 'Cuango','fk_idprovinces' =>12],
            ['nameMunicipe' => 'Cuílo','fk_idprovinces' =>12],
            ['nameMunicipe' => 'Lóvua','fk_idprovinces' =>12],
            ['nameMunicipe' => 'Lubalo','fk_idprovinces' =>12],
            ['nameMunicipe' => 'Lucapa','fk_idprovinces' =>12],
            ['nameMunicipe' => 'Xá-Muteba','fk_idprovinces' =>12],
            //Lunda-Sul
            ['nameMunicipe' => 'Cacolo','fk_idprovinces' =>13],
            ['nameMunicipe' => 'Cacolo','fk_idprovinces' =>13],
            ['nameMunicipe' => 'Dala','fk_idprovinces' =>13],
            ['nameMunicipe' => 'Muconda','fk_idprovinces' =>13],
            ['nameMunicipe' => 'Saurimo','fk_idprovinces' =>13],
            //Malanje
            ['nameMunicipe' => 'Cacuso','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Calandula','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Cambundi-Catembo','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Cangandala','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Caombo','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Cuaba Nzoji','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Cunda-Dia-Baze','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Malanje','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Marimba','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Massango','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Mucari','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Quela','fk_idprovinces' =>14],
            ['nameMunicipe' => 'Quirima','fk_idprovinces' =>14],
            //Moxico
            ['nameMunicipe' => 'Alto Zambeze','fk_idprovinces' =>15],
            ['nameMunicipe' => 'Bundas','fk_idprovinces' =>15],
            ['nameMunicipe' => 'Camanongue','fk_idprovinces' =>15],
            ['nameMunicipe' => 'Léua','fk_idprovinces' =>15],
            ['nameMunicipe' => 'Luau','fk_idprovinces' =>15],
            ['nameMunicipe' => 'Luacano','fk_idprovinces' =>15],
            ['nameMunicipe' => 'Luchazes','fk_idprovinces' =>15],
            ['nameMunicipe' => 'Cameia','fk_idprovinces' =>15],
            ['nameMunicipe' => 'Moxico','fk_idprovinces' =>15],
            //Namibe
            ['nameMunicipe' => 'Bibala','fk_idprovinces' =>16],
            ['nameMunicipe' => 'Camucuio','fk_idprovinces' =>16],
            ['nameMunicipe' => 'Moçâmedes','fk_idprovinces' =>16],
            ['nameMunicipe' => 'Tômbua','fk_idprovinces' =>16],
            ['nameMunicipe' => 'Virei','fk_idprovinces' =>16],
            //Uige
            ['nameMunicipe' => 'Alto Cauale','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Ambuíla','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Bembe','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Buengas','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Bungo','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Damba','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Milunga','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Mucaba','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Negage','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Puri','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Quimbele','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Quitexe','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Sanza Pombo','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Songo','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Uíge','fk_idprovinces' =>17],
            ['nameMunicipe' => 'Zombo','fk_idprovinces' =>17],
             //Zaire
             ['nameMunicipe' => 'Cuimba','fk_idprovinces' =>18],
             ['nameMunicipe' => 'Mabanza Congo','fk_idprovinces' =>18],
             ['nameMunicipe' => 'Nóqui','fk_idprovinces' =>18],
             ['nameMunicipe' => 'Nezeto','fk_idprovinces' =>18],
             ['nameMunicipe' => 'Soio','fk_idprovinces' =>18],
             ['nameMunicipe' => 'Tomboco','fk_idprovinces' =>18],
        ];

        foreach ($municipios as $value)
        {
           Municipies::create($value);
        }
    }
}
