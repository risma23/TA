<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GajiHonorerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('GajiHonorerTable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_gaji');
            $table->integer('nip_gaji');
            $table->string('statuspegawai_gaji');
            $table->integer('gajipokok_gaji');
            $table->string('bonustambahan_gaji');
            $table->integer('total_gaji');
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
