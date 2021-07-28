<?php

namespace App\Http\Controllers;

use App\Moneda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConversionController extends Controller
{
    //
    public function index()
    {
        $monedas = Moneda::all();

        return view("conversion", ["monedas" => $monedas]);
    }

    public function getId($id_moneda)
    {
        $moneda = DB::table('pg_moneda')
        ->where('id_moneda', '=', $id_moneda)
        ->get()->toJson();

        echo $moneda;
    }
}
