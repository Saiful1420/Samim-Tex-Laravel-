@extends('FrontEnd.master')
<!-- product css -->
<link rel="stylesheet" href="{{asset('public/font-end/css/main.css')}}">
<link rel="stylesheet" href="{{asset('public/font-end/css/development.css')}}">

<!--accesories-css-->
<link rel='stylesheet' href='{{asset('public/font-end/css/calegories_style.css')}}' />
<!--Animation-css-->
<link rel='stylesheet' href='{{asset('public/font-end/css/animate.min.css')}}' />

<!-- Zoom-styles -->
<link rel="stylesheet" href="{{asset('public/font-end/css/jquery.spzoom.css')}}" />
<script src="{{asset('public/font-end/js/jquery.spzoom.js')}}"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

@section('content')
<style>
.nav-tabs a{
    color:black;
    font-weight: bold;
    font-size: 18px;

}
.tab-content h3{
margin-top:30px;
text-align: center;
font-size: 30px;
margin-bottom: 30px;
color:blue
}
.tab-content p{
text-align: center;
color:black;
font-weight: bold;
}
@media only screen and (max-width: 600px) {
  img {
    width: 110px;
    margin-top: 5px;
  }
}

</style>
<div id="SubPageImg">
<img src="{{asset('public/font-end/images/sub/about.jpg')}}" width="" height="" class="img-fluid">
</div>
<div id="HomeBody">
    <div class="container">
        <div class="row">
            <div class="nav flex-column nav-pills col-sm-3 float-left wow fadeInUp">

            </div>
            <!--  category -->
            <div class="col-sm-12 wow fadeInUp text-center mb-4 catbuttons">
        <center><a href="{{url('/')}}"><img src="{{asset('public/font-end/images/logo/77777777.png')}}"></a></center>
                <h1 class="Black" style="margin-bottom:25px;">OUR PRODUCTS</h1>
            </div>
            <div class="container">


                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Men's</a></li>
                      <li ><a data-toggle="tab" href="#menu1"> Women's</a></li>
                      <li><a data-toggle="tab" href="#menu2"> Kids & Babies</a></li>
                      <li><a data-toggle="tab" href="#menu3">Lingeries</a></li>
                    </ul>

                    <div class="tab-content " >
                      <div id="home" class="tab-pane fade in active ">
                        <h3>Men's Products</h3>
                      <div class="row ">
                            @foreach ($men as $product )
                        <div class="col-sm-3 ">
                          <div class="card " style="margin-bottom:20px;">
                            <div class="card-body" style='width: 250px; height: 280px;'  >
                                    <img class="" src="{{asset($product->image)}} " style='width: 100%; height: 100%;' >
                                </div>
                             <p> {{$product->product_name}}</p>

                          </div>
                        </div>
                        @endforeach
                      </div>

                      </div>
                      <div id="menu1" class="tab-pane fade">
                        <h3>Women's Products</h3>
                        <div class="row">
                                @foreach ($women as $product )
                            <div class="col-sm-3">
                              <div class="card" style="margin-bottom:20px;">
                                <div class="card-body" style='width: 250px; height: 280px;'  >
                                        <img src="{{asset($product->image)}}" style='width: 100%; height: 100%;' >
                                </div>
                                <p> {{$product->product_name}}</p>

                              </div>
                            </div>
                            @endforeach
                          </div>

                      </div>
                      <div id="menu2" class="tab-pane fade">
                        <h3>Kids & Babies Products</h3>
                        <div class="row">
                                @foreach ($kid as $product )
                            <div class="col-sm-3">
                              <div class="card" style="margin-bottom:20px;">
                                <div class="card-body" style='width: 250px; height: 280px;'  >
                                        <img src="{{asset($product->image)}}" style='width: 100%; height: 100%;' >
                                      
                                </div>
                                <p> {{$product->product_name}}
                                </p>

                              </div>
                            </div>
                            @endforeach
                          </div>

                      </div>
                      <div id="menu3" class="tab-pane fade">
                        <h3>Lingeries Products</h3>
                        <div class="row">
                                @foreach ($lingeries as $product )
                            <div class="col-sm-3">
                              <div class="card" style="margin-bottom:20px;">
                                <div class="card-body" style='width: 250px; height: 280px;'  >
                                        <img src="{{asset($product->image)}}" style='width: 100%; height: 100%;' >

                                </div>
                                <p> {{$product->product_name}}</p>
                              </div>
                            </div>
                            @endforeach
                          </div>

                      </div>
                    </div>
                  </div>
                </div>
                </div>
                </div>
            </div></div>


                <!-- Off Canvas Menu -->
    <div class="offcanvas-menu">
            <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
            <div class="offcanvas-inner">
            <div class="sp-module ">
            <div class="sp-module-content"><ul class="nav menu"><br><br>
            <li class="item-437  current active"><a href="{{url('/')}}" > HOME</a></li>
            <li class="item-533"><a href="{{url('/about')}}" > ABOUT US</a></li>
            <li class="item-581"><a href="{{url('/product')}}" > PRODUCTS</a></li>
            <li class="item-534"><a href="{{url('/career')}}" > CAREERS</a></li>
            <li class="item-559"><a href="{{url('/customer')}}" > OUR CUSTOMERS</a></li>
            <li class="item-559"><a href="{{url('/contact')}}" > CONTACT US</a></li>
            <li class="item-559"><a href="signin.html" > SIGN IN</a></li>
            </ul>
            </div>

            </div>

            </div> <!-- /.offcanvas-inner -->
            </div> <!-- /.offcanvas-menu -->

@endsection
