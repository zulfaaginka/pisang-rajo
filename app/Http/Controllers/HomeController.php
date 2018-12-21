<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DaftarMenu;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/dashboard');
    }

    public function menu()
    {
        return view('admin/menu_admin');
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'id_menu' => 'required',
            'nama_menu' => 'required',
            'harga_menu' => 'required',
            'gambar_menu'=> 'required|mimes:jpeg,jpg,png',
            
        ]);
        $check = DaftarMenu::where('id_menu',$request->id_menu)->get();
        if($check==null)
        {
            return view('admin/menu_admin')->with('error_message', 'ID-Menu sudah tercantum');
        }
        //minta alamat gambar
        $image = $request->file('gambar_menu');
        $fileName = $request->id_menu.'.png';
        $request->file('gambar_menu')->storeAs('public/menu_img', $fileName);

        //masukin database
        $menu = new DaftarMenu;
        $menu ->id_menu = $request->id_menu;
        $menu ->nama_menu = $request->nama_menu;
        $menu ->harga_menu = $request->harga_menu;
        $menu ->gambar_menu = $fileName;
        $menu ->stok = 1;
        $menu->save();
        return redirect ('/dashboard/view_menu');
    }

    public function edit ($id)
    {
        $menu = DaftarMenu::findOrFail($id);
        
        return view ('/admin/edit_menu',['menu'=>$menu]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'id_menu' => 'required',
            'nama_menu' => 'required',
            'harga_menu' => 'required',
            'gambar_menu'=> 'mimes:jpeg,jpg,png|max:5000',
        ]);

        $menu = DaftarMenu::find($id);
        //minta alamat gambar
        if ($request->gambar_menu == null){
            $menu ->update([
                'id_menu' => $request['id_menu'],
                'nama_menu' => $request['nama_menu'],
                'harga_menu' => $request['harga_menu'],
            ]);
        }else{     
            $image = $request->file('gambar_menu');
            $fileName = $request->id_menu.'.png';
            $request->file('gambar_menu')->storeAs('public/menu_img', $fileName);
            
            $menu ->update([
                'id_menu' => $request['id_menu'],
                'nama_menu' => $request['nama_menu'],
                'harga_menu' => $request['harga_menu'],
                'gambar_menu' => $fileName,
            ]);
        }
        return redirect ('/dashboard/view_menu');
    }

    public function delete($id){
        $menu = DaftarMenu::find($id);
        $menu->delete();
        return redirect ('/dashboard/view_menu');
    }
}