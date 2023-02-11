<div class="branch-address">
    <div class="container">
        <div class="row">
            <div class="address-slider">
                @if (isset($partners))
                @foreach ($partners as $part)
                <div class="item">
                    <div class="wrapper ourClient_img">
                        <img src="{{ $part->banner_image }}" alt="">
                    </div> <!-- /.wrapper -->
                </div>
                @endforeach
                @endif
            </div> <!-- /.address-slider -->
        </div>
    </div> <!-- /.container -->
</div>
