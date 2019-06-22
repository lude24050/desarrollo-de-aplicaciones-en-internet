<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventarios', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id_inve');
			$table->string('tipo');
			$table->string('nombre');
			$table->integer('cantidad');
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
		Schema::drop('inventarios');
	}

}
