<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MilitaryCensus extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'military_census';
    public $fillable =[

        'fk_idcandidates',
        'fk_idMunicipe'
    ];
    protected $dates = ['deleted_at'];

    public function Candidates(){

        return $this->hasOne(MilitaryCensus::class, 'fk_idcandidates');
    }
    public function Municipies(){

        return $this->hasOne(MilitaryCensus::class, 'fk_idMunicipe');
    }

}

