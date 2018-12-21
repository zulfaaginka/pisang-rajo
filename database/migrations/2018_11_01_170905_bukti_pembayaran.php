<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuktiPembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('bukti_pembayaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nopem');
            $table->foreign('nopem')->references('nopem')->on('data_pemesan')->onDelete('cascade');;
            $table->string('norek');
            $table->string('nama');
            $table->bigInteger('jumlah_bayar');
            $table->string('gambar_bukti');
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
