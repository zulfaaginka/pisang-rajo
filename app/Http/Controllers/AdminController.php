<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;
use App\DataPemesan;
use App\DaftarMenu;
use Mail;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_data()
    {
        $datas = DataPemesan::all();
        return view('admin/data_pemesan',['datas'=>$datas]);
    }

    public function details($nopem)
    {
        $data = DataPemesan::where('nopem',$nopem)->first();
        $detail = Pesanan::where('nopem',$nopem)->get();
        $menus = DaftarMenu::all();
        return view('admin/detail')->with('data',$data)->with('detail',$detail)->with('menus',$menus);
    }

    public function send_invoice($nopem)
    {
        $data = DataPemesan::where('nopem',$nopem)->first();
        $detail = Pesanan::where('nopem',$nopem)->get();
        $menus = DaftarMenu::all();
    
        Mail::send('admin/detail',['data'=>$data,'detail'=>$detail,'menus'=>$menus],function($message) use ($data){
            $message->from('pnrajo@gmail.com', 'Pisang Nugget Rajo');
            $message->to($data->email,$data->nama);
            $message->subject('INVOICE');
        });

        $data = DataPemesan::where('nopem',$nopem)->first()
                ->update(['status'=>'4']);
        return redirect('dashboard/pemesan');
    }

    public function konfirmasi_pemesanan($nopem){
        $data = DataPemesan::where('nopem',$nopem)->first();
        
        Mail::send('mail/konfirmasi_pemesanan',['data'=>$data],function($message) use ($data){
            $message->from('pnrajo@gmail.com', 'Pisang Nugget Rajo');
            $message->to($data->email,$data->nama);
            $message->subject('Konfirmasi Pemesanan');
        });
        $data = DataPemesan::where('nopem',$nopem)->first()
                ->update(['status'=>'1']);
        return redirect('dashboard/pemesan');
    }

    public function tolak_pemesanan($nopem){
        $data = DataPemesan::where('nopem',$nopem)->first();
        Mail::send('mail/tolak_pembayaran
        ',['data'=>$data],function($message) use ($data){
            $message->from('pnrajo@gmail.com', 'Pisang Nugget Rajo');
            $message->to($data->email,$data->nama);
            $message->subject('Informasi Pemesanan');
        });
        $data = DataPemesan::where('nopem',$nopem)->first()
                ->update(['status'=>'1']);
        return redirect('dashboard/pemesan');
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
        //
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
