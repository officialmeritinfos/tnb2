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
                    <li>Service</li>
                    <li>{{$pageName}} </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- End Service Details Area -->
    <section class="service-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-details-wrap">
                        <div class="service-img">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="Image">
                        </div>
                        <h3>{{$service->title}}</h3>
                        <p>
                            {!! str_replace('MYSITE',$siteName,$service->content) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Details Area -->


@endsection
