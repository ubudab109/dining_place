@extends('layouts.vendor.app')
@section('title','QR CODE')
@push('css_or_js')
    <!-- Custom styles for this page -->
@endpush

@section('content')
<div class="content container-fluid"> 
  <div class="row">
    <div class="col-sm-4">
      <h3 class="card-title">Restaurant’s QR Code Design</h3>
      <p class="card-text">Use the design below to display in front of your restaurant</p>
      <div class="card">
        <div class="card-body">
          <div class="row mb-5 justify-content-center">
            <h1 style="font-size: 20px; font-weight: bold; line-height: 30px;">Scan QR Code Below To See Our Menu</h1>
          </div>
          <div class="row justify-content-center mb-5">
            <img src="{{asset('storage/restaurant/'. $restaurant->logo)}}" alt="" style="border-radius: 50%; width: 30%;  ">
          </div>
          <div class="row justify-content-center text-center mb-5">
            <p>Now you can order contactless and pay cashless through your smartphone with us through My Dining Place!</p>
          </div>
          <div class="row justify-content-center">
            
            {!! QrCode::size(200)->generate(route('restaurant-list', $restaurant->slug)); !!}
          </div>
          <div class="row justify-content-center mt-4">
            <img src="https://mydiningplace.com/wp-content/uploads/2020/12/IMG-20201214-WA0002.jpg" width="150">
          </div>
          <div class="row justify-content-center">
            <p class="qr_code_desc" style="font-weight:300;padding-top: 15px">www.mydiningplace.com</p>
          </div>
          <div class="row justify-content-center">
            <img src="https://mydiningplace.com/wp-content/uploads/2020/12/download.png" width="150">
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 mt-8">
      <div class="row justify-content-center">
        {!! QrCode::size(200)->generate(route('restaurant-list', $restaurant->slug)); !!}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card text-center">
        <div class="card-header">
          Table's QR code.
          Use the generator below to generate QR Code for your tables. Save each photo and place on your table accordingly
        </div>
        <div class="card-body">
          <form action="">
            <div class="col-7">
              <input type="hidden" name="" id="slug" value={{$restaurant->slug}}>
              <input type="text" name="title" id="title" class="form-control" placeholder="title">
            </div>
            <div class="col-7">
              <select name="table" id="table" class="form-control">
                <option value="" selected disabled>Select Table</option>
                @foreach ($tables as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
            </div>
          </form>
          <div class="form-group mt-3 text-left">
            <button type="button" onclick="generate()" class="btn btn-primary">Generate</button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="row mt-8">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="row mb-5 justify-content-center">
            <h1 style="font-size: 20px; font-weight: bold; line-height: 30px;">Scan QR Code Below To See Our Menu</h1>
          </div>
          <div class="row justify-content-center mb-5">
            <img src="{{asset('storage/restaurant/'. $restaurant->logo)}}" alt="" style="border-radius: 50%; width: 30%;  ">
          </div>
          <div class="row justify-content-center text-center mb-5">
            <p>Now you can order contactless and pay cashless through your smartphone with us through My Dining Place!</p>
          </div>
          <div class="row justify-content-center">
            <div id="qrcode-2"></div>
          </div>
          <div class="row justify-content-center mt-4">
            <img src="https://mydiningplace.com/wp-content/uploads/2020/12/IMG-20201214-WA0002.jpg" width="150">
          </div>
          <div class="row justify-content-center">
            <p class="qr_code_desc" style="font-weight:300;padding-top: 15px">www.mydiningplace.com</p>
          </div>
          <div class="row justify-content-center">
            <img src="https://mydiningplace.com/wp-content/uploads/2020/12/download.png" width="150">
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
  function generate()
  {
    var title = $("#title").val();
    var slug = $("#slug").val();
    var table = $("#table").val();
    if (title == '' || table == '') {
      alert('Please Fill First')
    } else {
      var url = "{{route('restaurant-list', ':slug')}}?table=:table"
      url = url.replace(':slug', slug);
      url = url.replace(':table', table);
      new QRCode(document.getElementById("qrcode-2"), {
        text: url,
      });
    }
  }
</script>
@endsection
@push('script')
    <!-- Page level plugins -->
    
@endpush
