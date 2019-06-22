<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingresos', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id_ingre');
			$table->string('num_recibo');
			$table->string('nombre');
			$table->string('detalles');
			$table->integer('monto');
			$table->date('fecha');
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
		Schema::drop('ingresos');
	}

}
