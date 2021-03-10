@extends('FrontEnd.master')
@section('content')
<section id="sp-page-title">
    <div class="row">
        <div id="sp-title" class="col-sm-12 col-md-12">
            <div class="sp-column ">
                <div class="sp-page-title"style="background-image: url({{asset('public/font-end/images/2018/Headerfoto.jpg')}});"><div class="container">
                    <h2>Know More</h2><h3>Contact Us</h3></div></div></div></div></div></section>

                </div> <!-- /.body-innerwrapper -->
            </div> <!-- /.body-innerwrapper -->
            <!-- bannar -->

            <div class="bannar">
                <div class="container-fluid"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0685941900965!2d90.41728011445642!3d23.780571593541197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79734fd1965%3A0xc406cd2071fad212!2sGulshan%20Badda%20Link%20Rd%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1572192838848!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" width="100%"; height="350px"></iframe>
                </div>
                    <div class="container">
                        <div class="row text-center">
                            <h1> GET IN TOUCH</h1>
                            <p>F&nbsp;&nbsp;E&nbsp;&nbsp;E&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp;F&nbsp;&nbsp;R&nbsp;&nbsp; E&nbsp;&nbsp;E&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;O&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;O&nbsp;&nbsp;N&nbsp;&nbsp;T&nbsp;&nbsp;A&nbsp;&nbsp;C&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;U&nbsp;&nbsp;S</p>

                        </div><br>


                        <section class="contact">

                            <div class="col-sm-6 ContactForm wow fadeInUp">
                                <h2>Send us a Message !</h2><br>
                                <form enctype="multipart/form-data" method="post" action="#" name="contact_form" id="contact_form">
                                    <div class="row  wow fadeInUp" data-wow-delay=".30s">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="Name *" id="name" name="name" required="required"><br>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="E-Mail *" id="email" name="email" required="required" required-data="email"><br>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="Contact No *" id="contact" name="contact" required="required"><br>
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea type="text" rows="5" class="form-control" style="resize:none;" placeholder="Message" id="message" name="message" required="required"></textarea><br>
                                        </div>
                                        <div class="col-sm-12 ">
                                            <button type="button" class="btn btn-suscess btn1" id="send" name="send">SEND </i></button>
                                            <!--<a href="#" class="btn btn-danger" role="button" aria-pressed="true">SEND <i class="fas fa-location-arrow"></i></a>-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-3">
                            <img src="{{asset('public/font-end/images/hongkong.jpg')}}" width="100%">

                            </div>


                            <div class="col-sm-3">
                                    <b><h4>Mr Mahbubur Rahman</b></h4><p>Managing Director<br>008801712712294 / 008801833103314
                            <br>Email: mahbub@samintexbd.com</p>
                            <br>
                            <b><h4>Mr Lankendra Rajakaruna</b></h4><p>Director - Marketing<br>0094717506070
                                <br>Email: lanke@samintexbd.com</p>
                                <br>

                             <p>House #Ta-136 (4th Floor),Sagupta Tower<br>
                                Gulshan-1, Link Road <br>Dhaka -1212, Bangladesh</p>


                            </div>
                        </div>
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
