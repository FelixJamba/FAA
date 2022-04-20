<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicLevel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'academic_levels';

    public $fillable = [
        'nameAcademicLevel'
    ];

    protected $dates = ['deleted_at'];



    public function academicLevels(){

        return $this->hasMany(CandidatesTypesCandidates::class, 'fk_idacademic_levels');
    }

    public function academicLevelsType(){

        return $this->hasMany(AcademicLevel_TypesApplication::class, 'fk_idAcademicLevel');
    }


}
