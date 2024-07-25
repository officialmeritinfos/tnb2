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

    <!-- Services Details Start -->
    <div class="services__details section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 lg-mb-60">
                    <div class="services__details-left">
                        <div class="services__details-left-image dark__image">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                        </div>
                        <div class="services__details-left-content">
                            <h2>{{$service->title}}</h2>
                            <div>
                                {!! str_replace('MYSITE',$siteName,$service->content) !!}
                            </div>
                        </div>
                    </div>
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
