<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunkafelvevoTable extends Migration {

	public function up()
	{
		Schema::create('munkafelvevos', function(Blueprint $table) {
			$table->id();
			$table->char('azonosito', 6)->index();
			$table->string('nev', 100);
			$table->string('jelszo', 100);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('munkafelvevos');
	}
}