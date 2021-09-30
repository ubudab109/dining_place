@extends('layouts.landing.app')

@section('title','Restaurant')

@section('content')
    <main>
        <div class="main-body-div">
            <!-- Top Start -->
            <section class="top-start" style="min-height: 100px">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-2 text-center">
                            <h1>{{ $data['name'] }} </h1>
                        </div>
                       
                    </div>
                     <div class="row">
                            <div class="col-3">
                                <div class="border rounded p-3">
                                    <p><b>Search</b></p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search Product...">
                                    </div>
                                    <p><b>Choose Language</b></p>
                                    
                                    <p><b>Categories</b></p>
                                    
                                    <p><b>Top Selling</b></p>
                                    
                                    <p><b>On Sale</b></p>
                                    
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-12">
                                        Menu
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    @foreach ($data->foods as $food)
                                    <div class="col-3">
                                        <img src="{{asset('storage/app/public/product')}}/{{$food['image']}}" class="img-fluid" alt="">
                                        <div class="text-center mt-3">
                                            {{ $food->name }}
                                            <br>
                                            Rp. {{ $food->price }}

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                </div>
            </section>
            <!-- Top End -->
        </div>
    </main>
@endsection
