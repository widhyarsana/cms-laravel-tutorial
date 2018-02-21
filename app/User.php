<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    public function post(){

        return $this->hasOne('App\Post');

    }

    public function posts(){

        return $this->hasMany('App\Post');

    }

    public function roles(){
                                                        // tambahan intermediated pivot table
        return $this->belongsToMany('App\Role')->withPivot('created_at');

//        to customize tables name and columns follow the format below
//        return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
    }


    public function photos(){

        return $this->morphMany('App\Photo', 'imageable');

    }


}
