@extends('layouts.landing.app')

@section('title','Landing Page | '.\App\Models\BusinessSetting::where(['key'=>'business_name'])->first()->value??'Stack Food')

@section('styler')
    <style>
        .carousel-fade .carousel-inner .item {
        opacity: 0;
        -webkit-transition-property: opacity;
        -moz-transition-property: opacity;
        -o-transition-property: opacity;
        transition-property: opacity;
        }
        .carousel-fade .carousel-inner .active {
        opacity: 1;
        }
        .carousel-fade .carousel-inner .active.left,
        .carousel-fade .carousel-inner .active.right {
        left: 0;
        opacity: 0;
        z-index: 1;
        }
        .carousel-fade .carousel-inner .next.left,
        .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
        }
        .carousel-fade .carousel-control {
        z-index: 2;
        }
        .list-text-red {
            color: #F67280;
            font-size: 9px;
        }

        .text-red {
            color: #F67280;
        }

        ul.no-bullets {
        list-style-type: none; /* Remove bullets */
        padding: 0; /* Remove padding */
        margin: 0; /* Remove margins */
        }

        .btn-subscribe {
            text-transform: uppercase;
            background-color: #F67280 !important;
            border-radius: 30px 30px 30px 30px;
            padding: 10px 50px 10px 050px;
        }
    </style>
