<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTulajdonosTable extends Migration {

	public function up()
	{
		Schema::create('tulajdonos', function(Blueprint $table) {
			$table->id();
			$table->string('nev', 100);
			$table->string('cim', 30);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('tulajdonos');
	}
}