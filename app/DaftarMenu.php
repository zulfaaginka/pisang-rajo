<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarMenu extends Model
{
    protected $table = 'daftar_menu';

    public $timestamps = false;

    protected $fillable = ['id_menu', 'nama_menu', 'harga_menu', 'gambar_menu'];

    function harga(){
	
        $hasil_rupiah = "Rp " . number_format($this->harga_menu,2,',','.');
        return $hasil_rupiah;
    }

    function nama($id_menu){
        $nama = $this->nama_menu->where('id_menu',$id_menu);
        return $nama;
    }

}
