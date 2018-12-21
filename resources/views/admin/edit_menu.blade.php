@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <form action="/dashboard/view_menu/{{$menu->id}}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}  
                  Kode Menu : <input type="text" name="id_menu" value="{{$menu->id_menu}}" autocomplete="off"><br>
                  Nama Menu : <input type="text" name="nama_menu" value="{{$menu->nama_menu}}" autocomplete="off"><br>
                  Harga : <input type="text" name="harga_menu" value="{{$menu->harga_menu}}"autocomplete="off"><br>
                  Gambar : <input type="file" name="gambar_menu" value="{{$menu->gambar_menu}}" > <br>
                  <input type="hidden" name="_method" value="PUT">
                  <input type="submit" name="submit" value="Edit"><br>
                </form>
                    
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection