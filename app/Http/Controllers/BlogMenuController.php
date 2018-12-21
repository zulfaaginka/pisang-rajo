<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DaftarMenu;

class BlogMenuController extends Controller
{
    public function view ()
    {
        $menus = DaftarMenu::all();
        return view ('blog/menu',['menus'=>$menus]);
    }

    public function produk_view($id)
    {
        $menu = DaftarMenu::where('id_menu',$id)->firstOrFail();
        return view ('blog/produk',['menu'=>$menu]);
    }
        
}
