<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_menu', function (Blueprint $table) {
            $table->string('id_menu');
            $table->primary('id_menu');
            $table->string('nama_menu');
            $table->integer('harga_menu');
            $table->string('gambar_menu');
            $table->tinyInteger('stok');
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
