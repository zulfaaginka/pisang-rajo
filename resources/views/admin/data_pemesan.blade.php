@extends('layouts.app')

@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">No Pemesanan</th>
      <th scope="col">Nama </th>
      <th scope="col">No Telp</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  @foreach ($datas as $data)
  <tbody>
    <tr>
      <th scope="row">{{$data -> created_at}}</th>
      <td>{{$data->nopem}}</td>
      <td>{{$data -> nama}}</td>
      <td>{{$data -> no_telp}}</td>
      <td>{{$data -> email}}</td>
      <td>{{$data -> status()}}</td>
      <td>
        <a href="/dashboard/pemesan/{{$data->nopem}}">Detail</a><br>
        <a href="/dashboard/pemesan/{{$data->nopem}}/konfirmasi">Konfirmasi Pemesanan</a><br>
        <a href="/dashboard/pemesan/{{$data->nopem}}/tolak">Tolak Pembayaran</a> <br>
        <a href="/dashboard/pemesan/{{$data->nopem}}/sent">Kirim Invoice</a> <br>
      </td>
    </tr>
@endforeach
@endsection