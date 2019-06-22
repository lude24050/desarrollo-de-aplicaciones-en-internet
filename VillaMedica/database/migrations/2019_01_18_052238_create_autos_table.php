<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('autos', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id_auto');
			$table->string('marca');
			$table->string('ano');
			$table->string('modelo');
			$table->string('placa');
			$table->string('color');
			$table->string('borrado');
			$table->integer('id_pro')->unsigned();
			$table->foreign('id_pro')->references('id_pro')->on('propietarios');
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
		Schema::drop('autos');
	}

}
