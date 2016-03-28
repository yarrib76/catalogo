<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articulos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('cod_articulo');
            $table->string('descripcion');
            $table->string('image_name_1');
            $table->string('image_name_2');
            $table->string('image_name_3');
            $table->string('caracteristica_1');
            $table->string('caracteristica_2');
            $table->string('caracteristica_3');
            $table->integer('orden');
            $table->integer('submenu_id')->unsigned();
            $table->foreign('submenu_id')->references('id')->on('sub_menus')->onDelete('cascade');
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
		Schema::drop('articulos');
	}

}
