<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->date('data');
            $table->integer('vagas')->nullable();
            $table->string('local')->nullable();
            $table->text('descricao')->nullable();
            $table->integer('admin_id')->unsigned();
    		$table->foreign('admin_id')->references('id')->on('users');
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
		Schema::drop('eventos');
	}

}
