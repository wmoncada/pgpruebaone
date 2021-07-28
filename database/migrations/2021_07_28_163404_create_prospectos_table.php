<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombres");
            $table->string("apellidos");
            $table->integer("idsexo");
            $table->date("fechanacimiento");
            $table->string("correo");
            $table->string("telefono");
            $table->integer("idtipopersona ");
            $table->string("nombrecomercial");
            $table->string("website");
            $table->text("mensaje");
            $table->dateTime("fecharegistro");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prospectos');
    }
}
