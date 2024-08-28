@extends('home.base')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$pageName}} </h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">
                            Home
                        </a>
                    </li>
                    <li>{{$pageName}} </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start About Area -->
    <section class="about-area pb-100" style="margin-top: 5rem;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('home/images/about_img4.png')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <span>About Us</span>
                        <h2>

                        </h2>
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
                        <p>
                            Our brokers are passionate about cryptocurrency and seek to use their strong
                            understanding of the market to deliver the best possible results for our investors. Also,
                            {{$siteName}} has been operating in {{$siteName}} has been operating in America and Europe since 2015 until it was launched
                            globally in 2019, making our investment program available for investors all over the globe.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-checked"></i>
                                        Advanced caching
                                    </li>
                                    <li>
                                        <i class="flaticon-checked"></i>
                                        Unlimited  solutions
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-checked"></i>
                                        24/7 Free extra support
                                    </li>
                                    <li>
                                        <i class="flaticon-checked"></i>
                                        Optimized stack
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-lg-12">

                    <div class="single-business">
                        <h3>TRANSPARENCY</h3>
                        <p>
                            At {{$siteName}}, we place an emphasis on transparency and responsibility. We clearly
                            communicate and control all aspects of risk of our investors with the help of our mining
                            rigs(ASIC) and professional cryptocurrency trader's. We are mindful of the risks involved
                            in any investment and seek to add value effectively through diversification,
                        </p>
                    </div>
                    <div class="single-business">
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

    <!-- Start Business Area -->
    <section class="business-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="business-content">
                        <h2>Plan for the future with {{$siteName}}</h2>
                    </div>
                    <div class="single-business">
                        <i class="flaticon-chip"></i>
                        <h3>Strategic Wealth Planning</h3>
                        <p>At {{$siteName}}, we believe in more than just investing; we believe in strategic wealth planning. Our team of experts collaborates with you to craft a personalized roadmap for financial success. From short-term gains to long-term legacies, we meticulously plan every step, ensuring your investments align with your aspirations. Join us in redefining the art of wealth creation through strategic planning and astute decision-making.</p>
                    </div>
                    <div class="single-business">
                        <i class="flaticon-blockchain"></i>
                        <h3>Discover Your Financial Horizon</h3>
                        <p>Embark on a personalized financial journey with {{$siteName}}, where we help you uncover the vast potential of your financial horizon. Our tailored strategies and innovative solutions are designed to align with your unique goals, ensuring a path to prosperity that's as individual as you are. Let {{$siteName}} be your compass as you navigate towards a secure and rewarding financial future.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 counter-nth">
                            <div class="single-counter">
                                <h2>
                                    <span class="odometer" data-count="100">00</span> <span class="target">M+</span>
                                </h2>
                                <p>Payouts made</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 counter-nth">
                            <div class="single-counter">
                                <h2>
                                    <span class="odometer" data-count="90">00</span> <span class="target">+</span>
                                </h2>
                                <p>Staff</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 counter-nth">
                            <div class="single-counter">
                                <h2>
                                    <span class="odometer" data-count="80">00</span> <span class="target">k+</span>
                                </h2>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 counter-nth">
                            <div class="single-counter">
                                <h2>
                                    <span class="odometer" data-count="5">00</span> <span class="target">+</span>
                                </h2>
                                <p>Awards Won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Business Area -->

@endsection