@endsection
@section('content')

    <main>
        <div class="main-body-div">
            <!-- Top Start -->
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('assets/landing')}}/image/Header-WEB.png" alt="Third slide">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('assets/landing')}}/image/1-1.png">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('assets/landing')}}/image/2-1.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('assets/landing')}}/image/32.png" alt="Third slide">
                    </div>
                </div>
            </div>
            <!-- Top End -->

            <!-- About Us Start -->
            {{-- <section class="about-us">
                <div class="container">
                    <div class="row featured-section">
                        <div class="col-12 featured-title-m">
                            <span>About Us</span>
                        </div>
                        <div
                            class="col-lg-6 col-md-6  d-flex justify-content-center justify-content-md-start text-center text-md-left featured-section__image">
                            <img src="{{asset('assets/landing')}}/image/about_us_image.png"></img>
                        </div>
                        <!-- <div class="col-lg-3 col-md-0"></div> -->
                        <div class="col-lg-6 col-md-6">
                            <div class="featured-section__content"
                                 class="d-flex justify-content-center justify-content-md-start text-center text-md-left">
                                <span>About Us</span>
                                <h2
                                    class="d-flex justify-content-center justify-content-md-start text-center text-md-left">
                                    {{__('messages.about_title')}}</h2>
                                <p
                                    class="d-flex justify-content-center justify-content-md-start text-center text-md-left">
                                    {!! \Illuminate\Support\Str::limit(\App\CentralLogics\Helpers::get_settings('about_us'),200) !!}
                                </p>
                                <div
                                    class="d-flex justify-content-center justify-content-md-start text-center text-md-left">
                                    <a href="{{route('about-us')}}"
                                       class="btn btn-color-primary text-white rounded align-middle">Read More
                                        ...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- About Us End -->

            <!-- Why Choose Us Start -->
            {{-- <section class="why-choose-us">
                <div class="container">
                    <div class="row choosing-section">
                        <div class="choosing-section__title">
                            <div>
                                <h2>{{__('messages.why_choose_us')}}</h2>
                                <span>{{__('messages.why_choose_us_title')}}</span>
                                <hr class="customed-hr-1">
                            </div>
                        </div>
                        <div class="choosing-section__content">
                            <div>
                                <div class="choosing-section__image-card">
                                    <img src="{{asset('assets/landing')}}/image/clean_&_cheap_icon.png"></img>
                                </div>
                                <div style="margin: 0px 55px 30px 54px">
                                    <p>Clean & Cheap Price</p>
                                </div>
                            </div>

                            <div>
                                <div class="choosing-section__image-card">
                                    <img src="{{asset('assets/landing')}}/image/best_dishes_icon.png"></img>
                                </div>
                                <div style="margin: 0px 54px 30px 55px">
                                    <p>Best Dishes Near You</p>
                                </div>
                            </div>

                            <div>
                                <div class="choosing-section__image-card">
                                    <img
                                        src="{{asset('assets/landing')}}/image/virtual_restaurant_icon.png"></img>
                                </div>
                                <div style="margin: 0px 31px 30px 31px">
                                    <p>Your Own Virtual Restaurant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section> --}}
            <!-- Why Choose Us End -->

            <!-- Trusted Customers Starts -->
            {{-- <section class="trusted-customers">
                <div class="container">
                    <div class="trusted_customers__title">
                        <span class="trusted-customer mt-4" style="font-size: 33px">{{__('messages.trusted_by_customer')}} & {{__('messages.trusted_by_restaurant')}}</span>
                    </div>

                    <div class="mt-5">
                        <div class="demo">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="testimonial-slider" class="owl-carousel">
                                            @foreach(include('assets/landing/data/testimonial.php') as $data)
                                                <div class="testimonial">
                                                    <div class="pic">
                                                        <img src="{{$data['image']}}"
                                                             alt="">
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <h3 class="testimonial-title">
                                                            {{$data['name']}}
                                                            <small class="post">{{$data['position']}}</small>
                                                        </h3>
                                                        <p class="description">
                                                           {{$data['detail']}}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Trusted Customers Ends -->

            <section class="about-us mt-5" id="about-us">
                <div class="container">
                    <div class="row">
                        <div class="col-12 font-describe">
                            <p>Welcome to My Dining Place! We???re connecting diners and restaurants to make dining in still possible in the midst of the pandemic, with less risks and contact.</p>

                            <p>Customers who dine in can experience the features of our website with following benefits:</p>
                            
                            <ul class="no-bullets">
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Scan QR code placed on the table to access menu</li>
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Place order through our website</li>
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Pay the order through our website ??? no more contacts needed! Both cashless and contactless payment</li>
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Track their order through their account or e-mail</li>
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> See and leave reviews</li>
                            </ul>
                            <br />

                            <p><b>Future of Contactless Dining Experience is Coming Soon!</b></p>

                            <p>We are not done yet! Soon dinners can also download our app:</p>

                            <ul class="no-bullets">
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Find restaurants in your area that use our app</li>
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Browse through the menu before you choose your restaurant and make reservation</li>
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Don???t have time yet? Love the restaurant to add to wishlist</li>
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Find your foodprints ??? where you have been to dine</li>
                            </ul>
                            <br />


                            <p><b>Upcoming Features for Restaurant:</b></p>

                            <p>In the future with your app you can also:</p>
                            
                            <ul class="no-bullets">
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Use app payment methods for your customers to pay their bills through us ??? charge applies</li>
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Be found on our app before the customers want to find their place of dining</li>
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Advertise your restaurant on our app</li>
                                <li> <span><i class="fas fa-dot-circle list-text-red "></i></span> Make discounts for your customers</li>
                            </ul>
                            <br />

                            <p><b>Check out the Pricing Plan below and choose the most suitable one for your restaurant! </b></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-4" id="subcription">
                <div class="container">
                    <div class="row mt-2">
                        @foreach ($subscriptions as $subscription)
                        <div class="col-6">
                            <div class="card shadow rounded border-0 p-5">
                                <div class="card-body text-center">
                                    <div class="mb-5" style="color: #ff7714;">
                                        <h3 class="text-red">{{$subscription->subs_name}}</h3>
                                        <span class="text-red">{{$subscription->subtitle}}</span>
                                        @if (!$subscription->is_free)
                                            <h1 style="color: #697279; font-weight: bolder;">Rp. {{number_format($subscription->subs_price, 0)}}</h1>
                                        @endif
                                    </div>
                                    <div>
                                        {!! $subscription->desc !!}
                                    </div>
                                    <div class="mt-5">
                                        <a href="{{route('subs-reg', $subscription->id)}}" class="btn text-white btn-subscribe" style="background-color: #ff7714;">Subscribe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection

@section('scripts')
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
@endsection