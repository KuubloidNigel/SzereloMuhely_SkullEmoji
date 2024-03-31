<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('munkalap', function (Blueprint $table) {
            $table->id();
            $table->char('szerelo_azonosito',6);
            $table->foreign('szerelo_azonosito')->references('azonosito')->on('szerelo')->onUpdate('cascade')->onDelete('cascade');
            $table->string('datum',10);
            $table->char('munkafelvevo_azonosito',6);
            $table->foreign('munkafelvevo_azonosito')->references('azonosito')->on('munkafelvevo')->onUpdate('cascade')->onDelete('cascade');
            $table->string('gepjarmu_rendszam',7);
            $table->foreign('gepjarmu_rendszam')->references('rendszam')->on('gepjarmu')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('lezart');
            $table->integer('osszar');
            $table->string('fizetesi_mod',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('munkalap');
    }
};
