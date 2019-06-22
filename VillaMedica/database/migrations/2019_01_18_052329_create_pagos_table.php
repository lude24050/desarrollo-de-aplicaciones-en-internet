<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagos', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id_pago');
			$table->string('num_recibo');
			$table->integer('monto');
			$table->date('fecha');
			$table->string('reportes');
			$table->string('borrado');
			$table->integer('id_emple')->unsigned();
			$table->foreign('id_emple')->references('id_emple')->on('empleados');
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
		Schema::drop('pagos');
	}

}
