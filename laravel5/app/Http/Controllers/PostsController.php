<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Input;
use App\Http\Requests;


class PostsController extends Controller
{
    //
    function index(){
    	$posts= Post::all();
    	return view('home', compact('posts'));
    }

    public function show($id){
    	//tim theo id
    	$post= Post::find($id);
    	return view('post', compact('post'));
    }

    //tim den file create trong admin
    public function create(){
    	return view('admin.create');
    }

    public function store(Request $request)
    {
    	$title = $request->input('txt-title');
    	$excerpt = $request->input('txt-excerpt');
    	$content = $request->input('txt-content');
    	$author= $request->input('txt-author');
    	// $request->session()->flash('status', 'Tạo bài viết thành công!');


    	Post::create([
    		'title' => $title,
    		'excerpt' => $excerpt,
    		'content' => $content,
    		'author' => $author
    		]);
    	return redirect()->route('post.index');
    }
}
