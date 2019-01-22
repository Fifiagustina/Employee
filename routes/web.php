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

Route::get('/home', function () {
    echo "homeyyy";
});

Route::get('/homee', function () {
    return "like homeyyy";
});

Route::get('/fifii', function () {
    return view('fifi');
});

//contoh kontroller
Route::get('/fifay', 'CapungController@index');

//memanggil controller capung dengan fungsi pujangga
Route::get('/brokoli', 'CapungController@pujangga');

Route::get('/brokoli/dewa', 'CapungController@siti');

//bikin route untuk customer
//Route::get('/Customer', 'CustomerController@index');

//punya supplier
//Route::get('/Supplier', 'SupplierController@index');

//bikin add customer
//Route::get('/Customer/create', 'CustomerController@create');

//untuk store dari customer
//Route::get('/Customer/store', 'CustomerController@store');

Route::resource('Customer', 'CustomerController');

Route::resource('Supplier', 'SupplierController');

Route::resource('Employee', 'EmployeeController');
