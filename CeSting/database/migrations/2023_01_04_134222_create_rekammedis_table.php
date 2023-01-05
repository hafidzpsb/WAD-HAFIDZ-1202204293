<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rekammedis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rekam_id');
            $table->foreign('rekam_id')->references('id')->on('user')->onDelete('cascade');
            $table->integer('berat_janin')->nullable();
            $table->integer('berat_ibu')->nullable();
            $table->integer('panjang_janin')->nullable();
            $table->integer('detak_janin')->nullable();
            $table->integer('detak_ibu')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('rekammedis');
    }
};
