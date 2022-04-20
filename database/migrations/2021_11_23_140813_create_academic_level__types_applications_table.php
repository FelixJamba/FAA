<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicLevelTypesApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_level_types_applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

             //AcademicLevel
             $table->unsignedBigInteger('fk_idAcademicLevel');
             $table->foreign('fk_idAcademicLevel')->references('id')->on('academic_levels');

             //tipo candidaturas
             $table->unsignedBigInteger('fk_idTypes_application');
             $table->foreign('fk_idTypes_application')->references('id')->on('types_application');

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
        Schema::dropIfExists('academic_level_types_applications');
    }
}
