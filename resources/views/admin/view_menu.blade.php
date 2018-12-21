@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Menu</div>
                  
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Kode Menu </th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Harga Menu</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    @foreach ($menus as $menu)
                    <tbody>
                      <tr>
                        <th scope="row">{{$menu -> id}}</th>
                        <td><img src = "{{asset('storage/menu_img/'. $menu->gambar_menu)}}" width="200"></td>
                        <td>{{$menu -> id_menu}}</td>
                        <td>{{$menu -> nama_menu}}</td>
                        <td>{{$menu -> harga()}}</td>
                        <td>
                          <a href='/dashboard/view_menu/{{$menu->id}}/edit'>edit</a>
                          <br>
                          <a onclick="return confirm('Are you sure you want to delete this menu ?')" href='/dashboard/view_menu/{{$menu->id}}/delete'>delete</a>
                        </td>
                      </tr>
                  @endforeach
                  <a href='/dashboard/view_menu/add'>add</a>
                </div>
            </div> 
        </div>
    </div>
</div>


@endsection
