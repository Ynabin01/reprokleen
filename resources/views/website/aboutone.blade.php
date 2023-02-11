<!-- about us -->
<div class="about-compnay-two section-spacing">
    <div class="overlay000">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="quote-form">
                        <img src="{{ $about->banner_image ?? '' }}"  alt="">
                        <img src="{{ $about->banner_image ?? '' }}"  alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text">
                    <div class="about-text-area">
                        <div class="theme-title-one">
                            <h2>{{ $about->caption ?? '' }}</h2>
                        </div>
                        <p>
                            @php echo $about->short_content; @endphp
                        </p>
                        <a href="/about-one">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
