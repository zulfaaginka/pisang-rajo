<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadBukti extends Model
{
    protected $table = 'bukti_pembayaran';

    protected $fillable = ['nopem', 'norek', 'nama', 'jumlah_bayar','gambar_bukti'];

    function bayar(){
	
        $hasil_rupiah = "Rp " . number_format($this->jumlah_bayar,2,',','.');
        return $hasil_rupiah;
     
    }
}
