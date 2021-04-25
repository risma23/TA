<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_models', function (Blueprint $table) {
            $table->increments('id');
            $table->time('jam_absensi');
            $table->string('hari_absensi');
            $table->string('bulan_absensi');
            $table->integer('tahun_absensi');
            $table->integer('jumlah_absensi');
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
        Schema::drop('absensi_models');
    }
}
