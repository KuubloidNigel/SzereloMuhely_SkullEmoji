<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnyagTable extends Migration {

	public function up()
	{
		Schema::create('anyags', function(Blueprint $table) {
			$table->id();
			$table->string('nev', 100);
			$table->integer('ar');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('anyags');
	}
}