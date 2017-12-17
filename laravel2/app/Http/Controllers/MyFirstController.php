<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    //
    // public function getController(){
    // 	echo "hello laravel. This is MyFirstController";
    // }

    public function getController($stn, $sth){
    	$tong= $stn + $sth;
    	return $tong;
    }

    //---------
    // public function getView(){
    // 	return view('MyFirstView');
    // }

    //đẩy 1 biến từ controller ra  view
    //--------
    // public function getView(){
    // 	$data['user']= 'Vietpro';
    // 	return view('MyFirstView', $data);
    // }

   	//------------Đẩy 1 mảng
   	public function getView(){
   		$data['user'] = ['VietPro', 'Admin', 'Chien Tuan'];
   		return view('MyFirstView', $data);
   	}


}
