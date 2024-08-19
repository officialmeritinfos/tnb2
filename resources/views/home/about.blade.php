@extends('home.base')
@section('content')

    <div class="inner_banner-section">
        <img class="inner_banner-background-image" src="{{asset('home/image/common/inner-bg.png')}}" alt="image alt">
        <div class="container">
            <div class="inner_banner-content-block">
                <h3 class="inner_banner-title">{{$pageName}}</h3>
                <ul class="banner__page-navigator">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="active">
                        <a href="{{url()->current()}}">
                            {{$pageName}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="about_content-section  section-padding-120">
        <div class="container">
            <div class="row row--custom ">
                <div class="col-xxl-6 col-lg-5 col-md-6 col-7" data-aos-duration="1000" data-aos="fade-right">
                    <div class="about_content-image-block ">
                        <div class="about_content-image content-image--mobile-width">
                            <img src="{{asset('home/image/service/video-image.png')}}" alt="alternative text">
                        </div>
                        <a href="https://www.youtube.com/watch?v=zo9dJFo8H8g" data-fancybox class="btn-play absolute-center btn-play">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md">Bringing your finance to the Next level</h2>
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
                            <div class="content-divider"></div>

                            <div class="mt-3">
                                <img src="{{asset('certificate.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
