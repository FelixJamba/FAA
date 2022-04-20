<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTypesApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates_types_applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('schoolDocument',255);
            $table->string('census',255)->nullable();
            //$table->date('Application_date');

            //Candidatos
            $table->unsignedBigInteger('fk_idcandidates');
            $table->foreign('fk_idcandidates')->references('id')->on('candidates');

            //tipo candidaturas
            $table->unsignedBigInteger('fk_idtypes_application');
            $table->foreign('fk_idtypes_application')->references('id')->on('types_application');


            //Local candidatura
            $table->unsignedBigInteger('fk_idmunicipies');
            $table->foreign('fk_idmunicipies')->references('id')->on('municipies');


            //Academia onde fez a Candidatura

            $table->unsignedBigInteger('fk_idacademy');
            $table->foreign('fk_idacademy')->references('id')->on('academies');

             //Curso que pretende fazer

             $table->unsignedBigInteger('fk_idcourse');
             $table->foreign('fk_idcourse')->references('id')->on('courses');

             //Nível Académico

             $table->unsignedBigInteger('fk_idacademic_levels');
             $table->foreign('fk_idacademic_levels')->references('id')->on('academic_levels');



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
        Schema::dropIfExists('candidates_types_applications');
    }
}
