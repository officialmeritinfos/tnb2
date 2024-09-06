@extends('home.base')
@section('content')


    <section class="page-title" style="background-image:url({{asset('home/images/background/2.jpg')}})">
        <div class="auto-container">
            <h2>{{$pageName}}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>{{$pageName}}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <section class="about-one style-two" style="background-image:url({{asset('home/images/background/pattern-1.png')}})">
        <div class="auto-container">
            <div class="about-one-inner_container">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="about-one_content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="about-one_content-inner">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="sec-title_title">About us</div>
                                <h2 class="sec-title_heading">We help to get Solutions!</h2>
                            </div>
                            <div class="about-one_colored-text">
                                <p>
                                    {{$siteName}} is a cryptocurrency mining and trading investment company aimed at
                                    providing an accessible way for newcomers and veterans who are willing to get into
                                    cryptocurrency mining and trading market. We provide a great entry point and oportunity
                                    for everyone to secure a stake in the cryptocurrency industry.
                                </p>
                                <p>
                                    We are committed to making sure you achieve your investment goals, with our full time
                                    mining network, professional traders and affiliate system at your disposal. Our logical
                                    mining investment plans ensures level playing field and sustainable platform for all levels
                                    of investors including beginners and others who has been in the cryptocurrency industry
                                    for a long period of time, we’re a highly experienced team with backgrounds including
                                    brokers, crypto analysts and investment strategists.
                                </p>
                            </div>
                            <div class="about-one_text">

                                <p>
                                    Our brokers are passionate about cryptocurrency and seek to use their strong
                                    understanding of the market to deliver the best possible results for our investors. Also,
                                    {{$siteName}} has been operating in {{$siteName}} has been operating in America and Europe since 2015 until it was launched
                                    globally in 2019, making our investment program available for investors all over the globe.
                                </p>
                            </div>

                            <div class="row clearfix">

                                <!-- Progress Info -->
                                <div class="progress-info col-lg-6 col-md-6 col-sm-12">
                                    <div class="progress-info_inner">
                                        <div class="progress-info_title">
                                            <span class="progress-info_icon flaticon-shield"></span>
                                            <h6>Risk Free</h6>
                                        </div>
                                        <div class="progress-info_text">We offer risk free business for tension free life.</div>
                                    </div>
                                </div>

                                <!-- Progress Info -->
                                <div class="progress-info col-lg-6 col-md-6 col-sm-12">
                                    <div class="progress-info_inner">
                                        <div class="progress-info_title">
                                            <span class="progress-info_icon flaticon-profit"></span>
                                            <h6>Financial Growth</h6>
                                        </div>
                                        <div class="progress-info_text">We ensure the financial growth without conditions.</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="about-one_image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="about-one_image-inner">
                            <div class="about-one_counter-box">
                                <div class="about-one_counter"><span class="odometer" data-count="7"></span><sup>+</sup></div>
                                <div class="about-one_experiance">Years of <br> experiences</div>
                            </div>
                            <div class="about-one_image">
                                <img src="{{asset('home/images/resource/about-1.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End About One -->


    <!-- Start About Area -->
    <section class="about-area pb-100" style="margin-top: 5rem;">

        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-lg-12 row">

                    <div class="single-business col-md-6">
                        <h3>TRANSPARENCY</h3>
                        <p>
                            At {{$siteName}}, we place an emphasis on transparency and responsibility. We clearly
                            communicate and control all aspects of risk of our investors with the help of our mining
                            rigs(ASIC) and professional cryptocurrency trader's. We are mindful of the risks involved
                            in any investment and seek to add value effectively through diversification,
                        </p>
                    </div>
                    <div class="single-business col-md-6">
                        <h3 class="text-uppercase">high profitability</h3>
                        <p>
                            With a wealth of experience in the field of crypto mining and trading , the {{$siteName}}
                            team focuses on removing all complications involved with investing in cryptocurrency.
                            The challenges facing beginners in the space are many and varied, we aim to make the
                            transition into the market seamless and rewarding. We now offer access for those
                            intending to invest in large quantities of cryptocurrency, attracting investment firms and
                            institutional operations to the crypto market.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Area -->



@endsection
