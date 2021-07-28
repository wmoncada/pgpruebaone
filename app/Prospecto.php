<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospecto extends Model
{
    //
    public $timestamps = false;
    protected $table = 'pg_prospectos';
    protected $fillable = ['nombres', "apellidos","idsexo","fechanacimiento","correo"
    ,"telefono","idtipopersona", "nombrecomercial", "website","mensaje"];
}
