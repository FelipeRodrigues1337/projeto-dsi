<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registros', function(Blueprint $table)
		{
			$table->engine = 'MYISAM';
			$table->increments('id_registro', true);
			$table->unsignedBigInteger('id_maquina');
			$table->foreign('id_maquina')->references('id_maquina')->on('maquinas');
			$table->string('descricao_problema');
			$table->string('estado_manutencao');
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
		Schema::drop('registros');
	}

}
