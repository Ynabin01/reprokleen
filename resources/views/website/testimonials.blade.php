 <div class="section-section">
     <div class="theme-title-one1">
         <h2>Testimonials</h2>

     </div>
     <div class="container">
         <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
             <div class="carousel-indicators">
                 <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                     aria-current="true" aria-label="Slide 1"></button>
                 <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                     aria-label="Slide 2"></button>
                 <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                     aria-label="Slide 4"></button>
             </div>
            @if (isset($testimonial))
                <div class="carousel-inner">
                    @foreach ($testimonial as $test)
                        <div class="carousel-item @if ($loop->iteration == 1)active @endif" data-bs-interval="@if ($loop->iteration == 1)10000 @else 2000 @endif">
                            <div class="carousel-caption  @if ($loop->iteration != 1) d-none d-md-block @endif">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="client-area">
                                            <p><i class="fa fa-quote-left" aria-hidden="true"></i>
                                                {{ $test->long_content }}
                                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                            </p>
                                            <div class="client-name">
                                                <h4>{{ $test->caption }}</h4>
                                                <h6>{{ $test->short_content }}</h6>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="circle">
                                            <img src="{{ $test->banner_image }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

         </div>
     </div>
 </div>
