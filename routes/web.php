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
Route::get('sigin', function (){
	if (Auth::user()) {
		return redirect('pemisah');
	}
	return view('auth/login');
});
Route::get('/', function () {
	if (Auth::user()) {
		return redirect('pemisah');
	}
	return redirect('awal');
});
Route::get('awal','AwalController@index');

Auth::routes();
Route::get('pemisah','admin\HomeController@pemisah');

Route::get('/alertlogin','admin\HomeController@alertlogin');

Route::group(['middleware' => 'auth'], function () {
    Route::get('change', 'PasswordController@change')->name('password.change');
    Route::put('update', 'PasswordController@update')->name('password.update');
});

Route::group(['middleware'=>'admin'],function(){
// Halaman Admin

// bagian Beranda
	Route::get('/home', 'admin\HomeController@index');
// Bagian Form tambah ,edit,hapus token
	Route::get('create_token', 'admin\TokenController@create');
	Route::post('store_token', 'admin\TokenController@store');
	Route::get('edit_token{id_token}','admin\TokenController@edit');
	Route::post('update_token{id_token}','admin\TokenController@update');
	Route::post('destroy{id_token}','admin\TokenController@destroy');

//list pelanggan
	Route::get('listpel','admin\ListpelController@index');
	Route::get('edit{id}','admin\ListpelController@edit');
	Route::post('update{id}','admin\ListpelController@update');
	Route::get('view{id}','admin\ListpelController@show');
	Route::post('del{id}','admin\ListpelController@destroy');

//transaksi pending
	Route::get('pending','admin\PendingController@index');
	Route::get('ganti{id_transaksi}','admin\PendingController@edit');
	Route::post('up{id_transaksi}','admin\PendingController@update');
	Route::post('gosok{id_transaksi}','admin\PendingController@destroy');

// detail transaksi
Route::get('detail','admin\DetailController@index');
Route::get('lihat{id}','admin\DetailController@show');
Route::post('ilang{id}','admin\DetailController@destroy');

// profile admin
	Route::get('profadmin{id}', 'admin\ProfadminController@index');
	Route::post('saveprof', 'admin\ProfadminController@store');
	Route::post('reset{id}', 'admin\ProfadminController@reset');
});


Route::group(['middleware'=>'user'],function(){
//halaman user
	Route::get('userpage', 'user\BerandaController@login');
	Route::get('beranda', 'user\BerandaController@index');
	Route::get('tagihan{id_token}.{id}', 'user\BerandaController@tagihan');
	Route::post('checkout{kode}.{id}','user\BerandaController@update');

//detail_transaksi
	Route::get('detail_transaksi', 'user\TransaksiController@index');
	Route::get('userpending', 'user\TransaksiController@pending');
// myprofile
	Route::get('profile{id}', 'user\ProfileController@index');
	Route::post('pelanggan', 'user\ProfileController@store');

// cetak pdf
	Route::get('cetak_pdf{id}{id_transaksi}','user\CetakController@cetak_pdf');
});