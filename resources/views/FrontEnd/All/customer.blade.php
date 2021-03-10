@extends('FrontEnd.master')
@section('content')
<section id="sp-page-title">
    <div class="row">
        <div id="sp-title" class="col-sm-12 col-md-12">
            <div class="sp-column ">
                <div class="sp-page-title"style="background-image: url({{asset('public/font-end/images/2018/Headerfoto.jpg')}});"><div class="container">
                    <h2>Know More</h2><h3>Our Customers</h3></div></div></div></div></div></section>

                </div> <!-- /.body-innerwrapper -->
            </div> <!-- /.body-innerwrapper -->
         <!-- bannar -->
    <div class="bannar">
            <div class="container">
                <div class="row text-center">
                    <h1> OUR CUSTOMERS</h1>
                    <p>H&nbsp;&nbsp;E&nbsp;&nbsp;A&nbsp;&nbsp;R&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;F&nbsp;&nbsp;&nbsp;&nbsp;E&nbsp;&nbsp;V&nbsp;&nbsp;E&nbsp;&nbsp;Y&nbsp;&nbsp;T&nbsp;&nbsp;H&nbsp;&nbsp;I&nbsp;&nbsp;N&nbsp;&nbsp;G&nbsp;&nbsp;&nbsp;&nbsp;W&nbsp;&nbsp;E&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;O</p>
                </div>
                <!-- sliser start -->
                <div id="ourCustomer" class="col-sm-12 mt-5">

                    <div class="MS-content">

                        @foreach ($customer as $customer )


                        <div class="product_block item">
                            <div class="product_img">
                            <img src="{{asset($customer->image)}}" width="" height="" class="border3 img-fluid">
                            </div>

                        </div>
                        @endforeach

                    </div>
                    <div class="MS-controls">
                        <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                </div>

            </div>

        </div>



<script>

	$('#ourCustomer').multislider({
		duration: 750,
		interval: 3000
	});
</script>
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
