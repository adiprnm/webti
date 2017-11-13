<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $guarded = [];

    public function curricula() {
        return $this->hasMany('App\Curriculum');
    }
}
