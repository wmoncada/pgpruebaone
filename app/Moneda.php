<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    //
    public $timestamps = false;
    protected $table = 'pg_moneda';
    protected $fillable = ["nombre","simbolo","valor_cambio","pais"];

    
}
