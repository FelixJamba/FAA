<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fullName');
            $table->string('identification');
            $table->string('fatherName');
            $table->string('identityCard',255);

            $table->string('municipe');
            $table->string('marital_status');
            $table->string('nameProvince');

            $table->string('motherName');
            $table->date('birthDate');
            $table->integer('telephoneNumber');
            $table->enum('sexo',['Masculino','Feminino']);
            $table->string('email');

            //Local de Nascimento POR CAUSA DA API VAI SER RETIRADA
            //$table->unsignedBigInteger('fk_idmunicipies');
            //$table->foreign('fk_idmunicipies')->references('id')->on('municipies');

            //Local de Candidatura
            //$table->unsignedBigInteger('fk_idLocalApplication');
            //$table->foreign('fk_idmunicipies')->references('id')->on('municipies');

            //Estado Civil POR CAUSA DA API VAI SER RETIRADA
            //$table->unsignedBigInteger('fk_idmarital_status');
            //$table->foreign('fk_idmarital_status')->references('id')->on('marital_status');


            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
