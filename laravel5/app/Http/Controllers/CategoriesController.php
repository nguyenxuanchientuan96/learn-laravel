<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Input;
use App\Http\Requests;

class CategoriesController extends Controller
{
    //
    function list(){
    	$categories = Category::all();
    	return view('admin.list_categories', compact('categories'));
    }
}
