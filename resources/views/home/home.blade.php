@extends('home.base')
@section('content')

    <!-- Banner Area Start -->
    <div class="banner__three" data-background="{{asset('home/img/shape/banner-bg-3.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 lg-mb-30">
                    <div class="banner__three-title">
                        <span>Success is Our Priority</span>
                        <h2>Invest in Our Proven Method and Watch Your Wealth Expand</h2>
                        <p>
                            Our investment strategy is based on a lot of study and analysis, and it consistently earns our clients
                            good returns. We take a long-term, diversified, and risk-management-focused strategy.
                        </p>
                        <div class="banner__three-title-bottom">
                            <div class="banner__three-title-bottom-btn">
                                <a class="btn-seven" href="{{route('register')}}">Start Earning<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="swiper banner__three__slider banner__three-image dark__image">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('home/img/banner/banner-7.jpg')}}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('home/img/banner/banner-8.jpg')}}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('home/img/banner/banner-9.jpg')}}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('home/img/banner/banner-10.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Features Area Start -->
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="features-area">
                        <div class="features-area-item ltb-radius">
                            <h4>Diversified Portfolio</h4>
                            <p>Join us in the investment of real estate, gold funds, cannabis, and crypto.</p>
                        </div>
                        <div class="features-area-item features-area-item-hover">
                            <h4>Daily fixed returns</h4>
                            <p>{{$siteName}} offers an assured daily income stream.</p>
                        </div>
                        <div class="features-area-item rtb-radius">
                            <h4>Expert Management</h4>
                            <p>Put your money in the capable hands of our professional team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Area End -->
    <!-- About Area Start -->
    <div class="about__three section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 lg-mb-30">
                    <div class="about__three-title">
                        <span class="subtitle-three">{{$siteName}}</span>
                        <h2>We aid our clients in reaching their financial objectives.</h2>
                        <p>
                            {{$siteName}} provides first-rate asset management services across a wide range of industries, including
                            real estate, gold funds, cannabis, and cryptocurrencies. We focus on fostering lasting relationships
                            with clients and providing superior returns. You can rely on us to deliver outstanding results.
                        </p>
                        <div class="about__one-right-bottom" style="margin-top: -2.5rem;">
                            <div class="about__one-right-bottom-list">
                            <span><i class="far fa-check"></i>
                                Dedicated to providing our clients with the highest quality investment management services possible,
                                our team is comprised of seasoned financial professionals.
                            </span>
                                <span><i class="far fa-check"></i>
                                Professionals with expertise in a variety of investment fields, such as property, gold funds,
                                cannabis, and cryptocurrency
                            </span>
                            </div>
                            <div class="about__one-right-bottom-experience">
                                <h3><span class="counter">73</span>+</h3>
                                <h6>Expert Team members</h6>
                            </div>
                        </div>
                        <a class="btn-seven" href="{{url('about')}}">Read More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="about__three-right">
                        <div class="about__three-right-image dark__image">
                            <div class="about__three-right-image-one">
                                <img src="{{asset('home/img/about/about-5.jpg')}}" alt="">
                            </div>
                            <img class="about__three-right-image-two" src="{{asset('home/img/about/about-6.jpg')}}" alt="">
                        </div>
                        <div class="about__three-right-content">
                            <div class="about__three-right-content-counter">
                                <h1><span class="counter">24</span>k</h1>
                            </div>
                            <p>clients satisifed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
    <!-- Services Area Start -->
    <div class="services__page section-padding">
        <div class="container">
            <div class="row mb-70">
                <div class="col-xl-12">
                    <div class="services__one-title lg-t-center">
                        <span class="subtitle-one">Timely Solutions</span>
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="services__three-item page">
                                <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                                <div class="services__three-item-content page">
                                    <div class="services__three-item-content-icon">
                                        <img src="{{asset('home/img/icon/services-9.png')}}" alt="">
                                    </div>
                                    <h4><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h4>
                                    <p>
                                        {{\Illuminate\Support\Str::words($service->short,5)}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!-- Why Choose Us Area Start -->
    <div class="chooseUs__area section-padding">
        <div class="container">
            <div class="row align-items-center mb-70">
                <div class="col-xl-6 col-lg-7 lg-mb-20">
                    <div class="chooseUs__area-title">
                        <span class="subtitle-three">Why Choose Us</span>
                        <h2>
                            Professional, Personable, and Reliable Investment Management Services
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="chooseUs__area-right">
                        <div class="chooseUs__area-right-counter">
                            <h1><span class="counter">180</span>+</h1>
                            <h6>
                                If you’re looking for professional advice and individualized care with your investments, go
                                no further than {{$siteName}}. Some of the many reasons why you should trust your investing needs
                            </h6>
                        </div>
                        <div class="chooseUs__area-right-shape">
                            <img class="left-right-animate dark-n" src="{{asset('home/img/shape/choose-us.png')}}" alt="">
                            <img class="left-right-animate light-n" src="{{asset('home/img/shape/choose-us-dark.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 xl-mb-30 dark__image">
                    <img class="img-full" src="{{asset('home/img/pages/choose-us.jpg')}}" alt="">
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-sm-6 sm-mb-30">
                            <div class="chooseUs__area-item">
                                <div class="chooseUs__area-item-icon">
                                    <img src="{{asset('home/img/icon/choose-us-1.png')}}" alt="">
                                </div>
                                <h4>Expert Investment Strategies</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="chooseUs__area-item">
                                <div class="chooseUs__area-item-icon">
                                    <img src="{{asset('home/img/icon/choose-us-2.png')}}" alt="">
                                </div>
                                <h4>Personalized Investment Solutions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="chooseUs__area-item">
                                <div class="chooseUs__area-item-icon">
                                    <img src="{{asset('home/img/icon/choose-us-2.png')}}" alt="">
                                </div>
                                <h4>Competitive Rates and Returns</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="chooseUs__area-item">
                                <div class="chooseUs__area-item-icon">
                                    <img src="{{asset('home/img/icon/choose-us-1.png')}}" alt="">
                                </div>
                                <h4>Commitment to Transparency</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Area End -->


    <!-- Get In Touch Start End -->
    <div class="getIn__touch-three section-padding pb-0" data-background="{{asset('home/img/pages/getInTouchThree.jpg')}}">
        <img class="getIn__touch-three-shape left-right-animate2" src="{{asset('home/img/shape/getInTouchThree.png')}}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 lg-mb-50">
                    <div class="getIn__touch-three-left">
                        <div class="getIn__touch-three-left-title">
                            <span class="subtitle-three">Join our Client list</span>
                            <h2>Experience the Evolution of your finance</h2>
                            <p>The world is changing, and so does your finances need to change too.</p>
                        </div>
                        <div class="getIn__touch-three-left-video">
                            <div class="getIn__touch-three-left-video-icon video video-pulse">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=-_Amo6GYckU"><i class="fal fa-play"></i></a>
                            </div>
                            <div class="getIn__touch-three-left-video-text">
                                <h4>Watch Video</h4>
                            </div>
                            <div class="getIn__touch-three-left-video-shape">
                                <img src="{{asset('home/img/icon/getInTouchThree.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Get In Touch Area End -->
    <!-- Testimonial Area Start -->
    <div class="testimonial__area section-padding">
        <img class="testimonial__area-shape dark-n" src="{{asset('home/img/shape/testimonial.png')}}" alt="">
        <img class="testimonial__area-shape light-n" src="{{asset('home/img/shape/testimonial-dark.png')}}" alt="">
        <div class="container">
            <div class="row mb-70 align-items-end">
                <div class="col-xl-8 col-lg-8 lg-mb-30">
                    <div class="testimonial__area-title lg-t-center">
                        <span class="subtitle-one">Real Client Stories</span>
                        <h2>Customer Experiences</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="testimonial__area-button t-right lg-t-center">
                        <div class="testimonial__area-button-prev swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
                        <div class="testimonial__area-button-next swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="swiper testimonial__area-slider">
                        <div class="swiper-wrapper">
                            <div class="testimonial__area-item swiper-slide">
                                <div class="testimonial__area-item-client">
                                    <div class="testimonial__area-item-icon">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial__area-item-client-image">
                                        <img src="https://ui-avatars.com/api/?name=Flores+Juanita" alt="">
                                    </div>
                                    <div class="testimonial__area-item-client-title">
                                        <h5>Flores, Juanita</h5>
                                    </div>
                                </div>
                                "{{$siteName}} Real Estate helped me find the perfect investment property. Their expertise and
                                guidance made the process smooth and stress-free. Highly recommend!"
                                <div class="testimonial__area-item-reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial__area-item swiper-slide">
                                <div class="testimonial__area-item-client">
                                    <div class="testimonial__area-item-icon">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial__area-item-client-image">
                                        <img src="https://ui-avatars.com/api/?name=Jane+S" alt="">
                                    </div>
                                    <div class="testimonial__area-item-client-title">
                                        <h5>Jane, S</h5>
                                    </div>
                                </div>
                                <p>"I was impressed by the level of professionalism and attention to detail provided by {{$siteName}} Real Estate. They truly went above and beyond to ensure my satisfaction."</p>
                                <div class="testimonial__area-item-reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial__area-item swiper-slide">
                                <div class="testimonial__area-item-client">
                                    <div class="testimonial__area-item-icon">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial__area-item-client-image">
                                        <img src="https://ui-avatars.com/api/?name=Jennifer+Garcia" alt="">
                                    </div>
                                    <div class="testimonial__area-item-client-title">
                                        <h5>Jennifer Garcia</h5>
                                    </div>
                                </div>
                                <p>"I highly recommend {{$siteName}} Investment services to anyone looking to invest and earn.
                                    Their professionalism, expertise, and personalized service are second to none."</p>
                                <div class="testimonial__area-item-reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial__area-item swiper-slide">
                                <div class="testimonial__area-item-client">
                                    <div class="testimonial__area-item-icon">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial__area-item-client-image">
                                        <img src="https://ui-avatars.com/api/?name=Michael+J" alt="">
                                    </div>
                                    <div class="testimonial__area-item-client-title">
                                        <h5>Michael J. Stenson</h5>
                                    </div>
                                </div>
                                <p>"As someone new to cryptocurrency, {{$siteName}}'s educational resources and personalized guidance helped me navigate the complexities of trading with confidence."</p>

                                <div class="testimonial__area-item-reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial__area-item swiper-slide">
                                <div class="testimonial__area-item-client">
                                    <div class="testimonial__area-item-icon">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial__area-item-client-image">
                                        <img src="https://ui-avatars.com/api/?name=Sarah+Martinez" alt="">
                                    </div>
                                    <div class="testimonial__area-item-client-title">
                                        <h5>Sarah M. Hackwood</h5>
                                    </div>
                                </div>
                                <p>"I've been using {{$siteName}}'s retirement planning services for years, and I couldn't be happier with the results. Their personalized approach has helped me secure a comfortable future."</p>

                                <div class="testimonial__area-item-reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
    <!-- Blog Area Start -->
    <div class="blog__three dark__image section-padding">
        <div class="container">
            <div class="row align-items-end mb-70">
                <div class="col-xl-12">
                    <div class="blog__three-title t-center">
                        <span class="subtitle-three">Market Analysis</span>
                        <h2>Analysis of Market Trends and Investment Opportunities</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-12 col-lg-12 xl-mb-30">
                    <div class="blog__three-item">
                        <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Area End -->

@endsection
