<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesInternosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes_internos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string("nombre");
            $table->string("sr");
            $table->string("domicilio");
            $table->string("localidad");
            $table->string("provincia");
            $table->string("cond_venta");
            $table->string("cuit");
            $table->string("telefono");
            $table->string("transporte");
            $table->string("observaciones");
            $table->timestamps();
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');

        });
	}

	/**
	 * Reverse the migrations.
	 *rr
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientes_internos');
	}

}
