<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'candidates';
    public $fillable = [
       'fullName',
       'identification',
       'fatherName',
       'motherName',
       'birthDate',
       'telephoneNumber',
       'sexo',
       'email',
       'municipe',
       'nameProvince',
       'marital_status',
       'identityCard'
   ];

   protected $dates = ['deleted_at'];


    public function candidatesTypesCandidates(){

        return $this->hasMany(Candidate::class, 'fk_idcandidates');
    }

    public function Municipies(){

        return $this->hasOne(Candidate::class, 'fk_idmunicipies');
    }

    public function MilitaryCensus(){

        return $this->hasOne(Candidate::class, 'fk_idcandidates');
    }


}
