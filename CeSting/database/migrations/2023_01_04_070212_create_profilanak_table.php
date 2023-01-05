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
        Schema::create('profilanak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anak_id');
            $table->foreign('anak_id')->references('id')->on('user')->onDelete('cascade');
            $table->string('nama_depan_anak')->nullable();
            $table->string('nama_belakang_anak')->nullable();
            $table->date('tanggal_lahir_anak')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('profilanak');
    }
};
