<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

//    protected $table = 'posts';
//
//    protected $primarKey = 'post_id';



    protected  $dates = ['deleted_at'];

    protected $fillable =[

        'title',
        'content',
        'path'

    ];

    public static function create($all)
    {

    }

    public function user(){


        return $this->belongsTo('App\User');
    }

    public function photos(){

        return $this->morphMany('App\Photo', 'imageable');

    }

    public function tags(){

        return $this->morphToMany('App\Tag', 'tagable');

    }




}
