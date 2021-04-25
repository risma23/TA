<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi__gajis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('absensi_id')->unsigned();
            $table->foreign('absensi_id')->references('id')->on('absensi_models')->onUpdate('cascade');
            $table->integer('pegawai_id')->unsigned();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onUpdate('cascade');
            $table->string('nama_pgw',30);
            $table->integer('nip_pgw');
            $table->integer('pass_pgw');
            $table->string('status_pgw',20);
            $table->integer('gaji_pokok');
            $table->enum('bonus_gaji', ['lembur', 'tidak']);
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
        Schema::drop('transaksi__gajis');
    }
}
