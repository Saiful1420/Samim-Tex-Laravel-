@extends('FrontEnd.master')
@section('content')
<section id="sp-page-title">
    <div class="row">
        <div id="sp-title" class="col-sm-12 col-md-12">
            <div class="sp-column ">
                <div class="sp-page-title"style="background-image: url({{asset('public/font-end/images/2018/Headerfoto.jpg')}});"><div class="container">
                    <h2>Know More</h2><h3>Careers</h3></div></div></div></div></div></section>

                </div> <!-- /.body-innerwrapper -->
            </div> <!-- /.body-innerwrapper -->
            <!-- bannar -->
            <div class="bannar">
                <div class="container">
                    <div class="row text-center">
                        <h1> JOIN OUR TEAM</h1>
                        <p>D&nbsp;&nbsp;O&nbsp;&nbsp;O&nbsp;&nbsp;R&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;O&nbsp;&nbsp;&nbsp;&nbsp;Y&nbsp;&nbsp;O&nbsp;&nbsp;U&nbsp;&nbsp;R&nbsp;&nbsp;&nbsp;&nbsp;F&nbsp;&nbsp;U&nbsp;&nbsp;T&nbsp;&nbsp;U&nbsp;&nbsp;R&nbsp;&nbsp;E</p>
                        <p style="font-size: 16px;">If you're smart, motivated and want something more than a job then have a look at the jobs below.</p>
                        <p style="font-size: 16px;">We'd like to meet you.</p>
                    </div>
                </div>
            </div>
            <section>
                <div class="container career">
                    <div class="row">


                    <h4>HR PARTNER - TALENT ACQUISITION</h4>
                        <h6>Requirements</h6>
                        <ul>
                            @foreach ($career as $career )
                            <li>{{$career->requirements}}</li>
                            @endforeach
                        </ul>

                    </div>
                    <h5>Please send your updated Resume with the name and contact details of two non-related referees to reach us on or before 5th April 2019. The post applied for should be indicated on the subject line of the email.</h5>

                    <h5>Email:<a href=""> careers@samintex.com</a></h5><br>

                </div>
            </section>
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
