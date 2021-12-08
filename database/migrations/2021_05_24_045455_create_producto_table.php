<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigincrements('producto_id');
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('tipo_id')->on('tipodeproducto');
            $table->unsignedBigInteger('proveedores_id');
            $table->foreign('proveedores_id')->references('proveedores_id')->on('proveedores');
            $table->string('nombre', 50);
            $table->string('marca');
            $table->float('precio_venta');
            $table->string('talla');
            $table->string('color');
            $table->integer('stock');
            $table->string('descripcion');
        
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
        Schema::dropIfExists('producto');
    }
}
