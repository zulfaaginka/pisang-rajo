@extends('layouts.master')

@section('title','Upload Bukti - Rajo')

@section('content')
<br><br><br>
<section class="page-section ">
    <div class="container">
      <div class="row">
        <div style ="background-color: white"class="col-xl-9 mx-auto">
          <div class="text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Upload Bukti</span>
            </h2>
            <p class="mb-0">
                <form action="/upload_bukti" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}  
                  No Pemesanan : <input type="text" name="nopem" autocomplete="off"><br>
                  No Rekening : <input type="text" name="norek" autocomplete="off"><br>
                  Nama : <input type="text" name="nama" autocomplete="off"><br>
                  Jumlah Pembayaran : <input type="text" name="jumlah_bayar" autocomplete="off"><br>
                  Bukti Gambar : <input type="file" name="bukti_gambar" ><br>
                  <input type="submit" name="submit" value="submit"><br>
                </form>
            </p>
          </div>
        </div>
      </div>
    </div>
    <br><br>
  </section>
@endsection