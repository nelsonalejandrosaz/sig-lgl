<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unidad_medida_id')->unsigned();
            $table->integer('tipo_producto_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->string('nombre')->unique()->index();
            $table->string('codigo',50)->unique()->nullable();
            $table->float('cantidad_existencia',12,4)->default(0.000);
            $table->float('costo')->default(0.00);
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
        Schema::dropIfExists('productos');
    }
}
