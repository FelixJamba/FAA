<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicLevel_TypesApplication extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'academic_level_types_applications';

    public $fillable = [
        'fk_idAcademicLevel',
        'fk_idTypes_application'
    ];

    public $dates = ['deleted_at'];

    public function academicLevel(){

        return $this->hasMany(AcademicLevel_TypesApplication::class, 'fk_idAcademicLevel');
    }

    public function typeApplication(){

        return $this->hasOne(AcademicLevel_TypesApplication::class, 'fk_idTypes_application');
    }

}
