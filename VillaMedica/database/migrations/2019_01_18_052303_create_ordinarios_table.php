<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdinariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ordinarios', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id_ordi');
			$table->string('num_recibo');
			$table->integer('monto');
			$table->date('fecha');
			$table->string('estado');
			$table->date('fecha_pago');
			$table->integer('monto_pago');
			$table->string('borrado');
			$table->integer('id_depa')->unsigned();
			$table->foreign('id_depa')->references('id_depa')->on('departamentos');
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
		Schema::drop('ordinarios');
	}

}
