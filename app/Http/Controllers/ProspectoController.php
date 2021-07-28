<?php

namespace App\Http\Controllers;

use App\Prospecto;
use App\Sexo;
use App\TipoPersona;
use Illuminate\Http\Request;

class ProspectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $sexos =  Sexo::all();
        $tiposPersona = TipoPersona::all();

        return view("index", ["sexos" => $sexos, "tiposPersona" => $tiposPersona]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validaciones
        $request->validate([
            "nombres" => "required",
            "apellidos" => "required",
            "correo" => ["required", "email", "unique:pg_prospectos"],
        ]);
        //
        Prospecto::create([
            "nombres" => $request->nombres,
            "apellidos" => $request->apellidos,
            "idsexo" => $request->idsexo,
            "fechanacimiento" => $request->fechanacimiento,
            "correo"=> $request->correo,
            "telefono" => $request->telefono,
            "idtipopersona" => $request->idtipopersona,
            "nombrecomercial" => $request->nombrecomercial,
            "website" => $request->website,
            "mensaje" => $request->mensaje,
        ]);

        return back();
    }

    
}
