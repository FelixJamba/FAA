<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Types_application extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'types_application';
    public $fillable = [
        'namesApplication'


    ];

    protected $dates = ['deleted_at'];

    public function candidatesTypesCandidates(){

        return $this->hasMany(Types_application::class, 'fk_idtypes_application');
    }

    public function academicLevelTypesCandidates(){

        return $this->hasMany(AcademicLevel_TypesApplication::class, 'fk_idTypes_application');
    }

}
