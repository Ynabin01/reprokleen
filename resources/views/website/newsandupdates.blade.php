<div class="service-style-one section-spacing">
    <div class="container">
        <div class="theme-title-one">
            <h2>News & Update</h2>
        </div>
        <div class="row gy-3">
            @if (isset($newsandupdates))
                @foreach ($newsandupdates as $news)
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" style="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $news->caption ?? '' }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                <p class="card-text"> {{ $news->short_content ?? '' }}</p>
                                <a href="/{{ $news->nav_name }}" class="card-link">Read more</a>
                                 
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
