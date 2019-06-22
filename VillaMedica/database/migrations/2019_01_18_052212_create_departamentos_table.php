<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departamentos', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id_depa');
			$table->integer('num_depa');
			$table->string('tipo');
			$table->integer('num_cochera');
			$table->integer('num_estaciona');
			$table->integer('num_torre');
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
		Schema::drop('departamentos');
	}

}
