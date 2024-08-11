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

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 8  : Hero Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-5_hero-section bg-offwhite-3">
        <div class="container">
            <div class="row row--custom">
                <div class="col-lg-6 col-md-7 col-sm-8 col-10" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="300">
                    <div class="home-5_hero-image-block">
                        <div class="home-5_hero-image">
                            <img src="{{asset('home/image/financials.png')}}" alt="hero image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10" data-aos-duration="1000" data-aos="fade-right" data-aos-delay="300">
                    <div class="home-5_hero-content">
                        <div class="home-5_hero-content-text">
                            <h1 class="home-5_hero-content__title heading-xl heading-xl--general-sans text-l5-secondary">
                                Reliable and secured investment strategies.
                            </h1>
                            <p>
                                Our investment strategy is based on a lot of study and analysis, and it consistently earns our clients
                                good returns. We take a long-term, diversified, and risk-management-focused strategy.
                            </p>
                        </div>
                        <div class="home-5_hero-content-newsletter">
                            <form action="#" class="newsletter-form-2">
                                <a href="{{route('register')}}" class="btn-masco btn-primary-l05" type="button">Get Started</a>
                            </form>
                            <span class="home-5_hero-content-review-text"><img src="{{asset('home/image/home-5/review-icon.svg')}}" alt="">( 4.8 out of 5 Rating)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 5  : Feature Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-5_feature-section padding-bottom-120 bg-cream">
        <div class="container">
            <div class="home-5_feature-section-wrapper">
                <div class="row justify-content-center text-center">
                    <div class="col-xxl-6 col-lg-7 col-md-9 col-sm-12 col-xs-11">
                        <div class="section-heading">
                            <h2 class="section-heading__title heading-md heading-md--general-sans text-l5-secondary">Turn traffic with insanely SEO &amp; growth into revenue</h2>
                        </div>
                    </div>
                </div>
                <div class="row feature-widget-devider justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-widget-2">
                            <div class="feature-widget-2__icon">
                                <img src="{{asset('home/image/home-5/feature-1.png')}}" alt="feature icon">
                            </div>
                            <h4 class="feature-widget-2__title">Diversified Portfolio </h4>
                            <p>
                                We invest in multiple industry - we are industry agnostic . This helps build a reputable
                                portfolio share for our clients.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-widget-2">
                            <div class="feature-widget-2__icon">
                                <img src="{{asset('home/image/home-5/feature-2.png')}}" alt="feature icon">
                            </div>
                            <h4 class="feature-widget-2__title">Daily Fixed Return</h4>
                            <p>
                                Earn on a daily basis with {{$siteName}}. We offer the best shares in the market.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-widget-2">
                            <div class="feature-widget-2__icon">
                                <img src="{{asset('home/image/home-5/feature-3.png')}}" alt="feature icon">
                            </div>
                            <h4 class="feature-widget-2__title">Expert Management</h4>
                            <p>
                                Put your money in the capable hands of our professional team. A team notable for growth and yield.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 5  : Content Section 1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-5_content-section-1 section-padding-120 bg-offwhite-3">
        <div class="container">
            <div class="row row--custom ">
                <div class="col-xl-6 col-lg-5 col-md-6 col-7" data-aos-duration="1000" data-aos="fade-right">
                    <div class="home-5_content-image-1 ">
                        <img src="{{asset('home/image/home-5/content-image-1.png')}}" alt="alternative text">
                        <div class="home-5_content-image-1-shape">
                            <img src="{{asset('home/image/home-5/content-image-1-shape.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md heading-md--general-sans text-l5-secondary">
                                About {{$siteName}}
                            </h2>
                            <p>
                                {{$siteName}} provides first-rate asset management services across a wide range of industries, including
                                real estate, gold funds, cannabis, and cryptocurrencies. We focus on fostering lasting relationships
                                with clients and providing superior returns. You can rely on us to deliver outstanding results.
                            </p>
                            <p>
                                Throughout our existence, we've aimed to balance lower risk and higher profits for our customers through innovative
                                analysis, information dispersion, and expert assistance. Our team includes experienced professionals with diverse and
                                in-depth knowledge, enhancing the entire investing process.
                            </p>
                            <div class="home-5_hero-content-newsletter">
                                <form action="#" class="newsletter-form-2">
                                    <a href="{{url('about')}}" class="btn-masco btn-primary-l05" type="button">Read More</a>
                                </form>
                            </div>
                        </div>
                        <div class="content__stats-block">
                            <div class="stat-single">
                                <span class="stat-single__count "> 98%</span>
                                <span class="stat-single__text">
                        Average Conversion Rate
                    </span>
                            </div>
                            <div class="stat-single">
                                <span class="stat-single__count"> 60M+</span>
                                <span class="stat-single__text"> Returns Generated</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 5  : Service Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-5_service-section section-padding-120">
        <div class="container">
            <div class="home-5_service-section-shape">
                <img src="{{asset('home/image/home-5/service-shape.png')}}" alt="service shape">
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-xxl-6 col-lg-7 col-md-9">
                    <div class="section-heading">
                        <h2 class="section-heading__title heading-md heading-md--general-sans text-white">
                            Services and Industries we invest and trade in.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gutter-y-50">
                @foreach($services as $key=> $service)
                    <div class="col-lg-4 col-md-6 col-xs-10" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-widget">
                            <h4 class="service-widget__head">{{$key+1}}.</h4>
                            <div class="service-widget__body">
                                <h4 class="service-widget__title">{{$service->title}}</h4>
                                <p>
                                    {!! str_replace('MYSITE',$siteName,\Illuminate\Support\Str::words($service->content,30)) !!}
                                </p>
                            </div>
                            <a href="{{route('service.details',['id'=>$service->id])}}" class=" btn-link btn-arrow service-widget__link">Discover More </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 5  : Content Section 2
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-5_content-section-2 section-padding-120 bg-offwhite-3">
        <div class="container">
            <div class="row row--custom ">
                <div class="col-xl-6 col-lg-5 col-md-6 col-7" data-aos-duration="1000" data-aos="fade-left">
                    <div class="home-5_content-image-2 ">
                        <img src="{{asset('home/image/wisefinance.svg')}}" alt="alternative text">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-right">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black text-l5-secondary">
                                Wise financial Growth Projectile
                            </h2>
                            <p>
                                Our expertise over th years has helped us craft a success projectile with which we have continued to
                                surpass every financial hurdles on the way.
                                We capable hands on deck, we look towards a brighter fiscal year all round - with all our investors
                                receiving their full returns.
                            </p>
                        </div>
                        <div class="content-button-block">
                            <a href="{{url('about')}}" class="btn-masco btn-primary-l05 btn-fill--up"><span>Explore More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 5  : Process Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-5_process-section bg-offwhite-3">
        <div class="container">
            <div class="home-5_process-devider">
                <div class="row justify-content-center text-center">
                    <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-10">
                        <div class="section-heading">
                            <h2 class="section-heading__title fw-600 heading-md heading-md--general-sans text-l5-secondary">
                                We have a simple, yet effective investment process</h2>
                        </div>
                    </div>
                </div>
                <div class="row process-widget-row">
                    <div class="col-md-6 col-lg-4">
                        <div class="process-widget">
                            <div class="process-widget__count">
                                <span>1</span>
                            </div>
                            <div class="process-widget__body">
                                <h3 class="process-widget__title">Create an account</h3>
                                <p>Register for an account and get approved.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="process-widget">
                            <div class="process-widget__count">
                                <span>2</span>
                            </div>
                            <div class="process-widget__body">
                                <h3 class="process-widget__title">Deposit & Invest</h3>
                                <p>
                                    Fund your account and proceed to buying a package in the sector of your choice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="process-widget">
                            <div class="process-widget__count">
                                <span>3</span>
                            </div>
                            <div class="process-widget__body">
                                <h3 class="process-widget__title">Earn & Withdraw</h3>
                                <p>
                                    At the end of the investment cycle, you can proceed to withdraw your earnings or
                                    reinvest it for a compound yield.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 5 Team Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="home-5_team-section section-padding">
        <div class="container">
            <div class="section-heading section-heading--row">
                <div class="row justify-content-center text-center text-md-initial justify-content-md-between">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-xs-10">
                        <h2 class="section-heading__title heading-md heading-md--general-sans text-l5-secondary">Our experts are available to assist you</h2>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <div class="section-heading__button">
                            <a href="team" class="btn-masco btn-primary-l05 btn-fill--up">
                                <span>Meet All Members</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row team-card-row">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <img src="{{asset('home/image/home-5/team-section-image-1.png')}}" alt="Team Member Image">
                        <div class="team-card__body">
                            <h4 class="team-card__name">"Cameron Williamsons"</h4>
                            <div class="team-card__body-bottom">
                                <span class="team-card__position">"Financial Advisor "</span>
                                <div class="team-card__social-links">
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <img src="{{asset('home/image/home-5/team-section-image-2.png')}}" alt="Team Member Image">
                        <div class="team-card__body">
                            <h4 class="team-card__name">"Leslie Sandra "</h4>
                            <div class="team-card__body-bottom">
                                <span class="team-card__position">"Financial Advisor   "</span>
                                <div class="team-card__social-links">
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <img src="{{asset('home/image/home-5/team-section-image-3.png')}}" alt="Team Member Image">
                        <div class="team-card__body">
                            <h4 class="team-card__name">"E Howard "</h4>
                            <div class="team-card__body-bottom">
                                <span class="team-card__position">"Financial Broker"</span>
                                <div class="team-card__social-links">
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <img src="{{asset('home/image/home-5/team-section-image-4.png')}}" alt="Team Member Image">
                        <div class="team-card__body">
                            <h4 class="team-card__name">"Hardwaton E "</h4>
                            <div class="team-card__body-bottom">
                                <span class="team-card__position">"Financial Broker"</span>
                                <div class="team-card__social-links">
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Home 5 : testimonial Section
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="home-5_testimonial-section padding-bottom-120 bg-offwhite-3">
        <div class="container">
            <div class="home-5_testimonial-wrapper">
                <div class="row justify-content-center text-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">
                        <div class="section-heading">
                            <h2 class="section-heading__title heading-md heading-md--general-sans text-l5-secondary">We are the best from our client&#39;s point of view</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--custom">
                    <div class="col-lg-4 col-md-5 col-sm-6 col-7">
                        <div class="testimonial-widget-3__image-block">
                            <img src="{{asset('home/image/home-5/testimonial-image-shape.svg')}}" alt="testimonial image">
                            <div class="testimonial-widget-3__image absolute-center">
                                <img src="https://ui-avatars.com/api/?name=F+Juanita" alt="testimonial image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 ">
                        <div class="testimonial-widget-3">
                            <div class="testimonial-widget-3__text-block">
                                <div class="testimonial-widget-3__icon">
                                    <img src="{{asset('home/image/home-6/quote.png')}}" alt="">
                                </div>
                                <p>"{{$siteName}} Real Estate helped me find the perfect investment property. Their expertise and
                                    guidance made the process smooth and stress-free. Highly recommend!"</p>
                                <div class="testimonial-widget-3__user-block">
                                    <h4 class="testimonial-widget-3__user-name">Florence Juanita</h4>
                                    <span class="testimonial-widget-3__user-position">Investor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
    Home 5 : CTA
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="cta-home-5 padding-top-100">
        <div class="container">
            <div class="cta-home-5-wrapper">
                <div class="row row--custom">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-12">
                        <div class="cta-text-block">
                            <h2 class="heading-md heading-md--general-sans text-l5-secondary">Are you ready to increase your financial standing?</h2>
                        </div>
                    </div>
                    <div class="col-xl-auto col-lg-4 col-md-5 col-xs-8 col-12">
                        <div class="cta-home-5-button">
                            <a href="{{route('register')}}" class="btn-masco btn-secondary-l05 btn-fill--up">
                                <span>Let's help your grow your asset</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
