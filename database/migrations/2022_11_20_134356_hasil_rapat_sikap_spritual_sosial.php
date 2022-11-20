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
        Schema::create('hasil_rapat_sikap_spritual_sosial', function (Blueprint $table) {
            $table->id('id_hasil');
            $table->integer('id_kelas');
            $table->integer('id_tahun_ajaran');
            $table->integer('nisn_siswa');
            $table->string('hasil_rapat');
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
        Schema::dropIfExists('hasil_rapat_sikap_spritual_sosial');
    }
};
