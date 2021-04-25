<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PegawaiAbsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PegawaiAbsenTable', function (Blueprint $table) {
            $table->increments('id');
            $table->time('jam_abs');
            $table->string('hari_abs');
            $table->string('bulan_abs');
            $table->integer('tahun_abs');
            $table->integer('jumlah_abs');
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
        //
    }
}
