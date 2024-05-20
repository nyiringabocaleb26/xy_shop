<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\productController;

Route::get('/',function(){
    return view('xy_shop\landing');
});

Route::get('/home','App\Http\Controllers\ProductController@count')->name('home');


Route::get('/admin','App\Http\Controllers\ProductController@select');

// Route::get('/admin','App\Http\Controllers\ProductController@ShowAdmin');
Route::post('/admin','App\Http\Controllers\ProductController@productIn');

Route::get('getProducts','App\Http\Controllers\ProductController@showProducts')->name('getProducts');

Route::get('client','App\Http\Controllers\ProductController@index2')->name('client');

Route::post('/replace',[ProductController::class,'replace'])->name('client');

Route::get('list','App\Http\Controllers\productController@showAll')->name('inList');

Route::get('panel','App\Http\Controllers\productController@panel')->name('panel');
Route::get('panel/{id}','App\Http\Controllers\productController@destroy');

//routes to update data

Route::get('update/{id}','App\Http\Controllers\productController@show');
Route::post('update/{id}','App\Http\Controllers\productController@update');


//login route




// Route::get('/insert',function(){
//     // $id = $request->id;
//     // $product = Product::where('id',$id)->get();
    
//     // return view('xy_shop\productInsert');
//     return view('xy_shop\productInsert',['data'=>'datas']);
    
// });


Route::get('insert','App\Http\Controllers\productController@index')->name('productInsert');
Route::post('create','App\Http\Controllers\productController@insert');

Route::get('insert_user','App\Http\Controllers\userController@index')->name('userReg');
Route::post('create_user','App\Http\Controllers\userController@insert');

Route::get('user_login','App\Http\Controllers\userController@index2')->name('userLogin');
Route::post('dashboard','App\Http\Controllers\loginController@authenticate');


