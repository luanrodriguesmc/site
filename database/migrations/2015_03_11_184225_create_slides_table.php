<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slides', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('imgUrl','200');
            $table->string('titulo','100');
            $table->string('descricao','200');
            $table->string('botao','1');
            $table->string('botaoUrl','200');
            $table->string('ordem','2');
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
		Schema::drop('slides');
	}

}
