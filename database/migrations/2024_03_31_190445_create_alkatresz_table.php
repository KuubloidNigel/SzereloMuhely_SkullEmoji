<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlkatreszTable extends Migration {

	public function up()
	{
		Schema::create('alkatreszs', function(Blueprint $table) {
			$table->id();
			$table->string('nev', 100);
			$table->integer('ar');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('alkatreszs');
	}
}