<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageCategory extends Model
{
    public function page()
    {
        return $this->hasMany('App\Page');
    }
}
