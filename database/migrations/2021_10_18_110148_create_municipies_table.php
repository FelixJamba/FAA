<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipies', function (Blueprint $table) {
            $table->id();
            $table->string('nameMunicipe');

            //Relação Municipio de nascimento
            $table->unsignedBigInteger('fk_idprovinces');
            $table->foreign('fk_idprovinces')->references('id')->on('provinces');

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
        Schema::dropIfExists('municipies');
    }
}
