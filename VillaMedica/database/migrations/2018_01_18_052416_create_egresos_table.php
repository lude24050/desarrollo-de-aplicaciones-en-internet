<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgresosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('egresos', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id_egre');
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
		Schema::drop('egresos');
	}

}
