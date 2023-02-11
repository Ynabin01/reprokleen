
<section id="section-1">
    <div class="content-slider">
        <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
        <input type="radio" id="banner2" class="sec-1-input" name="banner">
        <input type="radio" id="banner3" class="sec-1-input" name="banner">
        <input type="radio" id="banner4" class="sec-1-input" name="banner">
        <div class="slider">
            @foreach ($sliders as $s)

                <div id="top-banner-{{$loop->iteration}}" class="banner">
                    <div class="bg-video-wrap">
                        @if (isset($s->banner_image))
                            <img src="{{ $s->banner_image }}" alt="" style="width: 100%">
                        @else
                            <video
                                src="@if ($s->main_attachment)uploads/main_attachment/{{ $s->main_attachment }} @endif "
                                loop muted autoplay>
                            </video>
                        @endif
                        {{-- <video src="website/video/video-1.mp4" loop muted autoplay> --}}
                        </video>
                        <div class="slider_title">
                            <p> {{ $s->caption }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <nav>
            <div class="controls">
                <label for="banner1"><span class="progressbar"><span
                            class="progressbar-fill"></span></span><span>01</span></label>
                <label for="banner2"><span class="progressbar"><span
                            class="progressbar-fill"></span></span><span>02</span></label>
                <label for="banner3"><span class="progressbar"><span
                            class="progressbar-fill"></span></span><span>03</span></label>
                <label for="banner4"><span class="progressbar"><span
                            class="progressbar-fill"></span></span><span>04</span></label>
            </div>
        </nav>
    </div>
</section>


{{-- <section id="section-1">

    <div class="content-slider">
        <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
        <input type="radio" id="banner2" class="sec-1-input" name="banner">
        <input type="radio" id="banner3" class="sec-1-input" name="banner">
        <input type="radio" id="banner4" class="sec-1-input" name="banner">
        @foreach ($sliders as $s)
            <div class="slider">
                <div id="top-banner-1" class="banner">
                    <div class="bg-video-wrap @if ($loop->iteration == 1) active @endif">
                        @if (isset($s->banner_image))
                            <img src="{{ $s->banner_image }}" alt="" style="width: 100%">
                        @else
                            <video
                                src="@if ($s->main_attachment)uploads/main_attachment/{{ $s->main_attachment }} @endif "
                                loop muted autoplay>
                            </video>
                        @endif
                        <div class="slider_title">
                            <p> {{ $s->caption }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <nav>
            <div class="controls">
                <label for="banner1"><span class="progressbar"><span
                            class="progressbar-fill"></span></span><span>01</span></label>
                <label for="banner2"><span class="progressbar"><span
                            class="progressbar-fill"></span></span><span>02</span></label>
                <label for="banner3"><span class="progressbar"><span
                            class="progressbar-fill"></span></span><span>03</span></label>
                <label for="banner4"><span class="progressbar"><span
                            class="progressbar-fill"></span></span><span>04</span></label>
            </div>
        </nav>
    </div>

</section> --}}

<script>
    ///// Section-1 CSS-Slider /////
    // Auto Switching Images for CSS-Slider
    function bannerSwitcher() {
        next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
        if (next.length) next.prop('checked', true);
        else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
        clearInterval(bannerTimer);
        bannerTimer = setInterval(bannerSwitcher, 5000)
    });
</script>
