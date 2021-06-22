<?php

use App\Http\Controllers\VoluntaryController;
use Illuminate\Support\Facades\Route;


use Illuminate\Routing\Console\MiddlewareMakeCommand;
use Illuminate\Support\Facades\Auth;





Route::get('/', 'PrincipalController@welcome');
Route::get('/administraplantilla', 'PrincipalController@adminlayout');
//Route::get('/about','PrincipalController@about' );

Route::get('/welcome','PrincipalController@welcome')->name('welcome');
Route::get('/nosotros', 'PrincipalController@nosotros')->name('nosotros');
Route::get('/actividad', 'PrincipalController@actividad')->name('actividad');


  Route::middleware(['isSuperAdmin', 'isAdmin'])->group(function () {
  Route::get('/asignarRol', 'UsuarioController@asignarRol')->name('usuario.asignarol');
  Route::get('/showrol/{id}', 'UsuarioController@showrol')->name('usuario.showrol');
  Route::post('/saverol', 'UsuarioController@saveRol')->name('usuario.saverol');
});


  Route::name('admin')->group(function () {
  Route::get('inventario','AdminController@inventario')->name('Admin.inventario');

});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//voluntariado
//Route::resource('/hasteamigo', 'amigoReq')->name('');
Route::get('/voluntario', 'VoluntaryController@index')->name('voluntary');
Route::get('/voluntario/create','VoluntaryController@create')->name('voluntary.create');
Route::post('/voluntario/create','VoluntaryController@store')->name('voluntary.store');
Route::get('/amigoReq', 'PrincipalController@amigoReq')->name('amigoReq');

Route::get('/voluntario/index', 'VoluntaryController@indexGus')->name('voluntary.index');
Route::get('/voluntario/createGus','VoluntaryController@createGus')->name('createGus');
Route::post('/voluntario/createGus','VoluntaryController@storeGus')->name('voluntary.storeGus');
Route::get('/voluntario/show/{id}', 'VoluntaryController@show')->name('voluntary.show');
Route::get('/voluntario/edit/{id}', 'VoluntaryController@edit')->name('voluntary.edit');
Route::put('/voluntario/update/{id}', 'VoluntaryController@update')->name('voluntary.update');
Route::delete('/voluntario/delete/{id}', 'VoluntaryController@destroy')->name('voluntary.destroy');
Route::get('/voluntario/guardar', 'VoluntaryController@guardar')->name('voluntary.guardar');

//Donaciones
Route::get('/donaciones', 'DonationController@index')->name('donation');
Route::get('/realizarDonaciones', 'PrincipalController@realizarDonaciones')->name('realizarDonaciones');
Route::get('/donaciones/create','DonationController@create')->name('donation.create');
Route::post('/donaciones/create','DonationController@store')->name('donation.store');
Route::get('/donaciones/show/{​​​​id}​​​​','DonationController@show')->name('donation.show');
Route::get('/donaciones/edit/{​​​​id}​​​​','DonationController@edit')->name('donation.edit');
Route::put('/donaciones/{​​​​id}​​​​','DonationController@update')->name('donation.update');
Route::delete('/donaciones/delete/{​​​​id}​​​​','DonationController@destroy')->name('donation.destroy');


//Reservaciones
Route::get('/reservaciones', 'ReservationController@index')->name('reservation');
Route::get('/reservaciones/create','ReservationController@create')->name('reservation.create');
Route::post('/reservaciones/create','ReservationController@store')->name('reservation.store');
Route::get('/reservaciones/index', 'ReservationController@index')->name('reservation.index');
Route::get('/reservaciones/show/{id}','ReservationController@show')->name('reservation.show');
Route::get('/reservaciones/edit/{id}','ReservationController@edit')->name('reservation.edit');
Route::put('/reservaciones/{​​id}​​','ReservationController@update')->name('reservation.update');
Route::delete('/reservaciones/delete/{id}', 'ReservationController@destroy')->name('reservation.destroy');


//Roles
Route::get('/asignarRol', 'UsuarioController@asignarRol')->name('usuario.asignarol');
Route::get('/showrol/{id}', 'UsuarioController@showrol')->name('usuario.showrol');
Route::post('/saverol', 'UsuarioController@saveRol')->name('usuario.saverol');

//Administracion

Route::get('/administracion','PrincipalController@administration')->name('administracion');


//Tiquete
Route::get('/tiquete/create','EntradaController@create')->name('tiquete.create');
Route::post('/tiquete/create','EntradaController@store')->name('tiquete.store');
Route::get('/tiquete/index', 'EntradaController@index')->name('tiquete.index');
Route::get('/tiquete/show/{id}', 'tiqueteController@show')->name('tiquete.show');
Route::get('/tiquete/edit/{id}', 'tiqueteController@edit')->name('tiquete.edit');
Route::put('/tiquete/update/{id}', 'tiqueteController@update')->name('tiquete.update');
Route::delete('/tiquete/delete/{id}', 'tiqueteController@destroy')->name('tiquete.destroy');
Route::get('/tiquete/PDF','EntradaController@createPDF');
Route::get('/tiquete/PDF/{id}','EntradaController@download');


//RUTA EGRESOS
Route::get('/egresos', 'ExpenseController@index')->name('expense');
Route::get('/egresos/create','ExpenseController@create')->name('expense.create');
Route::post('/egresos/create','ExpenseController@store')->name('expense.store');
Route::get('/egresos/index', 'ExpenseController@index')->name('expense.index');


//Give
Route::get('/give/index','giveController@index')->name('give.index');
Route::get('/give/create','giveController@create')->name('give.create');
Route::post('/give/create','giveController@store')->name('give.store');
Route::get('/give/show/{id}', 'giveController@show')->name('give.show');
Route::get('/give/edit/{id}','giveController@edit')->name('give.edit');
Route::put('/give/update/{id}','giveController@update')->name('give.update');
Route::delete('/give/delete/{id}','giveController@destroy')->name('give.destroy');