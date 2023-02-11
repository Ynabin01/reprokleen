@extends('layouts.master')

@section('content')
    <!-- .....................side-navbar.............. -->
    <!-- Start Subheader -->
    <div class="normal-bg subheader" style="background-image: url('website/images/home/inner-banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subheader-content">
                        <h1 class="page-title text-white fw-300">Contact Us</h1>
                        <!-- <ul class="custom-flex breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>ABOUT US</li>
           </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->
    <!--
       =============================================
        Our Solution
       ==============================================
       -->
    <div class="contact-us-section ">
        <div class="container">
            <div class="theme-title-one">
                <h2>GET IN TOUCH</h2>

            </div> <!-- /.theme-title-one -->
            <div class="clearfix main-content no-gutters row">
                <div class="col-lg-5 col-12">
                    <div class="img-box"></div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="form-wrapper">
                        <form action="{{ route('contactstore') }}"
                            class="theme-form-one form-validation" autocomplete="off"  method="post" enctype='multipart/form-data'>
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 col-12"><input type="text" placeholder="Name *" name="first_name">
                                </div>
                                <div class="col-sm-6 col-12"><input type="text" placeholder="Phone *" name="number">
                                </div>
                                <div class="col-sm-6 col-12"><input type="email" placeholder="Email *" name="email">
                                </div>
                                {{-- <div class="col-sm-6 col-12"><input type="text" placeholder="Website *" name="web">
                                </div> --}}
                                <div class="col-12">
                                    <textarea placeholder="Message" name="message"></textarea>
                                </div>
                            </div> <!-- /.row -->
                            <button class="theme-button-one viewAllButton">SEND MESSAGE</button>
                            @if (Session::has('contact'))
                            <p class="alert alert-info">{{ Session::get('contact') }}</p>
                        @endif
                        </form>
                    </div> <!-- /.form-wrapper -->
                </div> <!-- /.col- -->
            </div> <!-- /.main-content -->
        </div> <!-- /.container -->

        <!--Contact Form Validation Markup -->
        <!-- Contact alert -->
        <div class="alert-wrapper" id="alert-success">
            <div id="success">
                <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="wrapper">
                    <p>Your message was sent successfully.</p>
                </div>
            </div>
        </div> <!-- End of .alert_wrapper -->
        <div class="alert-wrapper" id="alert-error">
            <div id="error">
                <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="wrapper">
                    <p>Sorry!Something Went Wrong.</p>
                </div>
            </div>
        </div> <!-- End of .alert_wrapper -->
    </div> <!-- /.contact-us-section -->
    <!-- /.our-case -->
    <div class="map-canvas">
    </div>

    <div class="map-loaction">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.8848484966197!2d85.32761721546603!3d27.720841431504795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1907b0522ead%3A0x392af32fe87dd0ea!2sRadiant%20Infotech%20Nepal%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1658659292018!5m2!1sen!2snp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>
@endsection
