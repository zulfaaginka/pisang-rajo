@extends('layouts.master')

@section('title','Lokasi - Rajo')

<body>

        <!--Main Navigation-->

<img src="pisangrajo/bg-rajo.jpg" class="bg" alt="image">
<style>
body {
     margin: 0;
     padding: 0;
     text-align: center;
}
.bg {
     width: 100%;
     height: 100%;
     position: fixed;
     z-index: 1;
     float: left;
     left: 0;
}
.content {
     width: 80%;
     height: auto;
     margin: auto;
     position: relative;
     z-index: 10;
     background: #fff;
     padding: 80px;
     text-align: left;
}
</style>

@section('content')
<div class="content">
<section class="page-section">
<br><br><br>      
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2><strong>Yuk Mampir ke Warung Rajo!</h2></strong>
                <span class="section-heading-lower">We're Open</span> <p>
				<span class="section-heading-lower">Everyday @12.00 - 21.00</span>
              </h2>
              <p class="address mb-5">
                <em>
                  <strong>Cabang Rawamangun</strong>
                  <br>
                  Jalan Tenggiri No. 2C Rawamangun Jakarta Timur (Dekat Terminal Rawamangun)
                </em>
				<br>
				<em>
                  <strong>Cabang Bekasi</strong>
                  <br>
                  Jalan KH Noer Ali No. 13, Kalimalang (Sebelum RS Awal Bros)
                </em>
				<em>
				<br>
                  <strong>Cabang Bintaro</strong>
                  <br>
                  Jalan Senayan Utama Blok HJ.1A Sektor 9 Bintaro
                </em>
				<em>
				<br>
                  <strong>Cabang Permata Hijau</strong>
                  <br>
                  Jalan Arteri Permata Hijau No. 5 Kebayoran Lama, Jakarta Selatan
                </em>
              </p>
              <p class="mb-5">
                <small>
                  <em><strong>Contact Us</strong></em>
                </small>
                <br>
                081287978657
				<br>
				pisangnuggetrajo@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
@endsection