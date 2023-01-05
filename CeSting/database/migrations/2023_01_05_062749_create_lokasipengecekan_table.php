<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lokasipengecekan', function (Blueprint $table) {
            $table->id();
            $table->string('rumah_sakit');
            $table->decimal('long', 10, 7);
            $table->decimal('lat', 10, 7);
            $table->timestamps();            
        });
        DB::table('lokasipengecekan')->insert(
            array(
                'rumah_sakit' => 'RSIA Trinanda',
                'long' => -6.906429,
                'lat' => 107.611667
            )
        );
    }
    public function down()
    {
        Schema::dropIfExists('lokasipengecekan');
    }
};
