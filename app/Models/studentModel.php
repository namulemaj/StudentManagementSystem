<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    public function myCourse(){
        return $this->hasMany('App\courseModel','id','course_id');
    }
}
