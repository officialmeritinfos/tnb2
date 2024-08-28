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
                    <li>Pages</li>
                    <li>{{$pageName}} </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Pricing Area -->
    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>What We Offer</span>
                <h2>Our Plans For You</h2>
            </div>
            <div class="tab quote-list-tab">

                <div class="tab_content">
                    <div class="tabs_item">
                        <div class="row justify-content-center">
                            @foreach($packages as $package)
                                @inject('option','App\Defaults\Custom')
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-pricing">
                                        <div class="pricing-top-heading">
                                            <h3>{{$package->name}}</h3>
                                        </div>
                                        <span>{{$package->roi}}%<sub>/{{$option->getReturnType($package->returnType)}}</sub></span>
                                        <ul>
                                            <li>
                                                <i class="flaticon-checked-1"></i>
                                                Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                                    ${{number_format($package->maxAmount,2)}}
                                                @else
                                                    Unlimited
                                                @endif
                                            </li>
                                            <li>
                                                <i class="flaticon-checked-1"></i>
                                                Weekly return: {{$package->roi*7}}%
                                            </li>
                                            <li>
                                                <i class="flaticon-checked-1"></i>
                                                Daily return: {{$package->roi}}%
                                            </li>
                                            <li>
                                                <i class="flaticon-checked-1"></i>
                                                Contract Duration: {{$package->Duration}}
                                            </li>
                                            <li>
                                                <i class="flaticon-checked-1"></i>
                                                Referral Bonus: {{$package->referral}}%
                                            </li>
                                        </ul>
                                        <a class="default-btn" href="{{route('register')}}">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Area -->

@endsection
