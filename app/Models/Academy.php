<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Academy extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'academies';
    public $fillable = [

        'nameAcademy',
        'fk_idMunicipe'
    ];

    protected $dates =['deleted_at'];

    //academia
    public function candidatesTypesCandidates(){

        return $this->hasMany(Academy::class, 'fk_idacademy');
    }


    //municipio
    public function course(){

        return $this->hasMany(Course::class, 'fk_idacademy');
    }
}
