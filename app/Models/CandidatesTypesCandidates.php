<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidatesTypesCandidates extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'candidates_types_applications';

    public $fillable = [
        'fk_idmunicipies',
        'fk_idacademy',
        'fk_idcandidates',
        'fk_idtypes_application',
        'fk_idacademic_levels',
        'fk_idcourse',
        'schoolDocument',
        'census'
    ];

    public $dates = ['deleted_at'];

    public function Municipies(){

        return $this->hasOne(CandidatesTypesCandidates::class, 'fk_idmunicipies');
    }

    public function typeCandidature(){

        return $this->hasMany(CandidatesTypesCandidates::class, 'fk_idtypes_application');
    }

    public function candidate(){

        return $this->hasMany(CandidatesTypesCandidates::class, 'fk_idcandidates');
    }

    public function academia(){

        return $this->hasMany(CandidatesTypesCandidates::class, 'fk_idacademy');
    }

    public function academicLevel(){

        return $this->hasMany(CandidatesTypesCandidates::class, 'fk_idacademic_levels');
    }

    public function course(){

        return $this->hasMany(CandidatesTypesCandidates::class, 'fk_idcourse');
    }



}
