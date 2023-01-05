<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('catattumbuh', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anak_id');
            $table->foreign('anak_id')->references('anak_id')->on('profilanak')->onDelete('cascade');
            $table->integer('tinggi_badan_anak')->nullable();
            $table->integer('berat_badan_anak')->nullable();
            $table->integer('lingkar_kepala_anak')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('catattumbuh');
    }
};
