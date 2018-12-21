<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadBukti;
use App\DataPemesan;
use App\Rules\Captcha;

class BuktiController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'nopem' => 'required',
            'norek' => 'required',
            'nama' => 'required',
            'jumlah_bayar' => 'required',
            'bukti_gambar'=> 'required|mimes:jpeg,jpg,png|max:5000',
            'g-recaptcha-response' => 'required',
             
        ]);
        
        $check = DataPemesan::where('nopem',$request->nopem)->first();
        if($check==null){
            return redirect('/upload_bukti')->with('success_message','No Pemesanan tidak terlampir/salah');
        }else{
            //minta alamat gambar
            $image = $request->file('bukti_gambar');
            $fileName = $request->nopem . '.png';
            $request->file('bukti_gambar')->storeAs('public/bukti_img', $fileName);

            if ($check->status < 2){
                $data = DataPemesan::where('nopem',$request->nopem)->first()
                ->update(['status'=>'2']);
            }
            //masukin database
            $bukti = new UploadBukti;
            $bukti ->nopem = $request->nopem;
            $bukti ->norek = $request->norek;
            $bukti ->nama = $request->nama;
            $bukti ->jumlah_bayar = $request->jumlah_bayar;
            $bukti ->gambar_bukti = $fileName;
            $bukti->save();
            return redirect ('/upload_bukti')->with('success_message', 'Berhasil  mengupload bukti pembayaran dengan nomor pemesanan '.$request->nopem);

            }
        
            }

    public function index(){
        $bukti = UploadBukti::all(); 
        return view('admin/view_bukti',['bukti' => $bukti]);
    }
}
