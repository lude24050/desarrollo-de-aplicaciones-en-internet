<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empleados', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id_emple');
			$table->string('nombres');
			$table->string('apellidos');
			$table->string('dni');
			$table->integer('telefono');
			$table->string('correo');
			$table->string('tipo_trabajador');
			$table->string('subsidio');
			$table->string('domicilio');
			$table->string('seccion_trabajo');
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
		Schema::drop('empleados');
	}

}
