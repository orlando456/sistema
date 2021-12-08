<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->bigincrements('inventario_id');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('producto_id')->on('producto');
            $table->unsignedBigInteger('compras_id');
            $table->foreign('compras_id')->references('compras_id')->on('compra');
            $table->unsignedBigInteger('ventas_id');
            $table->foreign('ventas_id')->references('ventas_id')->on('ventas');
          
           
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
        Schema::dropIfExists('inventario');
    }
}
