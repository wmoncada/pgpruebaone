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

use App\Moneda;
use App\Sexo;
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\DB;

/*
Route::get('/', function () {
    return view('index');
});
*/

Route::get("/","ProspectoController@index","prospecto.index");
Route::post("/prospecto", "ProspectoController@store")->name("prospecto.store");

// Rutas para la conversion
Route::get("/conversiones", "ConversionController@index")->name("conversion.index");
Route::get("/conversiones/{id}", "ConversionController@getId")->name("conversion.getId");
Route::get("/lista", "ConversionController@list")->name("conversion.list");
Route::get("/conversiones/{id}/edit", "ConversionController@edit")->name("conversion.edit");
Route::post("/conversiones","ConversionController@store")->name("conversion.store");
Route::get("log/{id}","ConversionController@log")->name("conversion.log");

// probando los datos
Route::get("datos", function(){
    $sexos = Sexo::all();

    dd($sexos->toJson());

});
