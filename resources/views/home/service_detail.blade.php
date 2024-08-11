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

    <div class="service-details_main-section section-padding-120">
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <div class="service-details_main-image">
                    <img src="{{asset('home/serv/'.$service->photo)}}" alt="service image" class="w-100">
                </div>
                <div class="service-details_main-single">
                    {!! str_replace('MYSITE',$siteName,$service->content) !!}
                </div>

            </div>
        </div>
    </div>


    @if($packages->count()>0)
        <!-- Pricing Plan Area Start -->
        <div class="pricing__area section-padding" style="margin-top: -2.5rem;">
            <div class="container">
                <div class="row mb-70">
                    <div class="col-xl-12">
                        <div class="pricing__area-title t-center">
                            <span class="subtitle-three">Pricing Plan</span>
                            <h2>Best Pricing Plan</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($packages as $package)
                        @inject('option','App\Defaults\Custom')
                        <div class="col-xl-4 col-lg-6 col-md-6 xl-mb-30">
                            <div class="pricing__area-item">
                                <div class="pricing__area-item-price">
                                    <h4><span>{{$package->roi}}%/</span></h4>
                                    <span class="text-two">{{$option->getReturnType($package->returnType)}}</span>
                                </div>
                                <div class="pricing__area-item-title">
                                    <h3>{{$package->name}}</h3>
                                </div>
                                <div class="pricing__area-item-list">
                                    <ul>
                                        <li><i class="fal fa-check"></i>
                                            Min. Deposit: ${{number_format($package->minAmount,2)}}
                                        </li>
                                        <li><i class="fal fa-check"></i>
                                            Max. Deposit: @if($package->isUnlimited !=1)
                                                ${{number_format($package->maxAmount,2)}}
                                            @else
                                                Unlimited
                                            @endif
                                        </li>
                                        <li><i class="fal fa-check"></i>
                                            {{$option->getReturnType($package->returnType)}} Profit: {{$package->roi}}%
                                        </li>
                                        <li><i class="fal fa-check"></i>
                                            Duration: {{$package->Duration}}
                                        </li>
                                        <li><i class="fal fa-check"></i>
                                            Referral Bonus: {{$package->referral}}%
                                        </li>
                                        <li><i class="fal fa-check"></i>
                                            Total Profit: {{$package->roi*$package->numberOfReturns}}%
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn-eight" href="{{route('register')}}">Get Started</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Pricing Plan Area End -->
    @endif

@endsection
