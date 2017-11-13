<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'epeidnum', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsToMany('App\Role');
    }

    public function news()
    {
        return $this->hasMany('App\News');
    }

    public function page() {
        return $this->hasMany('App\Page');
    }

    public function cooperation() {
        return $this->hasMany('App\Cooperation');
    }

    public function research() {
        return $this->hasMany('App\Research');
    }

    public function devotion() {
        return $this->hasMany('App\Devotion');
    }

    public function curriculum() {
        return $this->hasMany('App\Curriculum');
    }

    public function achievement() {
        return $this->hasMany('App\Achievement');
    }

    public function service() {
        return $this->hasMany('App\Service');
    }

    public function lecturer() {
        return $this->hasMany('App\Lecturer');
    }

    public function lecturer_summary() {
        return $this->hasMany('App\LecturerSummary');
    }
}
