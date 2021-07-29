<?php

namespace App\Http\Controllers;

use App\Moneda;
use App\MonedaLog;
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

    public function list()
    {
        $monedas = Moneda::all();

        return view("list", ["monedas" => $monedas]);
    }

    public function edit($id)
    {
        $moneda = Moneda::where("id_moneda", "=", $id)->firstOrFail();

        return view('edit', compact('moneda'));
    }

    public function store(Request $request)
    {
        DB::table("pg_moneda")
                    ->where("id_moneda", $request->id_moneda)
                    ->update([
                        "simbolo" => $request->simbolo,
                        "nombre" => $request->nombre,
                        "valor_cambio" => $request->valor_cambio,
                        "pais" => $request->pais,
                    ]);

        MonedaLog::create([
            "id_moneda" => $request->id_moneda,
            "nombre" => $request->nombre,
            "simbolo" => $request->simbolo,
            "valor_cambio" => $request->valor_cambio,
            "pais" => $request->pais,
        ]);


        return back()->with('status', 'Datos Guardados con éxito');
    }

    public function log($id)
    {
        $logs = MonedaLog::oldest()
                    ->where("id_moneda","=",$id)
                    ->get();

        return view("log", ["logs" => $logs]);
    }

    public function getId($id_moneda)
    {
        $moneda = DB::table('pg_moneda')
        ->where('id_moneda', '=', $id_moneda)
        ->get()->toJson();

        echo $moneda;
    }
}
