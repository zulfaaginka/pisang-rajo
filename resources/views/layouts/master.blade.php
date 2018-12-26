<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/style.min.css" rel="stylesheet">
  <title>@yield('title')</title>
</head>

<body background="/pisangrajo/bg-rajo.jpg" background-attachment="fixed">

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark red scrolling-navbar">
      <a class="navbar-brand" href="/"><strong>Pisang Nugget Rajo</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item {{ Request::is('/') ? 'active' : 'null' }}">
                  <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item {{ Request::is('menu') ? 'active' : 'null' }}">
                  <a class="nav-link" href="{{url('menu')}}">Menu</a>
              </li>
              <li class="nav-item {{ Request::is('about') ? 'active' : 'null' }}">
                  <a class="nav-link" href="{{url('about')}}">Tentang Kami</a>
              </li>
              <li class="nav-item {{ Request::is('lokasi') ? 'active' : 'null' }}">
                  <a class="nav-link" href="{{url('lokasi')}}">Lokasi</a>
              </li>
              <li class="nav-item {{ Request::is('upload_bukti') ? 'active' : 'null' }}">
                    <a class="nav-link" href="{{url('upload_bukti')}}">Upload Bukti</a>
                </li>
          </ul>
          <ul class="navbar-nav nav-flex-icons">
              <li class="nav-item {{ Request::is('contact') ? 'active' : 'null' }}">
                  <a class="nav-link" href="{{url('contact')}}"><i class="fa fa-envelope"></i></a>
              </li>
              <li class="nav-item {{ Request::is('cart') ? 'active' : 'null' }}">
                <a class="nav-link" href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i></a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href = "https://www.instagram.com/pisangrajo/?hl=en"><i class="fa fa-instagram"></i></a>
              </li>
          </ul>
      </div>
  </nav>
  
  <br>
  <br>
  <br>
  @if (Session::has('success'))
	
	<div class="alert alert-success" role="alert">
		<strong>Success:</strong> {{ Session::get('success') }}
	</div>

@endif

@if (count($errors) > 0)

	<div class="alert alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach  
		</ul>
	</div>

@endif
    @yield ('content') 
  
  <br><br>

  <footer class="page-footer font-small fixed-bottom yellow accent-2">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
    
  </footer>
  <!-- Footer -->
  <!--Main Navigation-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  @yield('extra-js')
</body>
</html>

