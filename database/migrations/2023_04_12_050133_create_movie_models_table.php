<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 4)->unique();
            $table->string('judul', 100)->nullable();
            $table->string('genre', 20)->nullable();
            $table->string('sutradara', 50)->nullable();
            $table->string('durasi', 20)->nullable();
            $table->date('tanggal_rilis')->nullable();
            $table->string('rating', 10)->nullable();
            $table->string('jam_tayang', 50)->nullable();
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
        Schema::dropIfExists('movie');
    }
};
