<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailcoursesmodel extends Model
{
    protected $table = 'detailcourses';
    protected $fillable = ['coursename', 'contentcourse'];
}
