<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlkatreszTable extends Migration {

	public function up()
	{
		Schema::create('alkatresz', function(Blueprint $table) {
			$table->id();
			$table->string('nev', 10);
			$table->integer('ar');
		});
	}

	public function down()
	{
		Schema::drop('alkatresz');
	}
}