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

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

use App\Karyawan;
Route::get('/karyawan', function () {
    $karyawans = Karyawan::all();

    foreach($karyawans as $karyawan) {
        echo $karyawan->nama . "<br/>";
    }

});

Route::get('/karyawan', 'KaryawanController@index');
Route::get('/karyawan/create', 'KaryawanController@create');
Route::post('/karyawan/store', 'KaryawanController@store');
Route::delete('/karyawan/{id}/delete', 'KaryawanController@destroy');
Route::post('/karyawan/{id}/edit', 'KaryawanController@update');
Route::get('/karyawan/edit/{id}', 'KaryawanController@edit');

Route::resource('/jabatan', 'JabatanController');