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

    <!-- END SECTION TEAM -->
    <section class="promo-section ptb-100" style="margin-top: 3rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading mb-5 text-center">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <!--pricing faq start-->
            <div class="row">


                <div class="col-lg-6">

                    <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-1" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How do i join {{$siteName}}?</h6>
                            </div>
                            <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>
                                        It's quite easy and convenient. Click on the "Get Started" link, fill in the
                                        registration form and then click "Sign up"
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->

                    </div>

                    <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-2" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> I misplaced my password?</h6>
                            </div>
                            <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>
                                        Click on the "Login" link, locate and click on the "forgot password" button,
                                        enter your email address and submit to receive password reset link.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->

                    </div>

                    <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-3" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How many account can i have at the same time? </h6>
                            </div>
                            <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>
                                        Our users can have multiple account as long as is verified by the company

                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->

                    </div>

                    <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-4" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span>
                                    How long does it take to add to my deposit after payment?
                                </h6>
                            </div>
                            <div id="collapse-1-4" class="collapse" aria-labelledby="heading-1-4"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>
                                        Usually it takes no more than 1-2 hours, but sometimes you can face delays
                                        up to 12 hours. It only depends on speed of Bitcoin networks. As a rule your
                                        payment should have at least 6-8 confirmation to adding of your deposit.
                                        All you need just to wait a little after payment, please remember that we can’t
                                        manage Bitcoin network!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->

                    </div>

                </div>

                <div class="col-lg-6">

                    <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-5" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#collapse-2-5" aria-expanded="false" aria-controls="collapse-2-5">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span>What is Bitcoin and why it can be convenient to use? </h6>
                            </div>
                            <div id="collapse-2-5" class="collapse" aria-labelledby="heading-2-5"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>
                                        Bitcoin is a digital and global money system (currency). It allows for the
                                        pseudo-anonymous (not linked to a real name) trading of money across the
                                        internet. The mathematical field of cryptography is the basis for its security.
                                        Bitcoin does not keep track of users; it keeps track of addresses where the
                                        money is
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->

                    </div>

                    <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-6" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#collapse-2-6" aria-expanded="false" aria-controls="collapse-2-6">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> What is Bitcoin address? </h6>
                            </div>
                            <div id="collapse-2-6" class="collapse" aria-labelledby="heading-2-6"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>
                                        A Bitcoin address, or simply address, is an identifier of 26-35 alphanumeric
                                        characters, beginning with the number 1 or 3, which represents a possible
                                        destination for a Bitcoin payment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->

                    </div>

                    <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-7" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#collapse-2-7" aria-expanded="false" aria-controls="collapse-2-7">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How does Bitcoin works ?</h6>
                            </div>
                            <div id="collapse-2-7" class="collapse" aria-labelledby="heading-2-7"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>
                                        You can get started with Bitcoin without understanding the technical details.
                                        Once you have installed a Bitcoin wallet on your computer or mobile phone,
                                        it will generate your first Bitcoin address and you can create more whenever
                                        you need one. More necessary information you can find by visiting
                                        https://bitcoin.org/en/how-it-works.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->

                    </div>

                    <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-8" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#collapse-2-8" aria-expanded="false" aria-controls="collapse-2-8">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> What is Bitcoin mining?</h6>
                            </div>
                            <div id="collapse-2-8" class="collapse" aria-labelledby="heading-2-8"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>
                                        Mining is a distributed consensus system that is used to confirm waiting
                                        transactions by including them in the block chain. It enforces a chronological
                                        order in the block chain, protects the neutrality of the network, and allows
                                        different computers to agree on the state of the system. To be confirmed,
                                        transactions must be packed in a block that fits very strict cryptographic rules
                                        that will be verified by the network
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->

                    </div>

                    <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-9" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#collapse-2-9" aria-expanded="false" aria-controls="collapse-2-9">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How do i access my Bitcoin account? </h6>
                            </div>
                            <div id="collapse-2-9" class="collapse" aria-labelledby="heading-2-9"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>
                                        Click on the login link and enter the required information to access
                                        your account.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->

                    </div>

                    <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-10" data-bs-toggle="collapse" role="button"
                                 data-bs-target="#collapse-2-10" aria-expanded="false" aria-controls="collapse-2-10">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> how many times can i make a deposit?</h6>
                            </div>
                            <div id="collapse-2-10" class="collapse" aria-labelledby="heading-2-10"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>You can make as many deposit as you want on any of our investment plans except the Starter Plan where you can only invest two times. And you can only withdraw once in the Starter plan.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->

                    </div>

                </div>

            </div>
            <!--pricing faq end-->
        </div>
    </section><!-- END SECTION FAQ -->

    <!-- Start FAQ Contact Area -->
    <section class="faq-contact-area pb-100">
        <div class="container">
            <div class="ask-question">
                <div class="section-title">
                    <h2>Have Question ? Get in touch!</h2>
                </div>

                <div class="single-privacy">
                    <p>
                        If you have any question you can easily contact us through livechat or send us
                        an email at <a href="mailto: {{$web->email}}"> {{$web->email}}</a> We will reply you within an hour.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
