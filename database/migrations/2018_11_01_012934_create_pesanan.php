<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('pesanan',function(Blueprint $table){
            $table->increments('id');
            $table->string('nopem');
            $table->foreign('nopem')->references('nopem')->on('data_pemesan')->onDelete('cascade');
            $table->string('id_menu');
            $table->foreign('id_menu')->references('id_menu')->on('daftar_menu');
            $table->integer('qty');
            $table->integer('harga');
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
