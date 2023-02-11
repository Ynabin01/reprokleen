@php
    $normal_gallary_notice = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', 'Normal')
    
        ->orderBy('position', 'ASC')
        ->get();
    
    $menus = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', '!=', 'Job')
        ->where('page_type', '!=', 'Notice')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    $global_setting = App\Models\GlobalSetting::all()->first();
    if (isset($normal)) {
        $seo = $normal;
    } elseif (isset($job)) {
        $seo = $job;
    }
    
    $gallery = App\Models\NavigationItems::query()
        ->where('navigation_id', '2547')
        ->orderBy('updated_at', 'ASC')
        // ->limit(9)
        ->get();
    
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#061948">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#061948">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#061948">

    <!-----SEO--------->

    <title>{{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image"
        content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-----END SEO------->


    <title>Home</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="/website/images/logo/NSG LOGO.JPG">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="/website/css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="/website/css/responsive.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <div class="theme-menu-wrapper">
        <div class="container-fluid">
            <div class="bg-wrapper clearfix">
                <div class="menu-wrapper">
                    <div class="logo-area">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="logo-icon">
                                    <span style="" onclick="openNav()"><i class="fa-solid fa-bars"></i></span>
                                    <p>menu</p>
                                </div>

                                <div class="time">
                                    <div class="logo-slass">
                                        <span>|</span>
                                    </div>
                                    <div id="date-time"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="logo-img">
                                    <a href="/">
                                        <img src="/uploads/icons/{{ $global_setting->site_logo }}" alt="">
                                    </a>
                                    <a href="/">
                                        <img src="/uploads/icons/{{ $global_setting->site_logo_nepali }}"
                                            alt="">
                                    </a>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="navbar-icon">
                                    <div class="selectLanguage">
                                        {{-- <select name="" id="">
                                            <option value="">English</option>
                                            <option value="">Arabic</option>
                                        </select> --}}
                                        <div id="google_element"></div>
                                        <script src="//translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
                                        <script>
                                            function loadGoogleTranslate() {
                                                new google.translate.TranslateElement('google_element');
                                            }
                                        </script>

                                        <style>
                                            #google_element span {
                                                display: none;
                                            }

                                            .skiptranslate {
                                                font-size: 0;
                                            }

                                            .skiptranslate div {
                                                font-size: 16px;
                                            }

                                            .goog-te-combo {
                                                padding: 6px;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- .....................side-navbar.............. -->
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">

            <div class="sidenav">
                <a href="/">Home</a>
                @foreach ($menus as $menu)
                    @if ($menu->nav_name == 'service')
                        <a href="/{{ $menu->nav_name }}">{{ $menu->caption }}</a>
                    @else
                        <button class="dropdown-btn">{{ $menu->caption }}<i class="fa fa-caret-down"></i></button>

                        @if ($menu->childs->count() > 0)
                            <div class="dropdown-container">
                                @foreach ($menu->childs as $submenu)
                                    <a
                                        href="/{{ $menu->nav_name }}/{{ $submenu->nav_name }}">{{ $submenu->caption }}</a>
                                @endforeach
                            </div>
                        @endif
                    @endif
                @endforeach
                {{-- <a href="service">Our Service</a> --}}
                <a target="_blank" href="https://gator4108.hostgator.com:2096/">Check Mail</a>
                <a href="contact">Contact</a>
            </div>
        </div>
    </div>
    @yield('content')
    <!-- .....................side-navbar.............. -->

    {{-- about us --}}

    {{-- our services --}}

    {{-- News & Update --}}

    {{-- Testimonials --}}

    {{-- statistics --}}

    {{-- clients --}}

    <!-- Google Map -->
    <div class="map-canvas">
    </div>
    <footer class="theme-footer-two">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12 logo-widget">
                        <div class="logo"><a href="index.html"><img
                                    src="/uploads/icons/{{ $global_setting->site_logo }}" alt=""></a></div>
                        <div class="logo"><a href="index.html"><img
                                    src="/uploads/icons/{{ $global_setting->site_logo_nepali }}" alt=""></a>
                        </div>
                        <ul class="social-icon">
                            <li><a target="_blank" href="{{ $global_setting->facebook ?? '' }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="{{ $global_setting->twitter ?? '' }}"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a target="_blank" href="{{ $global_setting->linkedin ?? '' }}"><i class="fa-brands fa-instagram"></i></a></li>

                        </ul>
                    </div> <!-- /.logo-widget -->
                    <div class="col-lg-2 col-sm-6 col-12 footer-list">
                        <h6 class="title">EXPLORE</h6>
                        <ul>
                            <li><a href="/about-one">About us</a></li>
                            <li><a href="/who-we-are">Who Are We ?</a></li>
                            <li><a href="/service">Our Services</a></li>
                            <li><a href="/contact">Contact us</a></li>
                        </ul>
                    </div> <!-- /.footer-list -->
                    <div class="col-lg-3 col-sm-6 col-12 footer-gallery">
                        <h6 class="title">Gallery</h6>
                        <div class="wrapper">
                            <div class="row">
                                @foreach ($gallery as $photo)
                                <div class="col-4" @if ($loop->iteration > 9) style="display:none"@endif>
                                    <a href="/uploads/photo_gallery/{{ $photo->file }}" data-fancybox="gallery"
                                        data-caption="Caption for single image" class="fancybox"><img
                                            src="/uploads/photo_gallery/{{ $photo->file }}" alt=""></a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- /.footer-gallery -->

                    <div class="col-lg-3 col-sm-6 col-12 contact-widget">
                        <h6 class="title">CONTACT</h6>
                        <ul>
                            <li>
                                <i class="flaticon-direction-signs"></i>
                                {{ $global_setting->address_ne }}
                                <br>
                                {{ $global_setting->website_full_address }}
                            </li>
                            <li>
                                <i class="flaticon-multimedia-1"></i>
                                <a href="#">{{ $global_setting->site_email }}</a>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="#">Tel No : {{ $global_setting->phone }}
                                    <br>
                                    Fax No : {{ $global_setting->page_keyword }}</a>
                            </li>
                        </ul>
                    </div> <!-- /.contact-widget -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-footer -->
        <div class="bottom-footer">
            <div class="copyright-txt" style="display: flex; justify-content:center;color:white;">
                <p>&copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    PROKLEEN Group. All Rights Reserved. Developed by <a
                        style="display: flex; justify-content:center;color:white;"
                        href="http://radiantnepal.com/" target="_blank">Radiant Infotech</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>
    <!-- Optional JavaScript _____________________________  -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="website/vendor/jquery.2.2.3.min.js"></script>
    <!-- Popper js -->
    <script src="website/vendor/popper.js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="website/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Camera Slider -->
    <script src='website/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
    <script src='website/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script>
    <script src='website/vendor/Camera-master/scripts/camera.min.js'></script>
    <!-- menu  -->
    <script src="website/vendor/menu/src/js/jquery.slimmenu.js"></script>
    <!-- WOW js -->
    <script src="website/vendor/WOW-master/dist/wow.min.js"></script>
    <!-- owl.carousel -->
    <script src="website/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="website/js/slider-main.js"></script>
    <!-- js count to -->
    <script src="website/vendor/jquery.appear.js"></script>
    <script src="website/vendor/jquery.countTo.js"></script>
    <!-- Fancybox -->
    <script src="website/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

    <!-- Theme js -->
    <script src="website/js/theme.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- .................side nav...... -->
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "20%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
    <!-- .................................dropdown............................. -->
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
    <!-- .................side nav...... -->
    <!-- ................................time & date............... -->
    <script>
        // Function to format 1 in 01
        const zeroFill = n => {
            return ('0' + n).slice(-2);
        }

        // Creates interval
        const interval = setInterval(() => {
            // Get current time
            const now = new Date();
            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var d_num = now.getDay();
            var a = days[d_num]

            // Format date as in mm/dd/aaaa hh:ii:ss
            const dateTime = a + ' ' + zeroFill((now.getMonth() + 1)) + '/' + zeroFill(now.getUTCDate()) + '/' + now
                .getFullYear() + ' ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(
                    now.getSeconds());

            // Display the date and time on the screen using div#date-time
            document.getElementById('date-time').innerHTML = dateTime;
        }, 1000);
    </script>
    <!-- ................................time & date............... -->


</body>



</html>
