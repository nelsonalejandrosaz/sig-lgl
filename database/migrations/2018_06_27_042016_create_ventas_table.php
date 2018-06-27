<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_documento_id')->unsigned();
            $table->integer('estado_venta_id')->unsigned();
            $table->integer('cliente_id')->unsigned()->nullable();
            $table->integer('vendedor_id')->unsigned()->nullable();
            $table->integer('condicion_pago_id')->unsigned()->nullable();
            $table->string('numero')->nullable();
            $table->date('fecha');
            $table->decimal('suma', 16, 4);
            $table->decimal('iva', 16, 4);
            $table->decimal('total', 16, 4);
            $table->decimal('saldo', 16, 4);
            $table->date('fecha_anulado')->nullable();
            $table->date('fecha_liquidado')->nullable();
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
        Schema::dropIfExists('ventas');
    }
}
