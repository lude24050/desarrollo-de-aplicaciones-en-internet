<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReparacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reparacions', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id_repa');
			$table->string('lugar');
			$table->date('fecha_inicio');
			$table->date('fecha_final');
			$table->integer('monto');
			$table->string('motivo');
			$table->string('ids_inventario');
			$table->string('borrado');
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
		Schema::drop('reparacions');
	}

}
