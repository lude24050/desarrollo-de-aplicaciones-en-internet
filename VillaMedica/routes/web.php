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
    return view('index');
});

//Para el Login y registro al Sistema
//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

//Propietarios
Route::get('/propietario/listarPro','PropietarioController@listarPro');
Route::get('/propietario/crearPro','PropietarioController@crearPro');
Route::post('/propietario/creandoPro','PropietarioController@creandoPro');
Route::get('/propietario/mostrarPro/{id}','PropietarioController@mostrarPro');
Route::delete('/propietario/borrarPro/{id}','PropietarioController@borrarPro');
Route::get('/propietario/editarPro/{id}','PropietarioController@editarPro');
Route::post('/propietario/editandoPro','PropietarioController@editandoPro');

//Cuotas Ordinarias
Route::get('/cuota/listarOrdi','CuotaController@listarOrdi');
Route::get('/cuota/crearOrdi/{id}','CuotaController@crearOrdi');
Route::post('/cuota/creandoOrdi','CuotaController@creandoOrdi');
Route::get('/cuota/editarOrdi/{id}','CuotaController@editarOrdi');
Route::post('/cuota/editandoOrdi/{id}','CuotaController@editandoOrdi');
Route::get('/cuota/mostrarOrdi/{id}','CuotaController@mostrarOrdi');
Route::delete('/cuota/borrarOrdi/{id}','CuotaController@borrarOrdi');

//Cuotas Extraordinarias
Route::get('/cuota/listarExtra','CuotaController@listarExtra');
Route::get('/cuota/crearExtra/{id}','CuotaController@crearExtra');
Route::post('/cuota/creandoExtra','CuotaController@creandoExtra');
Route::get('/cuota/editarExtra/{id}','CuotaController@editarExtra');
Route::post('/cuota/editandoExtra/{id}','CuotaController@editandoExtra');
Route::get('/cuota/mostrarExtra/{id}','CuotaController@mostrarExtra');
Route::delete('/cuota/borrarExtra/{id}','CuotaController@borrarExtra');

//Egresos
Route::get('/egreso/listarEgre','EgresoController@listarEgre');
Route::get('/egreso/crearEgre','EgresoController@crearEgre');
Route::post('/egreso/creandoEgre','EgresoController@creandoEgre');
Route::get('/egreso/mostrarEgre/{id}','EgresoController@mostrarEgre');
Route::get('/egreso/editarEgre/{id}','EgresoController@editarEgre');
Route::post('/egreso/editandoEgre','EgresoController@editandoEgre');
Route::delete('/egreso/borrarEgre/{id}','EgresoController@borrarEgre');

//Ingresos
Route::get('/ingreso/listarIngre','IngresoController@listarIngre');
Route::get('/ingreso/crearIngre','IngresoController@crearIngre');
Route::post('/ingreso/creandoIngre','IngresoController@creandoIngre');
Route::get('/ingreso/mostrarIngre/{id}','IngresoController@mostrarIngre');
Route::get('/ingreso/editarIngre/{id}','IngresoController@editarIngre');
Route::post('/ingreso/editandoIngre','IngresoController@editandoIngre');
Route::delete('/ingreso/borrarIngre/{id}','IngresoController@borrarIngre');

//Empleados
Route::get('/empleado/listarEmple','EmpleadoController@listarEmple');
Route::get('/empleado/crearEmple','EmpleadoController@crearEmple');
Route::post('/empleado/creandoEmple','EmpleadoController@creandoEmple');
Route::get('/empleado/mostrarEmple/{id}','EmpleadoController@mostrarEmple');
Route::get('/empleado/editarEmple/{id}','EmpleadoController@editarEmple');
Route::post('/empleado/editandoEmple','EmpleadoController@editandoEmple');
Route::delete('/empleado/borrarEmple/{id}','EmpleadoController@borrarEmple');

