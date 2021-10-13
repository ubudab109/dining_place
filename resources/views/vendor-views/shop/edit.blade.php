
@extends('layouts.vendor.app')
@section('title',__('messages.edit_restaurant'))
@push('css_or_js')
    <!-- Custom styles for this page -->
    <link href="{{asset('assets/admin')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
     <!-- Custom styles for this page -->
     <link href="{{asset('assets/admin/css/croppie.css')}}" rel="stylesheet">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <style>
        @media(max-width:375px){
         #shop-image-modal .modal-content{
           width: 367px !important;
         margin-left: 0 !important;
     }
    
     }

@media(max-width:500px){
 #shop-image-modal .modal-content{
           width: 400px !important;
         margin-left: 0 !important;
     }
   
   
}
 </style>
@endpush
@section('content')
    <!-- Content Row -->
    <div class="content container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home">Restaurant</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu1">Address</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu2">Document</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu3">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu4">Bank</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu5">Settings</a>
            </li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
    
            <div class="tab-pane container active" id="home">@include('vendor-views.shop.partials._edit-info')</div>
            <div class="tab-pane fade container fade" id="menu1">@include('vendor-views.shop.partials._edit-address')</div>
            <div class="tab-pane fade container fade" id="menu2">@include('vendor-views.shop.partials._edit-document')</div>
            <div class="tab-pane fade container fade" id="menu3">@include('vendor-views.shop.partials._edit-social')</div>
            <div class="tab-pane fade container fade" id="menu4">@include('vendor-views.shop.partials._edit-bank')</div>
            <div class="tab-pane fade container fade" id="menu5">@include('vendor-views.shop.partials._edit-setting')</div>
          </div>
    </div>
@endsection

@push('script_2')

   <script>
        function readURL(input, viewer) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+viewer).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#coverImageUpload").change(function () {
            readURL(this, 'coverImageViewer');
        });
        $("#customFileUpload").change(function () {
            readURL(this, 'viewer');
        });
   </script>
@endpush
