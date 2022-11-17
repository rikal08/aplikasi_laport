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
        Schema::create('nilai_mapel_k13', function (Blueprint $table) {
            $table->id('id_nilai');
            $table->integer('id_kelas');
            $table->integer('id_tahun_ajaran');
            $table->integer('id_guru');
            $table->integer('id_mapel');
            $table->integer('nisn_siswa');
            $table->string('nilai_peng');
            $table->string('nilai_prak');
            $table->string('nilai_sikap');
            $table->text('des_peng');
            $table->text('des_prak');
            $table->text('des_sikap');
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
        Schema::dropIfExists('nilai_mapel_k13');
    }
};
