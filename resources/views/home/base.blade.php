<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />
    @stack('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('home/css/all.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('home/css/animate.css')}}">
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="{{asset('home/css/swiper-bundle.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{asset('home/css/meanmenu.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('home/sass/style.css')}}">
</head>

<body>
@inject('injected','App\Defaults\Custom')
<!-- Preloader Start -->
<div class="theme-loader">
    <div class="spinner">
        <div class="spinner-bounce one"></div>
        <div class="spinner-bounce two"></div>
        <div class="spinner-bounce three"></div>
    </div>
</div>
<!-- Preloader End -->
<!-- Dark Light Start -->
<div class="switch__tab">
    <span class="switch__tab-btn active light-mode-title">Light</span>
    <span class="mode__switch three" onclick="darkLight()"><span></span></span>
    <span class="switch__tab-btn dark-mode-title">Dark</span>
</div>
<!-- Dark Light End -->
<!-- Header Area Start -->
<div class="header__three">
    <!-- Top Bar Start -->
    <div class="topbar__three">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="topbar__three-left lg-t-center">
                        <a href="#"><i class="fas fa-map icon-animation"></i>{!! $web->address !!}</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="topbar__three-right t-right lg-t-center">
                        <ul>
                            @if(!empty($web->phone))
                                <li><a href="tel:{{$web->phone}}"><i class="fas fa-phone-alt"></i>{{$web->phone}}</a></li>
                            @endif
                            <li><a href="mailto:{{$web->email}}"><i class="fas fa-envelope"></i>{{$web->email}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- Menu Bar Area Start -->
    <div class="header__area header__sticky">
        <div class="container">
            <div class="header__area-menubar three">
                <div class="header__area-menubar-left">
                    <div class="header__area-menubar-left-logo">
                        <a href="{{url('/')}}"><img class="dark-n" src="{{asset('home/images/'.$web->logo)}}" alt=""
                            style="width: 100px;">
                            <img class="light-n" src="{{asset('home/images/'.$web->logo)}}" alt="" style="width: 100px;"></a>
                    </div>
                </div>
                <div class="header__area-menubar-center">
                    <div class="header__area-menubar-center-menu three menu-responsive">
                        <ul id="mobilemenu">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="menu-item-has-children"><a href="#">Company</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Services</a>
                                <ul class="sub-menu">
                                    @foreach($injected->getSectors() as $sector)
                                        <li><a href="{{route('service.details',['id'=>$sector->id])}}" >{{$sector->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Sectors</a>
                                <ul class="sub-menu">
                                    @foreach($injected->getServices() as $service)
                                        <li><a href="{{route('service.details',['id'=>$service->id])}}" >{{$service->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Help</a>
                                <ul class="sub-menu">
                                    <li ><a href="{{url('faqs')}}" >Frequently Asked Questions</a></li>
                                    <li ><a href="{{url('terms')}}" >Terms & Conditions</a></li>
                                    <li ><a href="{{url('privacy')}}" >Privacy policy</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Investor Space</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('login')}}" >Login</a></li>

                                    <li><a href="{{route('register')}}" >Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header__area-menubar-right">
                    <div class="header__area-menubar-right-box">
                        <div class="header__area-menubar-right-box-btn">
                            <a class="btn-seven" href="{{route('register')}}">Get Started<i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                    <div class="responsive-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu Bar Area End -->
</div>
<!-- Header Area End -->
@yield('content')
<!-- Subscribe Area Start -->
<div class="subscribe">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="subscribe-title">
                    <h2>Join over 14k+ People investing with us</h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="subscribe-form">
                    <form action="#">
                        <a class="btn-seven" href="{{route('register')}}">Get Started</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Area End -->
<!-- Footer One Area Start -->
<div class="footer__three">
    <img class="footer__three-shape" src="{{asset('home/img/shape/footer-bg-2.png')}}" alt="">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 md-mb-30 col-12">
                <div class="footer__three-widget">
                    <div class="footer__three-widget-about">
                        <a href="{{url('/')}}"><img class="dark-n" src="{{asset('home/images/'.$web->logo)}}" alt="">
                            <img class="light-n" src="{{asset('home/images/'.$web->logo)}}" alt=""></a>
                        <p>
                            {{$siteName}} is a leading investment management organization that is dedicated to meeting
                            each client’s unique needs through a wide range of investment strategies. Our team of investment
                            experts is committed to increasing our clients’ returns on investment and fostering long-lasting
                            partnerships based on trust and open communication.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-7 xl-mb-30 col-6">
                <div class="footer__three-widget">
                    <h4>Head Office</h4>
                    <div class="footer__three-widget-location">
                        <div class="footer__three-widget-location-item">
                            <div class="footer__three-widget-location-item-icon">
                                <i class="far fa-map-marker-alt"></i>
                            </div>
                            <div class="footer__three-widget-location-item-info">
                                <a href="#">
                                    {!! $web->address !!}
                                </a>
                            </div>
                        </div>
                        @if(!empty($web->address2))
                            <h6>Branch Office</h6>
                            <div class="footer__three-widget-location-item">
                                <div class="footer__three-widget-location-item-icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="footer__three-widget-location-item-info">
                                    <a href="#">
                                        {!! $web->address2 !!}
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 sm-mb-30 col-6">
                <div class="footer__three-widget">
                    <h4>Company</h4>
                    <div class="footer__three-widget-solution">
                        <ul>
                            <li><a href="{{url('faqs')}}"><i class="far fa-chevron-double-right"></i>Help Center</a></li>
                            <li><a href="{{url('terms')}}"><i class="far fa-chevron-double-right"></i>terms & conditions</a></li>
                            <li><a href="{{url('privacy')}}"><i class="far fa-chevron-double-right"></i>privacy policy</a></li>
                            <li><a href="{{route('register')}}"><i class="far fa-chevron-double-right"></i>Create Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-5 col-6">
                <div class="footer__three-widget border-one tow">
                    <h4>Working Time</h4>
                    <div class="footer__three-widget-hour">
                        <p>Mon - fri : 24/7</p>
                        <p>sat : 24/7</p>
                        <p>Sunday: 24/7</p>
                        <div class="footer__three-widget-hour-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__three">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p>Copyright {{date('Y')}}  <a href="{{url('/')}}">{{$siteName}}</a> - All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer One Area End -->
<!-- Scroll Btn Start -->
<div class="scroll-up scroll-three">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
</div>
<!-- Scroll Btn End -->
<!-- Main JS -->
<script src="{{asset('home/js/jquery-3.6.0.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<!-- Counter Up JS -->
<script src="{{asset('home/js/jquery.counterup.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('home/js/popper.min.js')}}"></script>
<!-- Progressbar JS -->
<script src="{{asset('home/js/progressbar.min.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('home/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Swiper Bundle JS -->
<script src="{{asset('home/js/swiper-bundle.min.js')}}"></script>
<!-- Isotope JS -->
<script src="{{asset('home/js/isotope.pkgd.min.js')}}"></script>
<!-- Waypoints JS -->
<script src="{{asset('home/js/jquery.waypoints.min.js')}}"></script>
<!-- Mean Menu JS -->
<script src="{{asset('home/js/jquery.meanmenu.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('home/js/custom.js')}}"></script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
@stack('js')
<script src="//code.jivosite.com/widget/5mlmgmHz2y" async></script>

</body>
</html>
