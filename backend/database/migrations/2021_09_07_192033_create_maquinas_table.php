<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaquinasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('maquinas', function(Blueprint $table)
		{
			$table->engine = 'MYISAM';
			$table->increments('id_maquina', true);
			$table->string('gabinete');
			$table->string('identificador');
			$table->string('nomeCliente', 99)->nullable();
			$table->timestamps();
			$table->unsignedBigInteger('setor_id_setor');
			$table->foreign('setor_id_setor')->references('id_setor')->on('setors');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('maquinas');
	}

}
