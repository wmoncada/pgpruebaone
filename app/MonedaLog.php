<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonedaLog extends Model
{
    //
    protected $table = 'pg_moneda_log';
    protected $fillable = ["id_moneda","nombre","simbolo","valor_cambio","pais"];

}
