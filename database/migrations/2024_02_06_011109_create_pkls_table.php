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
        Schema::create('pkls', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->foreignId('id_siswa')->constrained('siswas');
            $table->foreignId('id_dudi')->constrained('dudis');
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
        Schema::dropIfExists('pkls');
    }
};
