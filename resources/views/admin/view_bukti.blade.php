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
                        <th scope="col">Tanggal</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">No Pemesanan </th>
                        <th scope="col">No Rekening</th>
                        <th scope="col">Atas Nama</th>
                        <th scope="col">Jumlah Bayar</th>
                      </tr>
                    </thead>
                    @foreach ($bukti as $b)
                    <tbody>
                      <tr>
                        <th scope="row">{{$b -> created_at}}</th>
                        <td><a href="{{asset('storage/bukti_img/'. $b->gambar_bukti)}}" download=""><img src = "{{asset('storage/bukti_img/'. $b->gambar_bukti)}}" width="200"></a></td>
                        <td>{{$b -> nopem}}</td>
                        <td>{{$b -> norek}}</td>
                        <td>{{$b -> nama}}</td>
                        <td>{{$b -> bayar()}}</td>
                      </tr>
                  @endforeach
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection