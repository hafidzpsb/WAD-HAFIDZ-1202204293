<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('forum', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('forum_id');
            $table->foreign('forum_id')->references('id')->on('user')->onDelete('cascade');
            $table->string('username');
            $table->string('judul_forum');
            $table->longText('isi_forum');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('forum');
    }
};
