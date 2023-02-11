@extends('layouts.master')

@section('content')
<!-- ..................Theme Inner Banner........................			 -->
		<!-- Start Subheader -->
		<div class="normal-bg subheader" style="background-image: url('/website/images/home/inner-banner.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="subheader-content">
							<h1 class="page-title text-white fw-300">Our Service</h1>
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
    <div class="our-case section-spacing">
        <div class="container">
            <div class="theme-title-one">
                <h2>Our Services</h2>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, laboriosam? --}}
                </p>
            </div> <!-- /.theme-title-one -->
            <div class="wrapper">
                <div class="row">
                    @foreach ($job_categories as $cat)
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="single-case-block">
                                <img src="{{ $cat->banner_image ?? '' }}" alt="">
                                <div class="hover-content">
                                    <div class="text clearfix">
                                        <div class="float-left">
                                            <h5><a href="/{{ $cat->nav_name }}">{{ $cat->caption ?? '' }}</a></h5>

                                        </div>
                                        @if (isset($cat->childs()->first()->id))
                                            <a href="{{ route('normal', ['slug' => $cat->childs()->first()->id]) }}"
                                                class="details float-right"><i class="fa fa-long-arrow-right"
                                                    aria-hidden="true"></i></a>
                                        @endif
                                    </div> <!-- /.text -->
                                </div> <!-- /.hover-content -->
                            </div> <!-- /.single-case-block -->
                        </div> <!-- /.col- -->
                    @endforeach
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->

        </div> <!-- /.container -->
    </div> <!-- /.our-case -->
    <!--
       =============================================
        Feature Banner
       ==============================================
       -->
    <div class="feature-banner section-spacing">
        <div class="opacity">
            <div class="container">
                <h2>We provide high quality services &amp; innovative solutions for the realiable growth</h2>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div> <!-- /.feature-banner -->
@endsection
 