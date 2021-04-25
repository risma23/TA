<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBendaharasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bendaharas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gaji_id')->unsigned();
            $table->foreign('gaji_id')->references('id')->on('transaksi__gajis')->onUpdate('cascade');
            $table->string('nama_bdhr',30);
            $table->string('email_bdhr',30);
            $table->string('pass_bdhr',20);
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
        Schema::drop('bendaharas');
    }
}
