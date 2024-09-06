@extends('home.base')
@section('content')
    <!-- Start Page Title Area -->
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

    <!-- Start About Area -->
    <section class="about-area pb-100" style="margin-top: 5rem;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('home/images/affiliate.svg')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <span class="text-uppercase"></span>
                        <h2>
                            A {{$siteName}} AGENT
                        </h2>
                        <p>
                            As an agent you have access to becoming a Bitcomine ambassador earning
                            between $5000-$50,000 monthly an all expense paid trip to Maldives for two
                            weeks, a house in any area of your choice within your locality, An SUV car access
                            to first class information about the sales and earning strategy of the company.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-checked"></i>
                                        you must have 5 active referrals
                                    </li>
                                    <li>
                                        <i class="flaticon-checked"></i>
                                        KYC verification
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-checked"></i>
                                        A gold or platinum plan investment
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
                        <h3>AFFILIATES</h3>
                        <p>
                            The company's growth is difficult to imagine without the help of numerous clients
                            and partners. Many of them have been cooperated with us before and know about
                            our capabilities, they helped us in shaping of business strategy and bringing the
                            first investment in trust management.
                        </p>
                        <p>
                            Today, any of our clients can be our partner and even earn through affiliate link.
                            After registration each user receives a unique affiliate link (which contains their
                            username). username). You can use this link for registration of new investors, by sending this
                            link to your friends. Once your friend clicks on the link and signs up, he becomes
                            your referral and 5% of his or her first deposited funds will be rewarded to you.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Area -->


@endsection
