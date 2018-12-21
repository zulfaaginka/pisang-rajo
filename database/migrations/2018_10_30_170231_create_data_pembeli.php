<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPembeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pemesan', function (Blueprint $table) {
            $table->string('nopem')->unique();
            $table->primary('nopem');
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp');
            $table->string('alamat');
            $table->string('cara_pengambilan');
            $table->string('tempat_pengambilan');
            $table->string('tanggal_pengambilan');
            $table->bigInteger('jumlah_pembayaran');
            $table->tinyInteger('status');
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
