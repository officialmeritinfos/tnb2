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

    <section class="business-one style-five" style="background-image:url({{asset('home/images/background/pattern-39.png')}}')">
        <div class="auto-container">
            <!-- Sec Title -->


            <!-- Business One Lower Section -->
            <div class="business-one_lower-section">
                <h6>Main Branches:</h6>
                <div class="row clearfix">
                    <!-- Branch Column -->
                    <div class="branch-column col-lg-3 col-md-6 col-sm-12">
                        <div class="branch-column_inner">
                            <div class="branch-name">Email</div>
                            <ul class="branch-info_list">

                                <li>{{$web->email}}</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Branch Column -->
                    <div class="branch-column col-lg-3 col-md-6 col-sm-12">
                        <div class="branch-column_inner">
                            <div class="branch-name">Address</div>
                            <ul class="branch-info_list">
                                <li>{{$web->address}}</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Business One -->

@endsection
