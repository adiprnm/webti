<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LecturerSummary extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function lecturer() {
        return $this->belongsTo('App\Lecturer');
    }
}
