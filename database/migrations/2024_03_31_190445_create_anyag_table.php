<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnyagTable extends Migration {

	public function up()
	{
		Schema::create('anyag', function(Blueprint $table) {
			$table->id();
			$table->string('nev', 10);
			$table->integer('ar');
		});
	}

	public function down()
	{
		Schema::drop('anyag');
	}
}