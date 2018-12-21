@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <form action="/dashboard" method="POST" enctype="multipart/form-data" id="menu_in">
                  {{ csrf_field() }}  
                  Kode Menu : <input type="text" name="id_menu" autocomplete="off"><br>
                  Nama Menu : <input type="text" name="nama_menu" autocomplete="off"><br>
                  Harga : <input type="text" name="harga_menu" autocomplete="off"><br>
                  {{-- Stok : <br>
                  <select name="stok" id="stok" form="menu_in">
                    <option value="0">Kosong</option>
                    <option value="1">Ada</option>
                  </select> --}}
                  <br>
                  Gambar : <input type="file" name="gambar_menu" ><br>
                  <input type="submit" name="submit" value="Create"><br>
                </form>
                    
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
