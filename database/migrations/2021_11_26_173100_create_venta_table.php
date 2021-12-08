<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->Bigincrements('ventas_id');
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('producto_id')->on('producto');
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('tipo_id')->on('tipodeproducto');
            $table->float('cantidad', 10);
            $table->decimal('total', 11, 2);
            $table->decimal('cambio', 20);
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
        Schema::dropIfExists('venta');
    }
}
