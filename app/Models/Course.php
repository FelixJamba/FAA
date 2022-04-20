<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'courses';

    public $fillable = [
        'nameCourse',
        'fk_idacademy',
    ];

    public $dates = ['deleted_at'];



    public function academy(){

        return $this->hasMany(Course::class, 'fk_idacademy');
    }


    public function course(){

        return $this->hasMany(Course::class, 'fk_idcourse');
    }
}
