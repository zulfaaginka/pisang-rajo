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

Route::view('/','blog/home');
Route::view('/about','blog/about');
Route::get('/menu','BlogMenuController@view');
Route::view('/lokasi','blog/lokasi');
Route::view('/pesan','blog/pesan');
Route::view('/upload_bukti','blog/bukti');
Route::get('/menu/{id}','BlogMenuController@produk_view');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//Menu Insert
Route::get('/dashboard/view_menu/add', 'HomeController@menu');
Route::post('/dashboard','HomeController@store');

//delete menu
Route::get('/dashboard/view_menu/{id}/delete','HomeController@delete');

//update menu
Route::get('/dashboard/view_menu','MenuController@index');
Route::get('/dashboard/view_menu/{id}/edit','HomeController@edit');
Route::put('/dashboard/view_menu/{id}', 'HomeController@update');


//upload bukti
Route::post('/upload_bukti','BuktiController@store');
Route::get('/dashboard/view_bukti', 'BuktiController@index');

//cart
Route::view('/cart','blog/cart');
Route::delete('/cart/{id}','CartController@remove');
Route::post('/cart/add','CartController@store');
Route::put('/cart/update/{id}','CartController@update');

//checkout
Route::get('/checkout','CheckoutController@index');
Route::post('/checkout/complete','CheckoutController@store');
//Route::view('/checkout','blog/checkout');
Route::get('/dashboard/pemesan','AdminController@index_data');

//detail pesanan
Route::get('/dashboard/pemesan/{nopem}','AdminController@details');
Route::get('/dashboard/pemesan/{nopem}/sent','AdminController@send_invoice');

//contact
Route::get('/contact','ContactController@getContact');
Route::post('/contact/sent','ContactController@postContact');

//pemesanan
Route::get('/dashboard/pemesan/{nopem}/konfirmasi','AdminController@konfirmasi_pemesanan');
Route::get('/dashboard/pemesan/{nopem}/tolak','AdminController@tolak_pemesanan');