@extends('home.base')
@section('content')
    @push('css')
        <style>
            .single-price {
                text-align: center;
                background: #262626;
                transition: .7s;
                margin-top: 20px;
            }
            .single-price h3 {
                font-size: 30px;
                color: #000;
                font-weight: 600;
                text-align: center;
                margin: 0;
                margin-top: -80px;
                margin-bottom: 1rem;
                font-family: poppins;
                color: #fff;
            }
            .single-price h4 {
                font-size: 20px;
                font-weight: 500;
                color: #fff;
            }
            .single-price h4 span.sup {
                vertical-align: text-top;
                font-size: 15px;
            }
            .deal-top {
                position: relative;
                background: #406AFF;
                font-size: 16px;
                text-transform: uppercase;
                padding: 136px 24px 0;
            }
            .deal-top::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -50px;
                width: 0;
                height: 0;
                border-top: 50px solid #406AFF;
                border-left: 175px solid transparent;
                border-right: 183px solid transparent;
            }
            .deal-bottom {
                padding: 56px 16px 0;
            }
            .deal-bottom ul {
                margin: 0;
                padding: 0;
            }
            .deal-bottom  ul li {
                font-size: 16px;
                color: #fff;
                font-weight: 300;
                margin-top: 16px;
                border-top: 1px solid #E4E4E4;
                padding-top: 16px;
                list-style: none;
            }
            .btn-area a {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #406AFF;
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: #406AFF;
            }
            .single-price:hover .deal-top {
                background: #262626;
            }
            .single-price:hover .deal-top:after {
                border-top: 50px solid #262626;
            }
            .single-price:hover .btn-area a {
                background: #262626;
            }
            /* ignore the code below */


            .link-area
            {
                position:fixed;
                bottom:20px;
                left:20px;
                padding:15px;
                border-radius:40px;
                background:#406AFF;
            }
            .link-area a
            {
                text-decoration:none;
                color:#fff;
                font-size:25px;
            }
            small {
                font-size: 12px;
                text-transform: initial;
            }
        </style>
    @endpush

    <!-- page-banner start -->
    <section class="banner overflow-hidden" style="background-image: url({{asset('home/img/mainslider3.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner__content">

                        <h1 class="title color-d_black mb-sm-10 mb-xs-5 mb-15">Welcome to
                            <span class="title text-primary mb-sm-10 mb-xs-5 mb-15"> {{$siteName}}</span>
                        </h1>

                        <div class="description font-la mb-40 mb-lg-35 mb-sm-30 mb-xs-25">
                            <p style="font-size:20px;">
                                Our investment strategy is based on a lot of study and analysis, and it consistently earns our clients
                                good returns. We take a long-term, diversified, and risk-management-focused strategy.
                            </p>
                        </div>

                        <a href="{{route('register')}}" class="theme-btn">Let's Get Started <i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- competitive-edge start -->
    <section class="competitive-edge overflow-hidden">
        <div class="container">
            <div class="row align-items-end mb-minus-30">
                <div class="col-xxl-4 col-lg-6">
                    <div class="competitive-edge__item d-flex align-items-center justify-content-between">
                        <div class="left d-flex align-items-center">
                            <div class="icon color-primary">
                                <i class="icon-process-1"></i>
                            </div>
                            <h6 class="title text-capitalize color-d_black">
                                Diversified Portfolio
                            </h6>
                        </div>

                        <a href="{{route('register')}}" class="arrow-right">
                            <i class="icon-arrow-right-2"></i>
                        </a>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-6">
                    <div class="competitive-edge__item d-flex align-items-center justify-content-between">
                        <div class="left d-flex align-items-center">
                            <div class="icon color-primary">
                                <i class="like-comment"></i>
                            </div>
                            <h6 class="title text-capitalize color-d_black">Daily Fixed Return</h6>
                        </div>

                        <a href="{{route('register')}}" class="arrow-right">
                            <i class="icon-arrow-right-2"></i>
                        </a>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-12">
                    <div class="competitive-edge__item d-flex competitive-edge__item-video justify-content-between flex-column">
                        <div class="left">
                            <h6 class="title text-capitalize color-white mb-10 mb-xs-5">Expert Management</h6>
                            <div class="description font-la color-white">
                                <p>
                                    Put your money in the capable hands of our professional team.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- competitive-edge end -->

    <!-- why-choose start -->
    <section class="why-choose pb-xs-80 pt-xs-80 pt-sm-100 pt-md-100 pt-120 pb-100 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose__media-wrapper d-flex flex-column">
                        <div class="video-play-btn">
                            <a href="#" class="popup-video" data-effect="mfp-move-from-top">
                                <i class="icon-play"></i></a>
                        </div>

                        <div class="why-choose__media">
                            <img src="{{asset('home/img/services/why-choose-2.png')}}" alt="" class="img-fluid">
                        </div>

                        <div class="global-country text-center">
                            <div class="number mb-5 color-white"><span class="counter">120</span>+</div>
                            <h6 class="title color-white font-la">We are global, and  <br>in  120+ countries</h6>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="why-choose__content mt-lg-60 mt-md-50 mt-sm-40 mt-xs-35">
                        <div class="why-choose__text mb-40 mb-md-35 mb-sm-30 mb-xs-30">
                            <span class="sub-title d-block fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-lg-20 mb-25"><img src="assets/img/team-details/badge-line.svg" class="img-fluid mr-10" alt=""> Why choose us</span>
                            <h2 class="title color-pd_black">
                                Execute your trades on our award-winning platform
                            </h2>
                        </div>

                        <div class="why-choose__item-wrapper d-grid justify-content-between">
                            <div class="why-choose__item">
                                <div class="icon mb-15 mb-md-10 mb-xs-5 color-primary">
                                    <i class="icon-management"></i>
                                </div>

                                <h5 class="title color-d_black fw-500 mb-10">IT Management</h5>

                                <div class="description font-la">
                                    <p>We handle all the technical aspect of your investment, and you see the performance right in your dashboard.</p>
                                </div>
                            </div>

                            <div class="why-choose__item">
                                <div class="icon mb-15 mb-md-10 mb-xs-5 color-primary">
                                    <i class="icon-lawyer"></i>
                                </div>

                                <h5 class="title color-d_black fw-500 mb-10"> Consulting</h5>

                                <div class="description font-la">
                                    <p>We offer a free, no-charge investment consultancy service for you if you need it.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq mt-30 mt-sm-25 mt-xs-20" id="faq">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h-faq-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1" aria-expanded="true" aria-controls="faq-1">
                                        <span>01.</span> Сharts and advanced analytical tools
                                    </button>
                                </h2>

                                <div id="faq-1" class="accordion-collapse collapse show" aria-labelledby="h-faq-1" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        <p>
                                            Stay in the loop and see how your investment is performing, and earn daily returns
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h-faq-2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
                                        <span>02.</span> Award winning platforms and apps
                                    </button>
                                </h2>

                                <div id="faq-2" class="accordion-collapse collapse" aria-labelledby="h-faq-2" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        <p>
                                            With over 5 awards and certifications from reputable industry players for consistency and excellency.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h-faq-3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                                        <span>03.</span> 24/7 Customer support in 10+ languages
                                    </button>
                                </h2>

                                <div id="faq-3" class="accordion-collapse collapse" aria-labelledby="h-faq-3" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        <p>
                                            We have an ever active support channel to help address all your challenges, and ensure that the best support
                                            is offered whenever you need it.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why-choose end -->

    <!-- similar-work start -->
    <section class="similar-work services-work bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-9">
                    <div class="employee-friendly__content">
                        <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block">
                            <img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt=""> Sectors</span>
                        <h2 class="title color-d_black">Stable <span>Sectors</span></h2>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="slider-controls mt-sm-30">
                        <div class="slider-arrows d-flex align-content-center justify-content-sm-end"></div>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="similar-work__item mb-30 d-flex justify-content-between flex-column">
                            <div class="top d-flex align-items-center">
                                <div class="icon color-white text-center">
                                    <i class="icon-groth"></i>
                                </div>

                                <h4 class="title color-d_black">
                                    <a href="{{route('service.details',['id'=>$service->id])}}">
                                        {{$service->title}}
                                    </a>
                                </h4>
                            </div>

                            <div class="bottom">
                                <div class="media overflow-hidden">
                                    <img src="{{asset('home/serv/'.$service->photo)}}" class="img-fluid" alt="">
                                </div>

                                <div class="text pt-30 pr-30 pb-30 pl-30 pt-sm-20 pt-xs-15 pr-sm-20 pr-xs-15 pb-sm-20 pb-xs-15 pl-sm-20 pl-xs-15 font-la">
                                    <p>
                                        {{\Illuminate\Support\Str::words($service->short,5)}}
                                    </p>
                                </div>

                                <a href="{{route('service.details',['id'=>$service->id])}}" class="theme-btn text-center fw-600">
                                    Discover More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- company-skill start -->
    <section class="company-skill company-skill-home-3 pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-90 overflow-hidden">
        <div class="container">
            <a href="#" class="popup-video" data-effect="mfp-move-from-top"><i class="icon-play"></i></a>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="our-company__meida">
                        <img src="{{asset('home/img/about/our-company-1.png')}}" alt="" class="img-fluid">

                        <div class="years-experience overflow-hidden mt-20 mt-sm-10 mt-xs-10 text-center">
                            <div class="number mb-5 color-white">
                                <span class="counter">7</span><sup>+</sup>
                            </div>

                            <h5 class="title color-white">Years Experience</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="our-company__meida border-radius">
                        <img src="{{asset('home/img/about/our-company-2.png')}}" alt="" class="img-fluid">

                        <div class="horizental-bar"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="company-skill__content mt-md-50 mt-sm-45 mt-xs-40 ml-auto">
                        <span class="sub-title d-block fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-20">
                            <img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt="">About {{$siteName}}</span>
                        <h2 class="title color-pd_black mb-25 mb-xs-10 mb-sm-15">Providing <span>High Quality Services</span></h2>

                        <div class="description font-la">
                            <p>
                                {{$siteName}} provides first-rate asset management services across a wide range of industries, including
                                real estate, gold funds, cannabis, and cryptocurrencies. We focus on fostering lasting relationships
                                with clients and providing superior returns. You can rely on us to deliver outstanding results.
                            </p>
                            <p class="about-one__text-2">
                                Throughout our existence, we've aimed to balance lower risk and higher profits for our customers through innovative analysis, information dispersion, and expert assistance. Our team includes experienced professionals with diverse and in-depth knowledge, enhancing the entire investing process.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- company-skill end -->

    <!-- counter-area start -->
    <div class="counter-area pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item d-flex align-items-center">
                        <div class="icon color-primary">
                            <i class="icon-process-1"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-primary"><span class="counter">283</span>M+</div>
                            <div class="description font-la">Successful Investments</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item d-flex align-items-center">
                        <div class="icon color-primary">
                            <i class="icon-support-2"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-primary"><span class="counter">150</span>+</div>
                            <div class="description font-la">Expert Staff</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item d-flex align-items-center">
                        <div class="icon color-primary">
                            <i class="icon-coffee-2"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-primary"><span class="counter">20</span>K+</div>
                            <div class="description font-la">Investors</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item d-flex align-items-center">
                        <div class="icon color-primary">
                            <i class="icon-teamwork-1"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-primary"><span class="counter">95</span>%</div>
                            <div class="description font-la">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-area end -->

    <div class="pricing-area" style="margin-bottom: 5rem;margin-top: 5rem;">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our Packages</span>
                <h2>Specialized Investment Packages</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-price">
                            <div class="deal-top">
                                <h3>{{$package->name}}</h3>
                                <h4> {{$package->roi}}%/ <span class="sup">{{$option->getReturnType($package->returnType)}}</span> </h4>
                                <small class="text-white">{{$package->note}}</small>
                            </div>
                            <div class="deal-bottom">
                                <ul class="deal-item">
                                    <li>
                                        Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li>Profit return: {{$package->roi}}% {{$option->getReturnType($package->returnType)}}</li>
                                    <li>Contract Duration: {{$package->Duration}}</li>
                                    <li>Referral Bonus: {{$package->referral}}% </li>
                                </ul>
                                <div class="btn-area">
                                    <a href="{{route('register')}}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- testimonial start -->
    <section class="testimonial bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-110 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial__content mb-60 mb-md-50 mb-sm-40 mb-xs-30 text-center">
                        <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15"><img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt=""> Testimonials</h6>
                        <h2 class="title color-d_black">{{$siteName}} <span>Investor's Feedback</span></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container_testimonial">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div class="slider-item">
                            <div class="testimonial__item">
                                <div class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="https://ui-avatars.com/api/?name=F+Juanita" class="img-fluid" alt="">
                                        </div>

                                        <div class="meta">
                                            <h6 class="name fw-500 text-uppercase color-d_black">Florence Juanita </h6>
                                        </div>
                                    </div>

                                    <div class="right">
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>
                                        "{{$siteName}} Real Estate helped me find the perfect investment property. Their expertise and
                                        guidance made the process smooth and stress-free. Highly recommend!"
                                    </p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">

                                    <div class="quote color-primary">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item border--primary">
                                <div class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="https://ui-avatars.com/api/?name=Ashikul+I" class="img-fluid" alt="">
                                        </div>

                                        <div class="meta">
                                            <h6 class="name fw-500 text-uppercase color-d_black">Ashikul Ishalm</h6>
                                        </div>
                                    </div>

                                    <div class="right">
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"I was impressed by the level of professionalism and attention to detail provided by {{$siteName}} Real Estate. They truly went above and beyond to ensure my satisfaction."</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">


                                    <div class="quote color-primary">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item border-red">
                                <div class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="https://ui-avatars.com/api/?name=Ashley+C" class="img-fluid" alt="">
                                        </div>

                                        <div class="meta">
                                            <h6 class="name fw-500 text-uppercase color-d_black">Ashley Cara</h6>
                                        </div>
                                    </div>

                                    <div class="right">
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"I highly recommend {{$siteName}} Investment services to anyone looking to invest and earn.
                                        Their professionalism, expertise, and personalized service are second to none."</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="quote color-primary">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item border--primary">
                                <div class="testimonial__item-header d-flex justify-content-between align-items-center mb-35 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="https://ui-avatars.com/api/?name=Sarah+Martinez" class="img-fluid" alt="">
                                        </div>

                                        <div class="meta">
                                            <h6 class="name fw-500 text-uppercase color-d_black">Sarah Martinez</h6>
                                        </div>
                                    </div>

                                    <div class="right">
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"As someone new to cryptocurrency, {{$siteName}}'s educational resources and personalized guidance helped me navigate the complexities of trading with confidence."</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">

                                    <div class="quote color-primary">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end -->


    <!-- blog-news start -->
    <section class="blog-news pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden" style="background-image: url({{asset('home/img/home-3/blog-new-bg.png')}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="blog-news__content">
                        <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt=""> Blog & News</span>
                        <h2 class="title color-d_black">{{$siteName}} Latest <span>Blog & News</span></h2>
                    </div>
                </div>

            </div>

            <div class="blog-news__bottom mt-65 mt-sm-50 mt-xs-40">
                <div class="row mb-minus-30">

                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="blog-item mb-30">
                            <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                            <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- blog-news end -->


@endsection
