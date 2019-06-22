<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraordinariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extraordinarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->increments('id_extra');
			$table->string('num_recibo');
			$table->integer('monto');
			$table->date('fecha');
			$table->string('estado');
			$table->date('fecha_pago');
            $table->integer('monto_pago');
            $table->string('borrado');
			$table->integer('id_depa')->unsigned();
			$table->foreign('id_depa')->references('id_depa')->on('departamentos');
			$table->integer('id_repa')->unsigned();
			$table->foreign('id_repa')->references('id_repa')->on('reparacions');
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
        Schema::dropIfExists('extraordinarios');
    }
}
