@extends('layouts.master')

@section('title', 'Menu - Rajo')

@section('content')
<section>
<br><br><br><p>
<!-- Grid column -->

<div class="row">
@foreach ($menus as $menu)
    <div class="col-md-4 wow fadeInDown" >
        <div class="clients-comments text-center" style="background-color : #e0e0e0 ">
            <a href="/menu/{{$menu->id_menu}}"><img src= "{{asset('storage/menu_img/'. $menu->gambar_menu)}}" class="card-img-top" alt="narrower" height="400"></a>
            <div class="card-body card-body-cascade">
                <a href="/menu/{{$menu->id_menu}}" class="red-text"><i class="fa fa-cutlery"></i> {{$menu->nama_menu}}</a>
                <!--Title-->
                <h4 class="card-title">{{$menu->harga()}}</h4>
                <!--Text-->
            </div>
        </div>
    </div>
    <br>  
@endforeach
</div>

{{-- <br><br><br><br>
<div class="container"></div>
<div class="row">
    <div class="col-md-4 wow fadeInDown">
        <div class="clients-comments text-center">
            <img src="pisangrajo/pisang1.png" class="card-img-top" alt="narrower" width="400" height="400">
            <div class="card-body card-body-cascade">
                <h5 class="pink-text"><i class="fa fa-cutlery"></i> Pisang Nugget Rajo</h5>
                <!--Title-->
                <h4 class="card-title">Pisang Nugget Topping Keju</h4>
                <!--Text-->
                <p class="card-text">Pisang yang telah diseleksi kualitasnya digoreng menggunakan tepung roti dan ditaburi dengan keju yang diatasnya.</p>
            
            </div>
        </div>
    </div>
    <div class="col-md-4 wow fadeInDown">
        <div class="clients-comments text-center">
            <img src="pisangrajo/pisang2.png" class="card-img-top" alt="narrower" width="400" height="400">
            <div class="card-body card-body-cascade">
                <h5 class="pink-text"><i class="fa fa-cutlery"></i> Pisang Nugget Rajo</h5>
                <!--Title-->
                <h4 class="card-title">Pisang Nugget Topping Keju</h4>
                <!--Text-->
                <p class="card-text">Pisang yang telah diseleksi kualitasnya digoreng menggunakan tepung roti dan ditaburi dengan keju yang diatasnya.</p>
            
            </div>
        </div>
    </div>
    <div class="col-md-4 wow fadeInDown">
        <div class="clients-comments text-center">
            <img src="pisangrajo/pisang3.png" class="card-img-top" alt="narrower" width="400" height="400">
            <div class="card-body card-body-cascade">
                <h5 class="pink-text"><i class="fa fa-cutlery"></i> Pisang Nugget Rajo</h5>
                <!--Title-->
                <h4 class="card-title">Pisang Nugget Topping Keju</h4>
                <!--Text-->
                <p class="card-text">Pisang yang telah diseleksi kualitasnya digoreng menggunakan tepung roti dan ditaburi dengan keju yang diatasnya.</p>
            
            </div>
        </div>
    </div>
    <div class="col-md-4 wow fadeInDown">
        <div class="clients-comments text-center">
            <img src="pisangrajo/pisang4.png" class="card-img-top" alt="narrower" width="400" height="400">
            <div class="card-body card-body-cascade">
                <h5 class="pink-text"><i class="fa fa-cutlery"></i> Pisang Nugget Rajo</h5>
                <!--Title-->
                <h4 class="card-title">Pisang Nugget Topping Keju</h4>
                <!--Text-->
                <p class="card-text">Pisang yang telah diseleksi kualitasnya digoreng menggunakan tepung roti dan ditaburi dengan keju yang diatasnya.</p>
            
            </div>
        </div>
    </div>
    <div class="col-md-4 wow fadeInDown">
        <div class="clients-comments text-center">
            <img src="pisangrajo/pisang5.png" class="card-img-top" alt="narrower" width="400" height="400">
            <div class="card-body card-body-cascade">
                <h5 class="pink-text"><i class="fa fa-cutlery"></i> Pisang Nugget Rajo</h5>
                <!--Title-->
                <h4 class="card-title">Pisang Nugget Topping Keju</h4>
                <!--Text-->
                <p class="card-text">Pisang yang telah diseleksi kualitasnya digoreng menggunakan tepung roti dan ditaburi dengan keju yang diatasnya.</p>
            
            </div>
        </div>
    </div>
    <div class="col-md-4 wow fadeInDown">
        <div class="clients-comments text-center">
            <img src="pisangrajo/pisang6.png" class="card-img-top" alt="narrower" width="500" height="400">
            <div class="card-body card-body-cascade">
                <h5 class="pink-text"><i class="fa fa-cutlery"></i> Pisang Nugget Rajo</h5>
                <!--Title-->
                <h4 class="card-title">Pisang Nugget Topping Keju</h4>
                <!--Text-->
                <p class="card-text">Pisang yang telah diseleksi kualitasnya digoreng menggunakan tepung roti dan ditaburi dengan keju yang diatasnya.</p>
            
            </div>
        </div>
    </div>
</div>
</section> --}}
@endsection



