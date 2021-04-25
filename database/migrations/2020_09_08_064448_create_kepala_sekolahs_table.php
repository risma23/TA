<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepalaSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepala_sekolahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bdhr_id')->unsigned();
            $table->foreign('bdhr_id')->references('id')->on('bendaharas')->onUpdate('cascade');
            $table->string('nama_kepsek',30);
            $table->string('email_kepsek',30);
            $table->string('pass_kepsek',20);
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
        Schema::drop('kepala_sekolahs');
    }
}
