<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag_name', 'created_date', 'updated_at'];

    public function news()
    {
        return $this->belongsToMany('App\News');
    }
}
