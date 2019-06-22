<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquilinosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inquilinos', function( $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id_inqui');
			$table->string('nombres');
			$table->string('apellidos');
			$table->integer('dni');
			$table->integer('telefono');
			$table->string('correo');
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
		Schema::drop('inquilinos');
	}

}
