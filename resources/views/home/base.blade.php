
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="dark light">
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
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/fonts/typography/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('home/fonts/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/plugins/aos/aos.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/plugins/fancybox/jquery.fancybox.min.css')}}">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/demo.css')}}">
    <style>
        @import url('https://fonts.cdnfonts.com/css/clash-display');
        @import url('https://fonts.googleapis.com/css2?family=Syne:wght@500;600;700&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Public+Sans:wght@500;600;700;800;900&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@500;600;700&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap');
        @import url('https://fonts.cdnfonts.com/css/clash-display');
    </style>
</head>

<body>

@inject('injected','App\Defaults\Custom')
<div class="preloader-wrapper">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="page-wrapper overflow-hidden">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     Header Area
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <header class="site-header site-header--menu-left site-header--transparent site-header--absolute">
        <div class="container">
            <nav class="navbar site-navbar">
                <!--~~~~~~~~~~~~~~~~~~~~~~~~
                  Brand Logo
              ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="brand-logo">
                    <a href="{{url('/')}}">
                        <!-- light version logo (logo must be black)-->
                        <img class="logo-light" src="{{asset('home/images/'.$web->logo)}}" alt="brand logo">
                        <!-- Dark version logo (logo must be White)-->
                    </a>
                </div>
                <div class="menu-block-wrapper ">
                    <div class="menu-overlay"></div>
                    <nav class="menu-block" id="append-menu-header">
                        <div class="mobile-menu-head">
                            <a href="{{url('/')}}">
                                <img src="{{asset('home/images/'.$web->logo)}}" alt="brand logo" style="width: 100px;">
                            </a>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main">
                            <li class="nav-item">
                                <a href="{{url('/')}}" class="nav-link-item drop-trigger">Home</a>
                            </li>

                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Company<i class="fas fa-angle-down"></i>
                                </a>
                                <div class="sub-menu" id="submenu-13">
                                    <ul class="sub-menu_list">
                                        <li class="sub-menu_item"><a href="{{url('about')}}">About Us</a></li>
                                        <li class="sub-menu_item"><a href="{{url('plan')}}">Plans</a></li>
                                        <li class="sub-menu_item"><a href="{{url('contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Services<i class="fas fa-angle-down"></i>
                                </a>
                                <div class="sub-menu" id="submenu-13">
                                    <ul class="sub-menu_list">
                                        @foreach($injected->getSectors() as $sector)
                                            <li class="sub-menu_item"><a href="{{route('service.details',['id'=>$sector->id])}}" >{{$sector->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Sectors<i class="fas fa-angle-down"></i>
                                </a>
                                <div class="sub-menu" id="submenu-13">
                                    <ul class="sub-menu_list">
                                        @foreach($injected->getServices() as $service)
                                            <li class="sub-menu_item"><a href="{{route('service.details',['id'=>$service->id])}}" >{{$service->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Help<i class="fas fa-angle-down"></i>
                                </a>
                                <div class="sub-menu" id="submenu-13">
                                    <ul class="sub-menu_list">
                                        <li class="sub-menu_item"><a href="{{url('faqs')}}" >Frequently Asked Questions</a></li>
                                        <li class="sub-menu_item"><a href="{{url('terms')}}" >Terms & Conditions</a></li>
                                        <li class="sub-menu_item"><a href="{{url('privacy')}}" >Privacy policy</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Investor Space<i class="fas fa-angle-down"></i>
                                </a>
                                <div class="sub-menu" id="submenu-13">
                                    <ul class="sub-menu_list">
                                        <li class="sub-menu_item"><a href="{{route('login')}}" >Login</a></li>
                                        <li class="sub-menu_item"><a href="{{route('register')}}" >Register</a></li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~
                mobile menu trigger
               ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="mobile-menu-trigger">
                    <span></span>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~
                  Mobile Menu Hamburger Ends
                ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="header-cta-btn-wrapper">
                    <a href="{{route('login')}}" class="btn-masco btn-masco btn-masco--header btn-masco--header-secondary">
                        <span>Login</span>
                    </a>
                    <a href="{{route('register')}}" class="btn-masco btn-masco btn-masco--header btn-primary-l05">
                        <span>Sign up free</span></a>
                </div>
            </nav>
        </div>
    </header>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     navbar-
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    @yield('content')

    <div class="footer footer-padding-default footer--dark footer-l05 bg-black-3">
        <div class="container">
            <div class="row row--footer-main">
                <div class="col-md-8 col-lg-5 col-xl-5 col-xxl-4 col-12">
                    <div class="footer__content-block">
                        <div class="footer__content-text">
                            <div class="footer-brand">
                                <img src="{{asset('home/images/'.$web->logo)}}" style="width: 150px;" alt="image alt">
                            </div>
                            <p>
                                {{$siteName}} is a leading investment management organization that is dedicated to meeting
                                each client’s unique needs through a wide range of investment strategies. Our team of investment
                                experts is committed to increasing our clients’ returns on investment and fostering long-lasting
                                partnerships based on trust and open communication.
                            </p>
                        </div>
                        <a href="{{$web->email}}" class="footer-link">{{$web->email}}</a>
                        <br>
                    </div>
                </div>
                <div class=" col-lg-7 col-xl-6 col-xxl-7 offset-xl-1">
                    <div class="row row--list-block">
                        <div class="col-auto col-md-4 col-lg-auto col-xl-auto col-xxl-auto">
                            <h3 class="footer-title">Primary Pages</h3>
                            <ul class="footer-list">
                                <li><a href="{{url('faqs')}}">Help Center</a></li>
                                <li><a href="{{url('terms')}}">terms & conditions</a></li>
                                <li><a href="{{url('privacy')}}">privacy policy</a></li>
                                <li><a href="{{route('register')}}">Create Account</a></li>
                            </ul>
                        </div>
                        <div class="col-auto col-md-4 col-lg-auto col-xl-auto col-xxl-auto">
                            <h3 class="footer-title">Utility pages</h3>
                            <ul class="footer-list">
                                <li ><a href="{{url('faqs')}}" >Frequently Asked Questions</a></li>
                                <li ><a href="{{url('terms')}}" >Terms & Conditions</a></li>
                                <li ><a href="{{url('privacy')}}" >Privacy policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-block">
            <div class="container">
                <div class="copyright-inner text-center  copyright-border">
                    <p>© Copyright {{date('Y')}}, All Rights Reserved by {{$siteName}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor Scripts -->
<script src="{{asset('home/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('home/plugins/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('home/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugin's Scripts -->
<script src="{{asset('home/plugins/inlineSvg/inlineSvg.min.js')}}"></script>
<script src="{{asset('home/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('home/plugins/aos/aos.min.js')}}"></script>
<script src="{{asset('home/plugins/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('home/plugins/isotope/packery.pkgd.min.js')}}"></script>
<script src="{{asset('home/plugins/isotope/image.loaded.js')}}"></script>
<script src="{{asset('home/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('home/plugins/countdown/jquery.countdown.js')}}" defer></script>
<script src="{{asset('home/js/menu.js')}}"></script>
<script src="{{asset('home/js/custom.js')}}"></script>
<!-- Activation Script -->
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
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '3097fdcfdfe7dc238cebd7cedb38232f8a5612dc';
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
