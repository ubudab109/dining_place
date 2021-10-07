@extends('layouts.vendor.app')
@section('title','QR CODE')
@push('css_or_js')
    <!-- Custom styles for this page -->
@endpush

@section('content')
<div class="content container-fluid"> 
  <div class="row">
    <div class="col-sm-4">
      <h3 class="card-title">Payment Method</h3>
      <p class="card-text">Set your Payment Method</p>
      <div class="card">
        <div class="card-body">
          <form action="">
            @csrf
            <div class="form-group">
              <label for="">Do you want to allow customers to pay through our website/app (handling fee from 4% applies)?</label>
              <select name="" id="" class="form-control">
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection
@push('script')
    <!-- Page level plugins -->
    
@endpush
