<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PagesController extends Controller
{
    //
    public function index()
    {
    	$articles= Article::all();
    	return view('home', compact('articles'));
    }

    public function showArticle($id){
    	//tim theo id
    	$article= Article::find($id);
    	return view('articles', compact('article'));
    }
    
}
