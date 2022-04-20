<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provinces extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'provinces';

    public $fillable = [
        'nameProvince'
    ];

    protected $dates = ['deleted_at'];


    public function municipies(){

        return $this->hasMany(Municipies::class, 'fk_idprovinces');
    }
}
