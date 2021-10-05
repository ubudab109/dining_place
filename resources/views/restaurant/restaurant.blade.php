@extends('layouts.landing.app')

@section('title','Restaurant')

@section('styler')
    <style>
        .aligner {
            text-align: center;
        }
        @media (min-width: 700px) {
            .aligner {
                text-align: center;
            }
        }

        @media (min-width: 1000px) {
            .aligner {
                text-align: left !important;
                margin-left: 100px; 
            }
        }

        .header-bot-wrapper {
            height: 173px;
        }

        @media (max-width: 427px) {
            .header-bot-wrapper {
                height: 74px;
            }
        }

        @media (max-width: 550px) {
            .header-bot-wrapper {
                height: 106px;
            }
        }

        @media (max-width: 553px) {
            .header-bot-wrapper {
                height: 122px;
            }
        }
        .bg-custom {
            background-color: #f67280;
        }
        /*
            ** Style Simple Ecommerce Theme for Bootstrap 4
            ** Created by T-PHP https://t-php.fr/43-theme-ecommerce-bootstrap-4.html
            */
            .bloc_left_price {
                color: #c01508;
                text-align: center;
                font-weight: bold;
                font-size: 150%;
            }
            .category_block li:hover {
                background-color: #f67280;
            }
            .category_block li:hover a {
                color: #ffffff;
            }
            .category_block li a {
                color: #343a40;
            }
            .add_to_cart_block .price {
                color: #c01508;
                text-align: center;
                font-weight: bold;
                font-size: 200%;
                margin-bottom: 0;
            }
            .add_to_cart_block .price_discounted {
                color: #343a40;
                text-align: center;
                text-decoration: line-through;
                font-size: 140%;
            }
            .product_rassurance {
                padding: 10px;
                margin-top: 15px;
                background: #ffffff;
                border: 1px solid #6c757d;
                color: #6c757d;
            }
            .product_rassurance .list-inline {
                margin-bottom: 0;
                text-transform: uppercase;
                text-align: center;
            }
            .product_rassurance .list-inline li:hover {
                color: #343a40;
            }
            .reviews_product .fa-star {
                color: gold;
            }
            .pagination {
                margin-top: 20px;
            }
    </style>
@endsection
@section('content')
    <main>
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card" style="border: none !important;">
                    <div class="card-body">
                        @if($data->cover_photo)
                        <div class="row header-bot-wrapper">
                            <div class="col-12"  style="max-height:250px; overflow-y: hidden;">
                                 <img src="{{asset('storage/restaurant/cover/'.$data->cover_photo)}}"  style="max-height:auto;width: 100%;">
                            </div>
                        </div>
                        @endif
                        <div class="row justify-content-center" style="color: white">
                            <h4 class="text-center">{{$data->name}}</h4>
                            <div class="col-12 col-md-12">
                                <div class="card" style="background: #161616 !important">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 text-center">
                                                <img src="{{asset('storage/restaurant/'. $data->logo)}}" alt="" style="border-radius: 50%; width: 50%;  ">
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <div class="row ml-1">
                                                    <h3 class="display-5" id="username"></h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2"><i class="fas fa-map-marker-alt" style="color: #f67280 !important"></i></div>
                                                    <div class="col-6">: {{$data->address}} </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2"><i class="fas fa-phone" style="color: #f67280 !important"></i></div>
                                                    <div class="col-6">: {{$data->phone}}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2"><i class="fas fa-envelope" style="color: #f67280 !important"></i></div>
                                                    <div class="col-6">: {{$data->email}}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 text-center mt-2">
                                                <button class="btn btn-primary">Reservations</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12 col-sm-3">
                        <div class="card bg-light mb-3">
                            <div class="card-header bg-custom text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                            <ul class="list-group category_block">
                                <li class="list-group-item"><a href="/restaurant/{{$data->slug}}">Show All</a></li>
                                @foreach ($categories as $item) 
                                    <li class="list-group-item"><a href="/restaurant/{{$data->slug}}/{{$item->id}}">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card bg-light mb-3">
                            <div class="card-header bg-custom text-white text-uppercase">Top Selling</div>
                            @foreach ($sellings as $product)    
                                <div class="card-body">
                                    <img class="img-fluid" src="{{asset('storage/product/'.$product->image)}}" />
                                    <h5 class="card-title text-center">{{$product->name}}</h5>
                                    <p class="card-text text-center">{{$product->description}}</p>
                                    <p class="card-text text-center"><strike>Rp . {{number_format($product->price, 0)}}</strike></p>
                                    <p class="bloc_left_price">Rp. {{number_format($product->total_discount, 0)}}</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="card bg-light mb-3">
                            <div class="card-header bg-custom text-white text-uppercase">On Sale</div>
                            @foreach ($sellings as $product)
                                
                            <div class="card-body">
                                <img class="img-fluid" src="{{asset('storage/product/'.$product->image)}}" />
                                <h5 class="card-title text-center">{{$product->name}}</h5>
                                <p class="card-text text-center">{{$product->description}}</p>
                                <p class="card-text text-center"><strike>Rp . {{number_format($product->price, 0)}}</strike></p>
                                <p class="bloc_left_price">Rp. {{number_format($product->total_discount, 0)}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            @if ($data->foods->count() < 1) 
                            <div class="col-12 col-md-6 col-lg-4">
                                <h4>No Data Found</h4>
                            </div>
                            @else
                            @foreach ($data->foods as $food)    
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card">
                                        <img class="card-img-top" src={{asset('storage/product/'.$food->image)}} alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title text-center"><a href="product.html" title="View Product">{{$food->name}}</a></h4>
                                            <p class="card-text text-center">{{$food->description}}</p>
                                            @if ($food->discount > 0)
                                                <p class="card-text text-center"><strike>Rp . {{number_format($food->price, 0)}}</strike></p>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="btn btn-danger btn-block">Rp. {{number_format($food->total_discount, 0)}}</p>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="btn btn-danger btn-block">Rp. {{number_format($food->price, 0)}}</p>
                                                    </div>
                                                </div>
                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
        {{-- <div class="main-body-div">
            
            <!-- Top Start -->
            <section class="top-start" style="min-height: 100px">

               
            </section>
            <!-- Top End -->
        </div> --}}
    </main>
@endsection
