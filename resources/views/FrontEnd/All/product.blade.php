@extends('FrontEnd.master')
@section('content')
<section id="sp-page-title">
    <div class="row">
        <div id="sp-title" class="col-sm-12 col-md-12">
            <div class="sp-column ">
                <div class="sp-page-title"style="background-image: url({{asset('public/font-end/images/2018/Headerfoto.jpg')}});"><div class="container">
                    <h2>Know More</h2><h3>Products</h3></div></div></div></div></div></section>

                </div> <!-- /.body-innerwrapper -->
            </div> <!-- /.body-innerwrapper -->
            <!-- bannar -->
            <div class="bannar">
                <div class="container">
                    <div class="row text-center">
                            <center><a href="{{url('/')}}"><img src="{{asset('public/font-end/images/logo/77777777.png')}}"></a>
                            </center>
                        <p>G&nbsp;&nbsp;L&nbsp;&nbsp;O&nbsp;&nbsp;B&nbsp;&nbsp;A&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp; A&nbsp;&nbsp;P&nbsp;&nbsp;P&nbsp;&nbsp;A&nbsp;&nbsp;R&nbsp;&nbsp;E&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp; S&nbsp;&nbsp;O&nbsp;&nbsp;L&nbsp;&nbsp;U&nbsp;&nbsp;T&nbsp;&nbsp;I&nbsp;&nbsp;O&nbsp;&nbsp;N &nbsp;&nbsp;&nbsp;&nbsp;P&nbsp;&nbsp;R&nbsp;&nbsp;O&nbsp;&nbsp;V&nbsp;&nbsp;I&nbsp;&nbsp;D&nbsp;&nbsp;E&nbsp;&nbsp;R</p>
                    </div>

                </div>

            </div>
            <section class="product">
                <div class="container">
                    <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="row">
                            <div class="text-center col-sm-8 col-sm-offset-2">
                                <h2>PRODUCT STRENGTHS</h2>

                            </div>
                        </div>
                    </div><br>
                    <div class="text-center our-services">
                        <div class="row">
                            <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="service-info">
                                    <a href="{{url('/ProductMan')}}"><img src="{{asset('public/font-end/images/1.jpg')}}" ></a>
                                    <a href="{{url('/ProductMan')}}"><h3>MEN'S</h3></a>
                                </div>
                            </div>
                            <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="service-info">
                                    <a href="{{url('/ProductMan')}}"><img src="{{asset('public/font-end/images/2.jpg')}}"  ></a>
                                    <a href="{{url('/ProductMan')}}"><h3>WOMEN'S</h3></a>
                                </div>
                            </div>
                            <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="service-info">
                                    <a href="{{url('/ProductMan')}}"><img src="{{asset('public/font-end/images/3.jpg')}}" ></a>
                                    <a href="{{url('/ProductMan')}}"><h3>KID'S & BABIE'S </h3></a>
                                </div>
                            </div>
                            <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="service-info">
                                    <a href="{{url('/ProductMan')}}"><img src="{{asset('public/font-end/images/4.jpg')}}"></a>
                                    <a href="{{url('/ProductMan')}}"><h3>LINGERIES</h3></a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section><!--/#services-->
<!-- Off Canvas Menu -->
<div class="offcanvas-menu">
        <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
        <div class="offcanvas-inner">
        <div class="sp-module ">
        <div class="sp-module-content"><ul class="nav menu">
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

