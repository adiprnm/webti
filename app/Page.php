<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];

    public function page_category() {
        return $this->belongsTo('App\PageCategory');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
