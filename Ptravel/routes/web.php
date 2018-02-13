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

Route::get('/', function()
{
    return view("login");
});

Route::get('/getadd', 'admin\PortController@getView');
Route::get('/add', 'admin\volController@createVol');
Route::get('/addRes/{id}', 'client\ReservationController@create');
Route::get('/delete', 'admin\volController@deleteVol');
Route::get('/all', 'admin\volController@getVol');
Route::get('/auth', 'authenti\LoginController@postRegister');
Route::post('/', 'authenti\LoginController@postLogin')->name('login');
Route::post('/addPort', 'admin\PortController@createPort')->name('addPort');
Route::get('/deletePort/{id}', 'admin\PortController@deletePort');
Route::get('/updatePort/{id}', 'admin\PortController@updatePort');
Route::get('/allPorts/{id?}', 'admin\PortController@getPorts')->name("allports");








