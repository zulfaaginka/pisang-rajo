<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    public $timestamps = false;  
    
    protected $guarded = ['id'];

    function harga(){
	
        $hasil_rupiah = "Rp " . number_format($this->harga,2,',','.');
        return $hasil_rupiah;
    }
}
