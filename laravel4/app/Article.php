<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //model tuong tac vs bang nao trong db
	protected $table = 'articles';
}
