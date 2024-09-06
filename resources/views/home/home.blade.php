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
                background: rgb(18, 166, 202);
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
                border-top: 50px solid rgb(18, 166, 202);
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
                background: rgb(18, 166, 202);
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: rgb(18, 166, 202);
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
                background:rgb(18, 166, 202);
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

    <!-- Main Slider -->
    <section class="slider-two">
        <div class="single-item-carousel owl-carousel owl-theme">

            <!-- Slide -->
            <div class="slide">
                <div class="slider-two_image-layer" style="background-image:url({{asset('home/images/main-slider/7.avif')}})"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-two-content">
                        <div class="slider-two_inner">
                            <div class="slider-two_title">Our Advantage</div>
                            <h1 class="slider-two_heading">We help investors solve <br> complex financial problems.</h1>
                            <div class="slider-two_text">
                                With our integration of a Robust AI model, we are able to solve <br/> complex financial needs
                                of our users in minutes.
                            </div>
                            <!-- Button Box -->
                            <div class="slider-two_button-box d-flex align-items-center flex-wrap">
                                <a class="btn-style-three theme-btn clearfix" href="{{route('register')}}">
                                    <span class="icon flaticon-user"></span>
                                    <div class="btn-wrap">
                                        <span class="text-one">Get Started</span>
                                        <span class="text-two">Get Started</span>
                                    </div>
                                </a>
                                <a class="btn-style-four theme-btn" href="{{route('login')}}">
                                    <span class="icon flaticon-cog"></span>
                                    <div class="btn-wrap">
                                        <span class="text-one">Login</span>
                                        <span class="text-two">Login</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="slider-two_image-layer" style="background-image:url({{asset('home/images/main-slider/retired.avif')}})"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-two-content">
                        <div class="slider-two_inner">
                            <div class="slider-two_title">Our Progression</div>
                            <h1 class="slider-two_heading text-success">Grow your Finance <br> and prepare for Retirement</h1>
                            <div class="slider-two_text">
                                Retire in grand style with our investment plans crafted <br/>just for you to help you
                                grow your wealth portfolio.
                            </div>
                            <!-- Button Box -->
                            <div class="slider-two_button-box d-flex align-items-center flex-wrap">
                                <a class="btn-style-three theme-btn clearfix" href="{{route('register')}}">
                                    <span class="icon flaticon-user"></span>
                                    <div class="btn-wrap">
                                        <span class="text-one">Get Started</span>
                                        <span class="text-two">Get Started</span>
                                    </div>
                                </a>
                                <a class="btn-style-four theme-btn" href="{{route('login')}}">
                                    <span class="icon flaticon-cog"></span>
                                    <div class="btn-wrap">
                                        <span class="text-one">Login</span>
                                        <span class="text-two">Login</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Feature Two -->
    <section class="feature-two">
        <div class="feature-two_circle-layer" style="background-image:url({{asset('home/images/background/pattern-8.png')}})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Blocks Column -->
                <div class="feature-two_blocks-column col-lg-6 col-md-12 col-sm-12">
                    <div class="feature-two_blocks-inner">
                        <div class="feature-two_pattern-layer" style="background-image:url({{asset('home/images/background/pattern-7.png')}})"></div>
                        <div class="row clearfix">

                            <!-- Feature Block -->
                            <div class="feature-block_two col-lg-6 col-md-6 col-sm-12">
                                <div class="feature-block_two-inner">
                                    <div class="feature-block_two-icon">
                                        <img src="{{asset('home/images/icons/feature-1.png')}}" alt="" />
                                    </div>
                                    <h5 class="feature-block_two-heading">Best Financial Analysis</h5>
                                    <div class="feature-block_two-text">
                                        We are a business inclined profitable investment company with all the right tools and
                                        experts to help you grow your investment.
                                    </div>
                                    <a class="feature-block_two-arrow flaticon-next-1" href="#"></a>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block_two col-lg-6 col-md-6 col-sm-12">
                                <div class="feature-block_two-inner">
                                    <div class="feature-block_two-icon">
                                        <img src="{{asset('home/images/icons/feature-2.png')}}" alt="" />
                                    </div>
                                    <h5 class="feature-block_two-heading">Creative & Ideal Planning</h5>
                                    <div class="feature-block_two-text">
                                        Our team works hand in hand with our Super AI model to bring up innovative solutions
                                        for our clients.
                                    </div>
                                    <a class="feature-block_two-arrow flaticon-next-1" href="#"></a>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block_two col-lg-6 col-md-6 col-sm-12">
                                <div class="feature-block_two-inner">
                                    <div class="feature-block_two-icon">
                                        <img src="{{asset('home/images/icons/feature-3.png')}}" alt="" />
                                    </div>
                                    <h5 class="feature-block_two-heading">Market Knowledge</h5>
                                    <div class="feature-block_two-text">
                                        With over 100+ experts and over 7+ years of experience, we have enough market
                                        knowledge to give you the best.
                                    </div>
                                    <a class="feature-block_two-arrow flaticon-next-1" href="#"></a>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block_two col-lg-6 col-md-6 col-sm-12">
                                <div class="feature-block_two-inner">
                                    <div class="feature-block_two-icon">
                                        <img src="{{asset('home/images/icons/feature-4.png')}}" alt="" />
                                    </div>
                                    <h5 class="feature-block_two-heading">Timely & Prompt</h5>
                                    <div class="feature-block_two-text">
                                        Our Investments are timely, prompt, with experts on the standby to help you scale through
                                        your difficulties.
                                    </div>
                                    <a class="feature-block_two-arrow flaticon-next-1" href="#"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Skill Column -->
                <div class="feature-two_skill-column col-lg-6 col-md-12 col-sm-12">
                    <div class="feature-two_skill-inner">

                        <!-- Sec Title -->
                        <div class="sec-title-two">
                            <div class="sec-title-two_title">Our Company Features</div>
                            <h2 class="sec-title-two_heading">We draw on our global
                                ability to grow.</h2>
                            <div class="sec-title-two_text">
                                We are poised to change your financial story from bad to better. With over 7+ years of
                                experience in the Investment & Asset management industry, we are best prepared to give you the
                                boost you need in your finance.
                            </div>
                        </div>

                        <!-- Skills -->
                        <div class="default-skills style-two">

                            <!-- Skill Item -->
                            <div class="default-skill-item">
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="90">
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-count-box count-box"><span class="count-text" data-speed="2000" data-stop="98">0</span>%</div>
                                <div class="default-skill-title"><span>Financial Support</span></div>
                            </div>

                            <!-- Skill Item -->
                            <div class="default-skill-item">
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="89">
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-count-box count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div>
                                <div class="default-skill-title"><span>Tax Management</span></div>
                            </div>

                            <!-- Skill Item -->
                            <div class="default-skill-item">
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="95">
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-count-box count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div>
                                <div class="default-skill-title"><span>Financial Consulting</span></div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Feature Two -->

    <!-- Business Two -->
    <section class="business-two">
        <div class="feature-two_circle-layer" style="background-image:url({{asset('home/images/background/pattern-8.png')}})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Blocks Column -->
                <div class="feature-two_blocks-column col-lg-6 col-md-12 col-sm-12">
                    <div class="feature-two_blocks-inner">

                        <!-- Sec Title -->
                        <div class="sec-title-two">
                            <div class="sec-title-two_title alternate">We Are an In-time Agency </div>
                            <h2 class="sec-title-two_heading">We are dedicated to give<br/>
                                you the Best.</h2>
                        </div>
                        <div class="row clearfix">
                            <!-- Businees Two Counter -->
                            <div class="business-two_counter-column col-lg-6 col-md-6 col-sm-12">
                                <div class="business-two_counter"><span class="odometer" data-count="100"></span> +</div>
                                <h6 class="business-two-branches">Expert Team</h6>
                                <div class="business-two_counter-text">
                                    With over 100+ ingenious experts and the power of a Super-model AI.
                                </div>
                            </div>
                            <!-- Businees Two Counter -->
                            <div class="business-two_counter-column col-lg-6 col-md-6 col-sm-12">
                                <div class="business-two_counter"><span class="odometer" data-count="240"></span> M+</div>
                                <h6 class="business-two-branches">Target fulfill</h6>
                                <div class="business-two_counter-text">Our track record bears us witness that we have always kept to our words.</div>
                            </div>
                        </div>

                        <div class="business-two_lower-text">
                            With {{$siteName}}, harness the potential of
                            artificial intelligence to elevate your cryptocurrency
                            investments, mining operations, and trading
                            endeavors to new
                            heights. Experience x10 of revenue earning in hours.
                        </div>

                    </div>
                </div>

                <!-- Video Column -->
                <div class="feature-two_video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="feature-two_video-inner">
                        <span class="video-bg-color"></span>
                        <!-- Video Box -->
                        <div class="video-box">
                            <figure class="video-image">
                                <img class="transition-500ms" src="{{asset('home/images/resource/video-image.jpg')}}" alt="">
                            </figure>
                            <a href="https://www.youtube.com/watch?v=XV_s5U0fvdU" class="lightbox-video overlay-box"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Business Two -->

    <!-- Business Three -->
    <section class="business-three">
        <div class="business-three_pattern-layer" style="background-image:url({{asset('home/images/background/pattern-9.png')}})"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title-two centered">
                <div class="sec-title-two_title">Our Company Services</div>
                <h2 class="sec-title-two_heading">Our services will solve <br> your financial problems</h2>
            </div>
            <div class="feature-carousel owl-carousel owl-theme">
                @foreach($services as $service)
                <!-- Business Block One -->
                <div class="business-block_one">
                    <div class="business-block_one-inner">
                        <div class="business-block_one-image">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="" />
                            <div class="business-block_one-icon">
                                <img src="{{asset('home/images/icons/business-1.png')}}" alt="" />
                            </div>
                        </div>
                        <div class="business-block_one-content">
                            <h5 class="business-block_one-heading"><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h5>
                            <div class="business-block_one-text">
                                {{$service->short}}
                            </div>
                            <a class="business-block_one-more" href="{{route('service.details',['id'=>$service->id])}}">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- End Business Three -->

    <!-- Services One -->
    <section class="services-two style-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title style-two centered">
                <div class="sec-title_title">Who Choose Us</div>
                <h2 class="sec-title_heading">We are dedicated to serve <br> you all time.</h2>
            </div>
            <div class="row clearfix">

                <!-- Service Block One / Style Two -->
                <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner">
                        <div class="service-block_one-icon flaticon-website"></div>
                        <h5 class="service-block_one-heading">Strategy & Planning</h5>
                        <div class="service-block_one-text">
                            At {{$siteName}}, we strategize for every investment opportunity presented to our users.
                        </div>
                        <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                            <div class="service-block_one-overlay-inner">
                                <div class="upper-box">
                                    <div class="service-block_one-icon-two flaticon-website"></div>
                                    <h5 class="service-block_one-heading-two"><a href="#">Strategy & Planning</a></h5>
                                </div>
                                <div class="service-block_one-text-two">
                                    At {{$siteName}}, we strategize for every investment opportunity presented to our users.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block One / Style Two -->
                <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner">
                        <div class="service-block_one-icon flaticon-market"></div>
                        <h5 class="service-block_one-heading">Program management</h5>
                        <div class="service-block_one-text">
                            Each user is given a dedicated account manager to help guide them in their
                            portfolio growth.
                        </div>
                        <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                            <div class="service-block_one-overlay-inner">
                                <div class="upper-box">
                                    <div class="service-block_one-icon-two flaticon-market"></div>
                                    <h5 class="service-block_one-heading-two"><a href="#">Program management</a></h5>
                                </div>
                                <div class="service-block_one-text-two">
                                    Each user is given a dedicated account manager to help guide them in their
                                    portfolio growth.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block One / Style Two -->
                <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner">
                        <div class="service-block_one-icon flaticon-bank-building-silhouette"></div>
                        <h5 class="service-block_one-heading">Automated Returns</h5>
                        <div class="service-block_one-text">
                            Follow through with your investment as it counts and watch your earning grow by the day.
                        </div>
                        <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                            <div class="service-block_one-overlay-inner">
                                <div class="upper-box">
                                    <div class="service-block_one-icon-two flaticon-bank-building-silhouette"></div>
                                    <h5 class="service-block_one-heading-two"><a href="#">Automated Returns</a></h5>
                                </div>
                                <div class="service-block_one-text-two">
                                    Follow through with your investment as it counts and watch your earning grow by the day.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block One / Style Two -->
                <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner">
                        <div class="service-block_one-icon flaticon-charity"></div>
                        <h5 class="service-block_one-heading">Investment Policy</h5>
                        <div class="service-block_one-text">
                            At {{$siteName}} is where AI meets Human kmowledge for efficient policies that provide for
                            the best result.
                        </div>
                        <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                            <div class="service-block_one-overlay-inner">
                                <div class="upper-box">
                                    <div class="service-block_one-icon-two flaticon-charity"></div>
                                    <h5 class="service-block_one-heading-two"><a href="#">Investment Policy</a></h5>
                                </div>
                                <div class="service-block_one-text-two">
                                    At {{$siteName}} is where AI meets Human kmowledge for efficient policies that provide for
                                    the best result.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block One / Style Two -->
                <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner">
                        <div class="service-block_one-icon flaticon-business-intelligence"></div>
                        <h5 class="service-block_one-heading">Financial Advices</h5>
                        <div class="service-block_one-text">
                            We engage our clients on their financial need and guide them properly to it.
                        </div>
                        <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                            <div class="service-block_one-overlay-inner">
                                <div class="upper-box">
                                    <div class="service-block_one-icon-two flaticon-business-intelligence"></div>
                                    <h5 class="service-block_one-heading-two"><a href="#">Financial Advices</a></h5>
                                </div>
                                <div class="service-block_one-text-two">
                                    We engage our clients on their financial need and guide them properly to it.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block One / Style Two -->
                <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner">
                        <div class="service-block_one-icon flaticon-shuttle"></div>
                        <h5 class="service-block_one-heading">Zero risk  Plan</h5>
                        <div class="service-block_one-text">
                            Because we are using a super-model, our market analysis are always 99% accurate, and 1% due to
                            human error. However, over the years, we have come to diversify and that has cut down the risk
                            ratio to zero(0)
                        </div>
                        <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                            <div class="service-block_one-overlay-inner">
                                <div class="upper-box">
                                    <div class="service-block_one-icon-two flaticon-shuttle"></div>
                                    <h5 class="service-block_one-heading-two"><a href="#">Zero risk  Plan</a></h5>
                                </div>
                                <div class="service-block_one-text-two">
                                    Because we are using a super-model, our market analysis are always 99% accurate, and 1% due to
                                    human error. However, over the years, we have come to diversify and that has cut down the risk
                                    ratio to zero(0)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services One -->

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


    <!-- Start Blog Area -->
    <div class="blog-area pt-100 pb-70" style="margin-bottom: 5rem;">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Latest Transactions</span>
                <h2>Most Recent Transactions</h2>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Recent Deposits</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deposits as $deposit)
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$option->getInvestor($deposit->user)}}</td>
                                <td>${{number_format($deposit->amount,2)}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>

                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Latest Withdrawals</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($withdrawals as $withdrawal)
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$option->getInvestor($withdrawal->user)}}</td>
                                <td>${{number_format($withdrawal->amount,2)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <!-- End News One -->
    </div>

    <!-- Skill One -->
    <section class="skill-one mt-5">
        <div class="skill-one_pattern-layer" style="background-image:url({{asset('home/images/background/pattern-13.png')}})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title style-two">
                            <div class="sec-title_title">Productivity And Efficiency Equals Success</div>
                            <h2 class="sec-title_heading">We draw on our global <br> ability to grow.</h2>
                            <div class="sec-title_text">
                                Powered by advanced artificial intelligence (AI) algorithms, {{$siteName}} provides
                                cutting-edge solutions to help clients earn from the dynamic world of cryptocurrencies
                                with confidence and success.
                            </div>
                        </div>

                        <!-- Skills / Style Three -->
                        <div class="default-skills style-three">

                            <!-- Skill Item -->
                            <div class="default-skill-item">
                                <div class="default-skill-title">Business growth</div>
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="90">
                                            <div class="default-count-box count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div>
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Skill Item -->
                            <div class="default-skill-item">
                                <div class="default-skill-title">Financial Output</div>
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="95">
                                            <div class="default-count-box count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div>
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Skill Item -->
                            <div class="default-skill-item">
                                <div class="default-skill-title">Mining Ratio</div>
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="80">
                                            <div class="default-count-box count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div>
                                            <div class="default-skill-percentage text-bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <!-- Video Box -->
                    <div class="video-box style-two">
                        <figure class="video-image">
                            <img class="transition-500ms" src="{{asset('home/images/resource/video.jpg')}}" alt="">
                        </figure>
                        <a href="https://www.youtube.com/watch?v=XV_s5U0fvdU" class="lightbox-video overlay-box"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skill One -->


    <!-- News Two -->
    <section class="news-two">
        <div class="solution-one_circle-layer" style="background-image:url({{asset('home/images/background/pattern-8.png')}})"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title-two">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <div class="sec-title-two_title">Learn more from our new blog</div>
                        <h2 class="sec-title-two_heading">Something from our <br> latest blog.</h2>
                    </div>
                    <div class="right-box">
                        <div class="sec-title-two_text">We help you see the world differently, discover opportunities <br> you may never have imagined and achieve results that was <br>
                            bridge what is with what can be done.</div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">

                <!-- News Block -->
                <div class="news-block-two col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- End News Two -->

    <!-- CTA One -->
    <section class="cta-one">
        <div class="auto-container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box">
                    <h3 class="cta-one_heading">Looking to grow your financial standing?</h3>
                    <div class="cta-one_text">{{$siteName}} has the best financial packages for you.</div>
                </div>
                <div class="right-box">
                    <a class="btn-style-six theme-btn clearfix" href="{{route('register')}}">
                        <div class="btn-wrap">
                            <span class="text-one">Get Started</span>
                            <span class="text-two">Get Started</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA One -->

@endsection
