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


//creating form
//Route::get('create', 'CustomerController@create');
////sending to form
//Route::post('customer/store', 'CustomerController@store');
////fetching from database
//Route::get('customer', 'CustomerController@index');
////Update data
//Route::resource('customer', 'CustomerController');
////edit data
//Route::get('customeredit/{customer_id}', 'CustomerController@edit');
//
Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Route::get('fee', ['middleware'=> 'manager', function (){
//    return ' this is onoly accessible by Manager';
//
//}]);
Route::resource('customer', 'CustomerController',
    ['only' => ['create', 'index' ,'store', 'edit', 'update']]);

