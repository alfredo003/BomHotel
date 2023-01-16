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
Route::get('/','LoginController@index');
Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verificLogin')->name('login.do'); 
Route::get('/logout','LoginController@logout')->name('logout'); 

Route::get('/noPermicao','AppController@noPermicao')->name('erro.noPermicao');

Route::get('/home','AppController@home')->name('admin.home'); 
Route::get('/mapaOcupacao','AppController@mapaOcupacao')->name('mapaOcupacao.index');
Route::get('/checkout','AppController@checkout')->name('checkout.index');

Route::get('/Permicao','AppController@Permicao')->name('Permicao.index');
Route::post('/Permicao','AppController@PermicaoStore')->name('Permicao.store');

Route::resource('/checkin','CheckinController')->names('checkin')->parameters(['checkin' => 'checkin']);
Route::resource('/Hospede','HospedeController')->names('hospede')->parameters(['hospede' => 'hospede']);
Route::resource('/Reserva','ReservaController')->names('Reserva')->parameters(['Reserva' => 'Reserva']);
Route::resource('/Produto','ProdutoController')->names('produto')->parameters(['Produto' => 'Produto']);
Route::resource('/Consumo','ConsumoController')->names('consumo')->parameters(['Consumo' => 'Consumo']);

Route::resource('/utilizador','UserController')->names('user')->parameters(['utilizador' => 'user']);
Route::get('/acomodacao','bedroomsController@index')->name('badroom.index');
Route::post('/acomodacao','bedroomsController@store')->name('badroom.store');
Route::put('/acomodacao/{bedroom}','bedroomsController@update')->name('bedroom.update');
Route::delete('/acomodacao/{bedroom}','bedroomsController@destroy')->name('bedroom.destroy');

Route::get('/perfil-hotel','AppController@myHotel')->name('myHotel.index');
