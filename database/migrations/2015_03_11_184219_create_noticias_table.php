<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('noticias', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('slug','200');
            $table->string('indexTitulo','100');
            $table->string('indexDescricao','100');
            $table->string('titulo','200');
            $table->longtext('descricao','200');
            $table->string('botao','1');
            $table->string('cor','30');
            $table->string('icone','50');
            $table->string('status','1');
			$table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('noticias');
	}

}
