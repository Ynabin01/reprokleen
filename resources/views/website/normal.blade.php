@extends('layouts.master')

@section('content')
<!-- ..................Theme Inner Banner........................			 -->
		<!-- Start Subheader -->
		<div class="normal-bg subheader" style="background-image: url('/website/images/home/inner-banner.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="subheader-content">
							<h1 class="page-title text-white fw-300"> 
                                @php echo $normal->short_content; @endphp
                            </h1>
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
				CallOut Banner 
			============================================== 
			-->




        <!-- 
			=============================================
				About Company Stye Two
			============================================== 
			-->
        <div class="about-compnay-two no-bg section-spacing">
            <div class="overlayNNN">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 text order-lg-last">
                            <div class="theme-title-one">
                                <h2> {!! htmlspecialchars_decode($normal->caption) !!}</h2>
                            </div> <!-- /.theme-title-one -->
                            <p>
                                {!! htmlspecialchars_decode($normal->long_content) !!}
                            </p>
                        </div> <!-- /.col- -->
                        <div class="col-lg-6 col-12 order-lg-first">
                            <img src=" {!! htmlspecialchars_decode($normal->banner_image) !!}" alt="" class="left-img">
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.overlay -->
        </div> <!-- /.about-compnay-two -->
        @endsection