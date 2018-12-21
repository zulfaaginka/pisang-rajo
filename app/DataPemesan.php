<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPemesan extends Model
{
    protected $table = 'data_pemesan';

    protected $guarded = [];

    function status(){
        $stat = "Selesai";
        if ($this->status == 0){
            $stat = "Baru";
            return $stat;
        }elseif($this->status == 1){
            $stat = "Menunggu Pembayaran";
            return $stat;
        }elseif($this->status == 2){
            $stat ="Konfirmasi Pembayaran";
            return $stat;
        }
        return $stat;

    }
}
