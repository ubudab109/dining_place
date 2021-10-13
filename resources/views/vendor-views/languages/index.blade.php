@extends('layouts.vendor.app')
@section('title','QR CODE')
@push('css_or_js')
    <!-- Custom styles for this page -->
@endpush

@section('content')
<div class="content container-fluid"> 
  <div class="row">
    <div class="col-sm-4">
      <h3 class="card-title">Set your Main Menu’s Language</h3>
      <p class="card-text">Your current language is {{$languageRestaurant->name}}</p>
      <div class="card">
        <div class="card-body">
          <form action="{{route('vendor.language.update')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="">Set your Main Menu’s Language</label>
              <select name="id_lang" id="" class="form-control">
                @foreach ($restaurant->language as $item)
                  <option value="{{$item->id}}" {{$restaurant->language_id == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                @endforeach
              </select>
            </div>
            <button class="btn btn-pink" type="submit">Submit</button>
            
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-8">
      <div class="card">
        <div class="card-header">
          <h4>Add New Language</h4>
        </div>
        <div class="card-body">
          <form action="{{route('vendor.language.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <select name="code" id="" class="form-control">
                <option value="" selected disabled>Select Language</option>
                @foreach ($languages as $item)
                   <option value="{{$item->code}}">{{$item->english_name}}</option> 
                @endforeach
              </select>
            </div>
            <button class="btn btn-pink" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <hr />
  <hr />
  <div class="row">
    <div class="col-8">
      @foreach ($restaurant->language as $item)
        <img src="{{asset('assets/flags_new/'.$item->languages->flag->flag)}}"/>
      @endforeach
    </div>
  </div>
  </div>
</div>
@endsection
@push('script')
    <!-- Page level plugins -->
    
@endpush
