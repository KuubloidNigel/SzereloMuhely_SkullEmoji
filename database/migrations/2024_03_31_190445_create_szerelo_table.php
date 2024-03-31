<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSzereloTable extends Migration {

	public function up()
	{
		Schema::create('szerelo', function(Blueprint $table) {
			$table->char('azonosito', 6)->primary();
			$table->string('nev', 10);
			$table->string('jelszo', 10);
		});
	}

	public function down()
	{
		Schema::drop('szerelo');
	}
}