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

use App\Sexo;
/*
Route::get('/', function () {
    return view('index');
});
*/

Route::get("/","ProspectoController@index","prospecto.index");
Route::post("/prospecto", "ProspectoController@store")->name("prospecto.store");
// probando los datos
Route::get("datos", function(){
    $sexos = Sexo::all();

    dd($sexos->toJson());

});
