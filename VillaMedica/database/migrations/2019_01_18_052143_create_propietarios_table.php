<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('propietarios', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id_pro');
			$table->string('nombres');
			$table->string('apellidos');
			$table->string('dni');
			$table->string('telefono');
			$table->integer('num_mascotas');
			$table->integer('num_familiares');
			$table->string('nombre_carpeta');
			$table->string('borrado');
			$table->integer('id_usuario')->unsigned();
			$table->foreign('id_usuario')->references('id')->on('users');
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
		Schema::drop('propietarios');
	}

}
