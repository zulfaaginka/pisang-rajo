<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Cart as Cart;
use Validator;
use App\Pesanan;
use App\DataPemesan;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function generate_nopem(){
        $today = date("Ymd");
        $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
        return $nopem = $today . $rand;
    }

    public function index()
    {
        $nopem = $this->generate_nopem();   
        $check = DataPemesan::where('nopem',$nopem)->get();
        while ($check==null){
            $nopem = $this->generate_nopem();   
            $check = DataPemesan::where('nopem',$nopem);
        }
        return view('blog/checkout',['nopem'=>$nopem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nopem' => 'required',
            'nama' => 'required',
            'no_telp' => 'required',
            'email'=>'required|email',
            'alamat'=>'required',
            'jumlah_pembayaran' => 'required',
            'tanggal_pengambilan' => 'required',
            'tempat_pengambilan'=> 'required',
            'cara_pengambilan'=>'required',
            'g-recaptcha-response' => 'required',
        ]);
        
        //masukin database
        $data = new DataPemesan;
        $data ->nopem = $request->nopem;
        $data ->nama = $request->nama;
        $data ->no_telp = $request->no_telp;
        $data ->email = $request->email;
        $data ->alamat = $request->alamat;
        $data ->jumlah_pembayaran = $request->jumlah_pembayaran;
        $data->tanggal_pengambilan = $request->tanggal_pengambilan;
        $data->tempat_pengambilan = $request->tempat_pengambilan;
        $data ->cara_pengambilan = $request->cara_pengambilan;
        $data->status = 0;
        $data->save();
        $this->store_pesanan($data->nopem);
        Cart::destroy();
        
        return redirect ('/checkout');
    }

    private function store_pesanan($nopem){
        foreach(Cart::content() as $item)
        {
            $pesanan = new Pesanan;
            $pesanan ->nopem = $nopem;
            $pesanan ->id_menu = $item ->id;
            $pesanan ->qty = $item ->qty;
            $pesanan ->harga = $item ->subtotal;
            $pesanan->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
