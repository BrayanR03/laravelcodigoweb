<?php

use Illuminate\Support\Facades\Route;

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


/* ===== PAGINA POR DEFECTO DE LARAVEL=== */
/*
Route::get('/', function () {
    return view('welcome');
});*/

/*==RUTAS BASICA DE PRUEBA sin parametros== */
/*===PRUEBA 01== 
Route::get('/',function(){
    return '¡Hola Mundo desde Laravel!';
});*/

/*==PRUEBA 02== 
Route::get('persona/nuevo',function(){
    return 'Hola Mundo desde Laravel';
});*/

/*===PRUEBA 03== 
Route::post('persona/nuevo',function(){
    return 'Hola Mundo desde Laravel';
});*/

/*===PRUEBA 04== 
Route::put('persona/nuevo',function(){
    
});*/

/*===PRUEBA 05== 
Route::delete('persona/borrar',function(){
    
});*/

/*==PRUEBA 06== 
Route::match(array('GET','POST'),'/',function(){
    return 'Hola Mundo desde Laravel';
});*/

/*================================================== */

/*CON PARAMETROS__CUANDO ASIGNAMOS UN PARAMETRO A LA RUTA CON EL ( / )  *//*
Route::get('persona/{id}',function($id){
    return 'Persona: '.$id;
});*/

/*PARAMETRO OPCIONAL _parametro null*/
/*Route::get('persona/{nombre?}',function($nombre=null){
    return 'Persona: '.$nombre;
});*/

/*===PARAMETRO OPCONAL_parametro con valor por defecto
Route::get('persona/{nombre?}',function($nombre='Brayan'){
    return 'Persona: '.$nombre;
});*/

/* RESTRICCIONES EN CUANTO A VALOR DE PARAMETRO >>>_LETRAS_NUMEROS<<<  */

/*SOLO LETRAS */
/*
Route::get('persona/{nombre?}',function($nombre=null){
    return 'Persona: '.$nombre;
})

->where('nombre','[A-Za-z]+');*/

/*SOLO NUMEROS 
Route::get('persona/{id?}',function($id){
    return 'Identificador: '.$id;
})

->where('id','[0-9]+');*/

/*====VARIOS PARAMETROS==== 
Route::get('persona/{id}/{nombre}',function($id,$nombre){
    return 'IDENTIFICADOR: '.$id.'<br>'.'NOMBRE:  '.$nombre;
})
->where(array('id'=>'[0-9]+','nombre'=>'[A-Za-z]+'));*/
/*======MOSTRAR 
Route::get('/', function () {
    return view('home',array('nombre'=> 'Brayan Rafael'));
});*/
/*====_____DATOS A UNA VISTA
Route::get('register', function () {
    return view('usuario.login');
});*/

/*
Route::get('usuario/ajustes/{id}', function ($id) {
    $view=view('usuario.ajustes')
    ->with('id',$id);
    return $view;
});*/
/*
Route::get('usuario/ajustes/{id}', function ($id) {
    $view=view('usuario.ajustes')
    ->with('nombre','Brayan Neciosup Bolaños');
    return $view;
});*/
/*
Route::get('usuario/ajustes/{id}', function ($id) {
    $view=view('usuario.ajustes')
    ->with('id',$id)
    ->with('nombre','Rafael Bolaños')
    ->with('editor',true);
    return $view;
});*/
/*
Route::get('/',function(){
    return view('hola')->with('name','Brayan');
});*/

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::resource('servicios','App\Http\Controllers\ServiciosController')->names('servicios');

/*
Route::get('servicios','App\Http\Controllers\ServiciosController@index')->name('servicios.index');
Route::get('servicios/crear','App\Http\Controllers\ServiciosController@create')->name('servicios.create');


Route::get('servicios/{id}/editar','App\Http\Controllers\ServiciosController@edit')->name('servicios.edit');
Route::patch('servicios/{servicios}','App\Http\Controllers\ServiciosController@update')->name('servicios.update');


Route::post('servicios','App\Http\Controllers\ServiciosController@store')->name('servicios.store');




Route::get('servicios/{id}','App\Http\Controllers\ServiciosController@show')->name('servicios.show');

Route::delete('servicios/{servicios}','App\Http\Controllers\ServiciosController@destroy')->name('servicios.destroy');
Route::view('contacto','contacto');
Route::post('contacto','App\Http\Controllers\ContactosController@store')->name('contactos.store');
*/
/*
Route::resource('servicios','Servicios2Controller');
*/





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register'=>false]);




