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

//客户信息
Route::prefix('/client')->group(function () {
    Route::get('/create', 'Index\ClientController@create');
    Route::post('/store', 'Index\ClientController@store');
    Route::post('/name_do', 'Index\ClientController@name_do');
    Route::get('/index', 'Index\ClientController@index');
    Route::get('/edit/{id}', 'Index\ClientController@edit');
    Route::post('/update/{id}', 'Index\ClientController@update');
    Route::get('/destroy/{id}', 'Index\ClientController@destroy');
});


//服务信息
Route::prefix('/service')->group(function () {
    Route::get('create', 'Index\ServiceController@create');//添加页面
    Route::post('create_do', 'Index\ServiceController@create_do');//添加执行
    Route::get('list', 'Index\ServiceController@list');//列表展示
});