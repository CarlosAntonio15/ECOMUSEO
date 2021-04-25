<?php

use App\Http\Controllers\VoluntaryController;
use Illuminate\Support\Facades\Route;


use Illuminate\Routing\Console\MiddlewareMakeCommand;
use Illuminate\Support\Facades\Auth;





Route::get('/', 'PrincipalController@welcome');
//Route::get('/about','PrincipalController@about' );

Route::get('/welcome','PrincipalController@welcome')->name('welcome');
Route::get('/nosotros', 'PrincipalController@nosotros')->name('nosotros');
Route::get('/actividad', 'PrincipalController@actividad')->name('actividad');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ADMIN
Route::get('/layout','AdminController@inicio')->name('Admin.inicio');
Route::get('/inventario','AdminController@inventario')->name('Admin.inventario');
Route::get('/usuarios','AdminController@usuarios')->name('Admin.usuarios');
Route::get('/editarUsuario/{data}','AdminController@editarUsuario')->name('Admin.editarUsuario');
Route::put('/editarUsuario/{data}','AdminController@actualizarUsuario')->name('Admin.actualizarUsuario');
Route::get('/actividades','AdminController@actividades')->name('Admin.Actividades');
Route::post('/actividades', 'AdminController@crearActividades')->name('Actividades.crearActividad');
Route::get('/editarActividad/{CodActividad}', 'AdminController@editarActividad')->name('Admin.editarActividad');
Route::put('/editarActividad/{CodActividad}', 'AdminController@actualizarActividad')->name('Actividades.actualizarActividad');
Route::get('/eliminar/{CodActividad}', 'AdminController@eliminarActividad')->name('Actividades.eliminarActividad');
Route::get('/crear','AdminController@crear')->name('Admin.crear');
Route::post('/crear', 'AdminController@crearActivades')->name('Actividades.crearActividades');


//auth
Route::get('/edit/{data}','UserController@edit')->name('auth.edit');

Route::get('/edit/{data}','UserController@edit')->name('auth.edit');
Route::put('/edit/{data}','UserController@update')->name('auth.update');
Route::get('/destroy/{data}','UserController@destroy')->name('user.destroy');
Route::get('/event','AdminController@evento')->name('evento');
Route::get('/asistencia', 'TblasistenciaController@Asistencia')->name('Usuario.asistencia');
Route::get('/asistenciauser', 'TblasistenciaController@AsistenciaUser')->name('Usuario.asistUser');
Route::post('/asistencia', 'TblasistenciaController@create')->name('asistencia.crearAsistencia');


Route::get('/asistenciaU', 'TblasistenciaController@UsuarioAsist')->name('Usuario.UsuarioAsist');


Route::get('/crearAsistencia/{CodEvento}','TblasistenciaController@crearAsistencia')->name('Usuario.crearAsistencia');
Route::post('/crearAsistencia', 'TblasistenciaController@Crear')->name('asistencia.crearAsist');

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

//Give
Route::get('/give/index','giveController@index')->name('give.index');
Route::get('/give/create','giveController@create')->name('give.create');
Route::post('/give/create','giveController@store')->name('give.store');



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



//Income
Route::get('/ingresos', 'IncomeController@index')->name('income');
Route::get('/ingresos/create','IncomeController@create')->name('income.create');
Route::post('/ingresos/create','IncomeController@store')->name('income.store');

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





//SI FUNCIONA
Route::get('hola', function(){
    return view('layout');
});


//Route::post('/', );
//Route::get('/', funtion(){
  //  return view('layout');
//});
Route::resource('/galeria','InformationController');
Route::resource('/crear','InformationController@create');
// Rutas CRUD
 
/* Crear */
Route::get('admin/information/create', 'InformationController@create')->name('admin/information/create');
Route::put('admin/information/store', 'InformationController@store')->name('admin/information/store');
 
/* Leer */
Route::get('/information', 'InformationController@index')->name('/information');
 
/* Actualizar */
Route::get('admin/information/edit/{id}', 'InformationController@edit')->name('admin/information/edit');
Route::put('admin/information/update/{id}', 'InformationController@update')->name('admin/information/update');
 
/* Eliminar */
Route::put('admin/information/delete/{id}', 'InformationController@delete')->name('admin/information/delete');
 
/* Eliminar imagen de un registro */
Route::get('admin/information/deleteimage/{id}{bid}', 'InformationController@deleteimage')->name('admin/information/deleteimage');
 
/* Vista para los detalles de un registro */
Route::get('admin/information/details/{id}', ['as' => 'admin/information/details', 'uses' => 'InformationController@details']);



route::view('/app', 'layouts.app');

//Route::resource ('/voluntariado', 'Voluntary.index');

