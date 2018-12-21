@extends('layouts.master')

@section('title','Home - Rajo')

@section('content')
  <section>
        <main class="mt-5">
                <div class="container">
                    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <img class="d-block width :100% mx-auto d-block" width="1000" src="pisangrajo/LOGO FINAL.png" alt="First slide">
                            </div>
                            <!--/First slide-->
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                    
                </div>
            </main>
            
</section>
<section class="page-section ">
  <div class="container">
    <div class="row">
      <div style ="background-color: white"class="col-xl-9 mx-auto">
        <div class="text-center rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Our Promise</span>
            <span class="section-heading-lower">To You</span>
          </h2>
          <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
        </div>
      </div>
    </div>
  </div>
  <br><br>
</section>
