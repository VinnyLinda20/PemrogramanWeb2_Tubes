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
    return view('pengguna.login');
});

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', 'HomeController@index');

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
Route::get('/karyawan/{id}/edit', 'KaryawanController@edit');
Route::put('/karyawan/edit/{id}', 'KaryawanController@update');

Route::resource('/jabatan', 'JabatanController');