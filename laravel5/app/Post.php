<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{


    protected $table="posts";
    // chong truy cap bat hop phap vap db va k hop le
    protected $fillable = [
    	'title',
    	'excerpt',
    	'content',
    	'author'
    ];
}
