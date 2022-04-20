<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Municipies extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'municipies';
    public $fillable = [
        'nameMunicipe',
        'fk_idprovinces'

    ];

    protected $dates = ['deleted_at'];


    public function Provinces(){

        return $this->hasMany(Municipies::class, 'fk_idprovinces');
    }

    public function candidatesTypesCandidates(){

        return $this->hasMany(Municipies::class, 'fk_idmunicipies');
    }

    public function militaryCensus(){

        return $this->hasOne(Municipies::class, 'fk_idmunicipies');
    }
}
