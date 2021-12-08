<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigincrements('proveedores_id');
            $table->string('nombre_empresa');
            $table->string('nombre');
            $table->integer('nit');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->integer('ci');
            $table->integer('edad');
            $table->string('direccion');
            $table->string('email');
            $table->string('ciudad');
            $table->integer('telefono');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
