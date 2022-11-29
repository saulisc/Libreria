<?php

use App\Http\Controllers\ControladorVistas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorBD;


//rutas para resource
//create 
Route::get('recuerdo/create', [controladorBD::class,'create']) -> name('recuerdo.create');

//store
Route::post('recuerdo', [controladorBD::class,'store']) -> name('recuerdo.store');
//index
Route::get('recuerdo', [controladorBD::class,'index']) -> name('recuerdo.index');
//edit
Route::get('/recuerdo/{id}/edit', [controladorBD::class,'edit']) -> name('recuerdo.edit');
//update
Route::put('recuerdo/{id}', [controladorBD::class,'update']) -> name('recuerdo.update');
//delete
Route::get('recuerdo/{id}/delete', [controladorBD::class,'delete']) -> name('recuerdo.delete');
//delete
Route::delete('recuerdo/{id}', [controladorBD::class,'destroy']) -> name('recuerdo.destroy');





/* esto es pasadoo*/
//se tiene que importar la ruta para poder utilizar el controlador 
Route::get('home', [ControladorVistas::class,'showHome']) -> name('home');
//Route::get('ingresar', [ControladorVistas::class,'showIngresar']) -> name('ingresar');
//Route::get('recuerdos', [ControladorVistas::class,'showRecuerdos']) -> name('recuerdos');

//REQUEST POR POST
//Route::post('guardarRecuerdo', [ControladorVistas::class,'procesarRecuerdo']) -> name('SaveReq');




//APUNTES

//rutas agrupadas tipo controlador 
/*Route::controller(ControladorVistas::class)->group(
    function (){
        Route::get('home', 'showHome') -> name('casa');
        Route::get('ingresar','showIngresar') -> name('in');
        Route::get('recuerdos','showRecuerdos') -> name('rec');
    }
);*/


/*
Route::get('home', function (){
    return view ('home');
});*/
/*
Route::view('/','welcome');
Route::view('home','home') -> name('casa');
Route::view('ingresar','ingresar') -> name('in');
Route::view('recuerdos','recuerdos') -> name('rec');
*/

