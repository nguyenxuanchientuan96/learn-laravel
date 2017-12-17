<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//khi truy cap vao duong dan nay thi lam nhung gi trong function
// Route::get('sayhello', function(){
// 	echo "Hello laravel. I am a new chicken";
// });
// localhost:8000/sayhello
//---------------------------------------

//route với tham số truyền vào trên đường link, name=thamso
// Route::get('sayhello/{name}', function($name){
// 	echo "Hello laravel. I am " . $name;
// });
//localhost:8000/sayhello/ten
//-> nếu đường dẫn có tên -> chạy bình thường nhưng nếu đường dẫn k tên -> lỗi


//------------------
//k điền vào name cũng k lỗi ( nếu k có trả về null)
// Route::get('sayhello/{name?}', function($name = 'null'){
// 	echo "Hello laravel. I am " .$name;
// });


//------------------------------
// vi du
//bai toan: khi nhap vao stn, sth trên link -> cộng 2 số lại
// Route::get('sayhello/{stn}/{sth}', function($stn, $sth){
// 	$tong = $stn + $sth;
// 	return $tong;
// });


//-------------------- GROUP ROUTE: 
// Route::group(['prefix'=>'admin'], function(){
// 	Route::get('home', function(){
// 		return "Đây là trang home trong mục admin -> root/admin/home";
// 	});
// 	//trong group co 1 group con
// 	Route::group(['prefix'=>'product'], function(){
// 		Route::get('add', function(){
// 			return "Đây là trang thêm sản phẩm";
// 		});
// 	});
// });


//--------------------Controller
//Route::get('controller', 'MyFirstController@getController');
//controller nhận tham số
//Route::get('controller/{stn}/{sth}', 'MyFirstController@getController');


//-----------------View
 Route::get('view', 'MyFirstController@getView');

