<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilitaryCensusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('military_census', function (Blueprint $table) {
            $table->id();

            //utente/candidato
            $table->unsignedBigInteger('fk_idcandidates');
            $table->foreign('fk_idcandidates')->references('id')->on('candidates');

            //Municipio
             $table->unsignedBigInteger('fk_idMunicipe');
             $table->foreign('fk_idMunicipe')->references('id')->on('municipies');

            $table->timestamps();
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
        Schema::dropIfExists('military_census');
    }
}
