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
//Route::get('group','groupController@index');
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'auth'],function(){

    Route::get('group','groupController@index');
    Route::get('group/create','groupController@create');
    Route::post('group','groupController@store');
    //Route::get('group/{id}','groupController@delete'); //for delete --- <a href="{{url('group/'.$grop->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>   
    Route::delete('group/{id}','groupController@delete'); 
      
    Route::resource('users','userController');
    Route::resource('category','categoryController',['except' => ['show']]);
});
Route::resource('products','productController');

Route::get('login','Auth\loginController@login')->name('login');
Route::post('login_action','Auth\loginController@authentication')->name('login_action');
Route::get('logout','Auth\loginController@logout')->name('logout');

