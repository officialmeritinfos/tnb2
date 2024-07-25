@extends('home.base')
@section('content')
    <!-- Page Banner Area Start -->
    <div class="page__banner" data-background="{{asset('home/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>{{$pageName}}</span>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a><span>|</span></li>
                            <li>{{$pageName}}</li>
                        </ul>
                        <h1>{{$pageName}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->

    <!-- Start About Area -->
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-img">
                        <img src="{{asset('home/img/about/about-7.jpg')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-text">
                        <span class="sub-title">ABOUT US</span>
                        <h2>Bring Your Finances to the Next Level</h2>
                        <p class="about-one__text-2">{{$siteName}} stands as one of the largest and most seasoned international private equity firms. Our accomplished team of investment professionals is primarily dedicated to strategic investments.</p>
                        <p class="about-one__text-2">
                            {{$siteName}} is managed by a team of trading experts specializing in generating profits through currency, stocks, options, and commodities trading on the foreign exchange market. We employ a variety of trading techniques to meet client goals.
                        </p>
                        <p class="about-one__text-2">
                            The {{$siteName}} team comprises financial market professionals assembled to provide the best possible trading conditions. Our specialists played a key role in developing technical specifications for a modern platform suitable for both beginners and experienced traders.
                        </p>
                        <p class="about-one__text-2">
                            Throughout our existence, we've aimed to balance lower risk and higher profits for our customers through innovative analysis, information dispersion, and expert assistance. Our team includes experienced professionals with diverse and in-depth knowledge, enhancing the entire investing process.
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <h3>Consistency</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-settings-2-line"></i>
                                    </div>
                                    <h3>Strategy</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-line-chart-line"></i>
                                    </div>
                                    <h3>Investment</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

@endsection