//Departamentos
Route::get('/departamento/listarDepa','DepartamentoController@listarDepa');
Route::get('/departamento/crearDepa','DepartamentoController@crearDepa');
Route::post('/departamento/creandoDepa','DepartamentoController@creandoDepa');
Route::get('/departamento/mostrarDepa/{id}','DepartamentoController@mostrarDepa');
Route::get('/departamento/editarDepa/{id}','DepartamentoController@editarDepa');
Route::post('/departamento/editandoDepa','DepartamentoController@editandoDepa');
Route::delete('/departamento/borrarDepa/{id}','DepartamentoController@borrarDepa');

//Usuarios 
Route::get('/usuario/listarUsu','UsuarioController@listarUsu');
Route::get('/usuario/crearUsu','UsuarioController@crearUsu');
Route::post('/usuario/creandoUsu','UsuarioController@creandoUsu');
Route::get('/usuario/mostrarUsu/{id}','UsuarioController@mostrarUsu');
Route::get('/usuario/editarUsu/{id}','UsuarioController@editarUsu');
Route::post('/usuario/editandoUsu','UsuarioController@editandoUsu');
Route::delete('/usuario/borrarUsu/{id}','UsuarioController@borrarUsu');


//Pagos 
Route::get('/pago/listarPago','PagoController@listarPago');
Route::get('/pago/crearPago','PagoController@crearPago');
Route::post('/pago/creandoPago','PagoController@creandoPago');
Route::get('/pago/mostrarPago/{id}','PagoController@mostrarPago');
Route::get('/pago/editarPago/{id}','PagoController@editarPago');
Route::post('/pago/editandoPago','PagoController@editandoPago');
Route::delete('/pago/borrarPago/{id}','PagoController@borrarPago');


//Autos
Route::get('/auto/listarAuto','AutoController@listarAuto');
Route::get('/auto/crearAuto','AutoController@crearAuto');
Route::post('/auto/creandoAuto','AutoController@creandoAuto');
Route::get('/auto/mostrarAuto/{id}','AutoController@mostrarAuto');
Route::get('/auto/editarAuto/{id}','AutoController@editarAuto');
Route::post('/auto/editandoAuto','AutoController@editandoAuto');
Route::delete('/auto/borrarAuto/{id}','AutoController@borrarAuto');

//Reparaciones 
Route::get('/reparacion/listarRepa','ReparacionController@listarRepa');
Route::get('/reparacion/crearRepa','ReparacionController@crearRepa');
Route::post('/reparacion/creandoRepa','ReparacionController@creandoRepa');
Route::get('/reparacion/mostrarRepa/{id}','ReparacionController@mostrarRepa');
Route::get('/reparacion/editarRepa/{id}','ReparacionController@editarRepa');
Route::post('/reparacion/editandoRepa','ReparacionController@editandoRepa');
Route::delete('/reparacion/borrarRepa/{id}','ReparacionController@borrarRepa');

//Inquilinos
Route::get('/inquilino/listarInqui','InquilinoController@listarInqui');
Route::get('/inquilino/crearInqui','InquilinoController@crearInqui');
Route::post('/inquilino/creandoInqui','InquilinoController@creandoInqui');
Route::get('/inquilino/mostrarInqui/{id}','InquilinoController@mostrarInqui');
Route::get('/inquilino/editarInqui/{id}','InquilinoController@editarInqui');
Route::post('/inquilino/editandoInqui','InquilinoController@editandoInqui');
Route::delete('/inquilino/borrarInqui/{id}','InquilinoController@borrarInqui');

//Inventario
Route::get('/inventario/listarInve','InventarioController@listarInve');
Route::get('/inventario/crearInve','InventarioController@crearInve');
Route::post('/inventario/creandoInve','InventarioController@creandoInve');
Route::get('/inventario/mostrarInve/{id}','InventarioController@mostrarInve');
Route::get('/inventario/editarInve/{id}','InventarioController@editarInve');
Route::post('/inventario/editandoInve','InventarioController@editandoInve');
Route::delete('/inventario/borrarInve/{id}','InventarioController@borrarInve');

//Deudores
Route::get('/deudores/listarDeudores','CuotaController@deudores');

//Vista Empleado
Route::get('/infoEmple/{id}','EmpleadoController@empleado');

//Vista Propietario
Route::get('/infoPro/{id}','PropietarioController@propietario');

