
<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/owl.theme.default.min.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/owl.carousel.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/animate.min.css')}}">
    <!-- Boxicons Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/boxicons.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('home/css/flaticon.css')}}">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/meanmenu.min.css')}}">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{asset('home/css/nice-select.min.css')}}">
    <!-- Odometer Min CSS-->
    <link rel="stylesheet" href="{{asset('home/css/odometer.min.css')}}">
    <!-- Magnific Min CSS-->
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('home/images/'.$web->logo)}}">
    <meta name="description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs.">
    <meta name="keywords" content="finance, invest, goal, values, income, earnings, gold, forex, equity">
    <meta name="url" content="/">

    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
</head>

<body>
@inject('injected','App\Defaults\Custom')
<!-- Start Preloader Area -->
{{--<div class="preloader">--}}
{{--    <div class="lds-ripple">--}}
{{--        <div></div>--}}
{{--        <div></div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Preloader Area -->

<!-- Start Arduix Navbar Area -->
<div id="header" class="arduix-nav-style">
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="{{url('/')}}" class="logo">
                <img src="{{asset('home/images/'.$web->logo)}}" alt="Logo" style="width:120px;">
            </a>
        </div>
        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('home/images/'.$web->logo)}}" alt="Logo" style="width:150px;">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{url('/')}}" class="nav-link dropdown-toggle active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('about')}}" class="nav-link dropdown-toggle">
                                    About
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Service
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach($injected->getServices() as $servi)
                                        <li class="nav-item">
                                            <a href="{{route('service.details',['id'=>$servi->id])}}" class="nav-link">{{$servi->title}}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Pages
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{url('affiliate')}}" class="nav-link">Affiliates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('plans')}}" class="nav-link">Plans</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('faqs')}}" class="nav-link">Faqs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('terms')}}" class="nav-link">Terms & Conditions</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Account
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('login')}}" class="nav-link">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('register')}}" class="nav-link">Register</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('contact')}}" class="nav-link dropdown-toggle">
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <!-- Start Other Option -->
                        <div class="others-option">
                            <a class="default-btn" href="{{route('login')}}">
                                Log In
                                <i class="bx bx-log-in-circle"></i>
                            </a>
                        </div>
                        <!-- End Other Option -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Arduix Navbar Area -->

@yield('content')


<!-- Start Footer Top Area -->
<footer class="footer-top-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <a href="{{url('/')}}">
                        <img src="{{asset('home/images/'.$web->logo)}}" alt="Image">
                    </a>
                    <p>
                        {{$siteName}} remains your steadfast companion, offering not just investment opportunities but a holistic
                        approach to financial well-being. With a global vision and a local impact, we continue to shape
                        the future of finance, one successful investment at a time.
                    </p>
                    <ul class="social-icon">
                        <li>
                            <a href="#">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-pinterest-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>Services</h3>
                    <ul>
                        @inject('injected','App\Defaults\Custom')
                        @foreach($injected->getServices() as $serv)
                            <li>
                                <a href="{{route('service.details',['id'=>$serv->id])}}">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    {{$serv->title}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>Important Links</h3>
                    <ul>
                        <li>
                            <a href="{{url('about')}}">
                                <i class="right-icon bx bx-chevrons-right"></i>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{url('faq')}}">
                                <i class="right-icon bx bx-chevrons-right"></i>
                                FAQs
                            </a>
                        </li>
                        <li>
                            <a href="{{url('contact')}}">
                                <i class="right-icon bx bx-chevrons-right"></i>
                                Contact
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-widget">
                    <h3>Information</h3>
                    <ul class="information">
                        @if(!empty($web->phone))
                            <li class="address">
                                <i class="flaticon-call"></i>
                                <span>Phone</span>
                                <a href="tel:{{$web->phone}}">
                                    {{$web->phone}}
                                </a>
                            </li>
                        @endif
                        <li class="address">
                            <i class="flaticon-envelope"></i>
                            <span>Email</span>
                            <a href="mailto:{{$web->email}}">
                                {{$web->email}}
                            </a>
                        </li>
                        <li class="address">
                            <i class="flaticon-maps-and-flags"></i>
                            <span>Address</span>
                            {{$web->address}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-shape">
        <img src="{{asset('home/img/shape/footer-shape-one.png')}}" alt="Image">
        <img src="{{asset('home/img/shape/footer-shape-two.png')}}" alt="Image">
    </div>
</footer>
<!-- End Footer Top Area -->

<!-- Start Footer Bottom Area -->
<footer class="footer-bottom-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="copy-right">
                    <p>
                       &copy; {{$siteName}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="privacy">
                    <ul>
                        <li>
                            <a href="{{url('terms')}}">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="{{url('privacy')}}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="designed">
                    <p>&copy; {{date('Y')}} {{$siteName}}. All right reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Bottom Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="bx bx-chevrons-up"></i>
    <i class="bx bx-chevrons-up bx-fade-up"></i>
</div>
<!-- End Go Top Area -->


<!-- Jquery Min JS -->
<script src="{{asset('home/js/jquery.min.js')}}"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="{{asset('home/js/bootstrap.bundle.min.js')}}"></script>
<!-- Meanmenu Min JS -->
<script src="{{asset('home/js/meanmenu.min.js')}}"></script>
<!-- Wow Min JS -->
<script src="{{asset('home/js/wow.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('home/js/owl.carousel.min.js')}}"></script>
<!-- Nice Select Min JS -->
<script src="{{asset('home/js/nice-select.min.js')}}"></script>
<!-- Appear Min JS -->
<script src="{{asset('home/js/appear.min.js')}}"></script>
<!-- Odometer Min JS -->
<script src="{{asset('home/js/odometer.min.js')}}"></script>
<!-- Magnific Min JS -->
<script src="{{asset('home/js/magnific-popup.min.js')}}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{asset('home/js/ajaxchimp.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{asset('home/js/form-validator.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('home/js/contact-form-script.js')}}"></script>
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
        }, 1200000);
        run = setInterval(request, interval);
    }
</script>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '244683a5af117884abd60bf5ab5bf0f277e434d6';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body>
</html>
