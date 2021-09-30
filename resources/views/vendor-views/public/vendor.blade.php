@extends('layouts.landing.app')

@section('title','About Us')

@section('content')
    <main>
        <div class="main-body-div">
            <!-- Top Start -->
            <section class="top-start" style="min-height: 100px">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-2 text-center">
                            <h1>{{__('messages.about_us')}}</h1>
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
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search Product...">
                                    </div>
                                    <p><b>Categories</b></p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search Product...">
                                    </div>
                                    <p><b>Top Selling</b></p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search Product...">
                                    </div>
                                    <p><b>On Sale</b></p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search Product...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-9">
                                Menu
                            </div>
                        </div>
                </div>
            </section>
            <!-- Top End -->
        </div>
    </main>
@endsection
