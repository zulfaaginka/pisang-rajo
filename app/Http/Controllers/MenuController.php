<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DaftarMenu;


class MenuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menus = DaftarMenu::all(); 
        return view('admin/view_menu',['menus' => $menus]);
    }
}
