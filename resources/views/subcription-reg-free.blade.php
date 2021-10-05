@extends('layouts.landing.app')

@section('title','Privacy Policy')

@section('content')
    <main>
        
        <div class="main-body-div">
            <!-- Top Start -->
            <section class="top-start" style="min-height: 100px">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-2 text-center">
                            <h1>REGISTRATION</h1>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12 col-lg-12 mb-lg-2">
                            <div class="border rounded px-3 py-4">
                                <form action="{{url('subcription/free-reg')}}" method="post" enctype="multipart/form-data" class="js-validate">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="input-label" for="name">{{__('messages.restaurant')}} {{__('messages.name')}}</label>
                                                <input type="text" name="restaurant_name" id="restaurant_name" class="form-control" placeholder="{{__('messages.first')}} {{__('messages.name')}}" value="{{old('name')}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="input-label" for="address">{{__('messages.restaurant')}} {{__('messages.address')}}</label>
                                                <textarea type="text" name="address" id="address_res" class="form-control" placeholder="{{__('messages.restaurant')}} {{__('messages.address')}}" required >{{old('address')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="input-label" for="address">{{__('messages.vat/tax')}} (%)</label>
                                                <input type="number" name="tax" id="tax" class="form-control" placeholder="{{__('messages.vat/tax')}}" min="0" step=".01" required value="{{old('tax')}}">
                                            </div>
                                            <div class="form-group">
                                                <label class="input-label">{{__('messages.restaurant')}} {{__('messages.logo')}}<small style="color: red"> ( {{__('messages.ratio')}} 1:1 )</small></label>
                                                <div class="custom-file">
                                                    <input type="file" id="foto_restaurant" name="logo" id="customFileEg1" class="custom-file-input"
                                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" required>
                                                    <label class="custom-file-label" for="logo">{{__('messages.choose')}} {{__('messages.file')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" style="margin-top: auto;margin-bottom: auto;">
                                            <div class="form-group" style="margin-bottom:0%;">                       
                                                <center>
                                                    <img style="height: 200px;border: 1px solid; border-radius: 10px;" id="viewer"
                                                        src="{{asset('assets/admin/img/400x400/img2.jpg')}}" alt="delivery-man image"/>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label class="input-label" for="choice_zones">{{__('messages.zone')}}<span
                                                        class="input-label-secondary" title="{{__('messages.select_zone_for_map')}}"><img src="{{asset('/assets/admin/img/info-circle.svg')}}" alt="{{__('messages.select_zone_for_map')}}"></span></label>
                                                <select name="zone_id" id="choice_zones" required
                                                        class="form-control js-select2-custom"  data-placeholder="{{__('messages.select')}} {{__('messages.zone')}}">
                                                        <option value="" selected disabled>{{__('messages.select')}} {{__('messages.zone')}}</option>
                                                    @foreach(\App\Models\Zone::all() as $zone)
                                                        <option value="{{$zone->id}}">{{$zone->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="input-label" for="latitude">{{__('messages.latitude')}}<span
                                                        class="input-label-secondary" title="{{__('messages.restaurant_lat_lng_warning')}}"><img src="{{asset('/assets/admin/img/info-circle.svg')}}" alt="{{__('messages.restaurant_lat_lng_warning')}}"></span></label>
                                                <input type="text" id="latitude"
                                                    name="latitude" class="form-control"
                                                    placeholder="Ex : -94.22213" value="{{old('latitude')}}" required readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="input-label" for="longitude">{{__('messages.longitude')}}<span
                                                        class="input-label-secondary" title="{{__('messages.restaurant_lat_lng_warning')}}"><img src="{{asset('/assets/admin/img/info-circle.svg')}}" alt="{{__('messages.restaurant_lat_lng_warning')}}"></span></label>
                                                <input type="text" 
                                                    name="longitude" class="form-control"
                                                    placeholder="Ex : 103.344322" id="longitude" value="{{old('longitude')}}" required readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-8 col-12">
                                            <div id="map"></div>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="name">{{__('messages.upload')}} {{__('messages.cover')}} {{__('messages.photo')}} <span class="text-danger">({{__('messages.ratio')}} 2:1)</span></label>
                                                <div class="custom-file">
                                                    <input type="file" name="cover_photo" id="coverImageUpload" class="custom-file-input"
                                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                                    <label class="custom-file-label" for="customFileUpload">{{__('messages.choose')}} {{__('messages.file')}}</label>
                                                </div>
                                            </div> 
                                            <center>
                                                <img style="max-width: 100%;border: 1px solid; border-radius: 10px; max-height:200px;" id="coverImageViewer"
                                                src="{{asset('assets/admin/img/900x400/img1.jpg')}}" alt="Product thumbnail"/>
                                            </center>  
                                            <br>
                                            <small class="nav-subtitle border-bottom">{{__('messages.owner')}} {{__('messages.info')}}</small>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label class="input-label" for="f_name">{{__('messages.first')}} {{__('messages.name')}}</label>
                                                        <input type="text" name="f_name" id="f_name" class="form-control" placeholder="{{__('messages.first')}} {{__('messages.name')}}"
                                                            value="{{old('f_name')}}"  required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label class="input-label" for="l_name">{{__('messages.last')}} {{__('messages.name')}}</label>
                                                        <input type="text" name="l_name" id="l_name" class="form-control" placeholder="{{__('messages.last')}} {{__('messages.name')}}"
                                                        value="{{old('l_name')}}"  required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label class="input-label" for="phone">{{__('messages.phone')}}</label>
                                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Ex : 017********"
                                                        value="{{old('phone')}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            
                                            <small class="nav-subtitle border-bottom">{{__('messages.login')}} {{__('messages.info')}}</small>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label class="input-label" for="email">{{__('messages.email')}}</label>
                                                        <input type="email" name="email" id="user_email" class="form-control" placeholder="Ex : ex@example.com"
                                                        value="{{old('email')}}"  required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="js-form-message form-group">
                                                        <label class="input-label" for="signupSrPassword">Password</label>

                                                        <div class="input-group input-group-merge">
                                                            <input type="password" class="js-toggle-password form-control" name="password" id="signupSrPassword" placeholder="6+ characters required" aria-label="6+ characters required" required
                                                            data-msg="Your password is invalid. Please try again."
                                                            data-hs-toggle-password-options='{
                                                            "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                                                            "defaultClass": "tio-hidden-outlined",
                                                            "showClass": "tio-visible-outlined",
                                                            "classChangeTarget": ".js-toggle-passowrd-show-icon-1"
                                                            }'>
                                                            <div class="js-toggle-password-target-1 input-group-append">
                                                                <a class="input-group-text" href="javascript:;">
                                                                    <i class="js-toggle-passowrd-show-icon-1 tio-visible-outlined"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="js-form-message form-group">
                                                        <label class="input-label" for="signupSrConfirmPassword">Confirm password</label>

                                                        <div class="input-group input-group-merge">
                                                        <input type="password" class="js-toggle-password form-control" name="confirmPassword" id="signupSrConfirmPassword" placeholder="6+ characters required" aria-label="6+ characters required" required
                                                                data-msg="Password does not match the confirm password."
                                                                data-hs-toggle-password-options='{
                                                                "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                                                                "defaultClass": "tio-hidden-outlined",
                                                                "showClass": "tio-visible-outlined",
                                                                "classChangeTarget": ".js-toggle-passowrd-show-icon-2"
                                                                }'>
                                                        <div class="js-toggle-password-target-2 input-group-append">
                                                            <a class="input-group-text" href="javascript:;">
                                                            <i class="js-toggle-passowrd-show-icon-2 tio-visible-outlined"></i>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if (!$subscription->is_free)
                                                <input type="hidden" name="price" id="restaurant_price" value="{{$subscription->subs_price}}">
                                                <input type="hidden" name="price" id="subsId" value="{{$subscription->id}}">
                                                <div class="col-md-12 col-12">
                                                    <label for="payment_type">Payment Type</label>
                                                    <select name="payment_type" id="payment_type" required class="form-control">
                                                        <option value="" selected disabled>Select Payment Type</option>
                                                        {{-- <option value="manual">Bank Transfer Manual</option> --}}
                                                        <option value="xendit">Xendit Payment Gateway</option>
                                                    </select>
                                                </div>
                                            @endif
                                            @if (!$subscription->is_free)    
                                                <button type="button" onclick="getVal()" class="btn btn-primary mt-3" data-toggle="modal" data-backdrop="true" id="pay">Pay and Register</button>  
                                            @else
                                                <button type="submit" class="btn btn-primary mt-3">Register</button>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Top End -->
            
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="paymentModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Select Bank</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body" id="modal-body">
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('script_2')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        

        function getVal() {
            var f_name = $("#f_name").val();
            var l_name = $("#l_name").val();
            var email = $("#user_email").val();
            var price = $("#restaurant_price").val();
            var phone = $("#phone").val();
            var restaurantName = $("#restaurant_name").val();
            var tax = $("#tax").val();
            var paymentType = $("#payment_type").val();

            if (f_name == '' || l_name == '' || email == '' || price == null || phone == '' || restaurantName == '' || paymentType == '' || tax == null) {
                alert('Please Fill All Input')
            } else {
                $("#paymentModal").modal('show');
                $("#modal-body").html("<div id='loader-payment' class='col-12 text-center'>" +
                "<div class='col'><h2>Fetching Bank Account</h2></div>" +
                "<div class='col'><img src='{{asset('assets/load.gif')}}' alt='' width='100' height='100'></div>" +
                "</div>")
                var url = "{{route('getListVa')}}";
                var dataBank = ''
                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'json',
                    success: function(res) {
                        $.each(res, function(index, data) {
                            $("#modal-body").append(`<div class="col-md-8 col-8"><div class="d-flex justify-content-between"><h4>${data.name}</h4><button type="button" class="btn btn-primary" onclick="createVal('${data.code}')">Choose</button></div></div><hr />`);
                        })
                        
                        $("#loader-payment").html('');
                    },
                    error: function(err) {
                        console.log(err);
                    }
                })
            }
            
        }

        function createVal(bankCode) {
            $("#modal-body").html("<div id='loader-payment' class='col-12 text-center'>" +
                "<div class='col'><h2>Generating VA</h2></div>" +
                "<div class='col'><img src='{{asset('assets/load.gif')}}' alt='' width='100' height='100'></div>" +
                "</div>")
            var url = "{{route('createVa')}}";
            var f_name = $("#f_name").val();
            var l_name = $("#l_name").val();
            var email = $("#user_email").val();
            var price = $("#restaurant_price").val();
            var subsId = $("#subsId").val();
            var phone = $("#phone").val();
            var restaurantName = $("#restaurant_name").val();
            var tax = $("#tax").val();
            var address = $("#address_res").val();
            var fotoRestaurant = $("#foto_restaurant")[0].files;
            var coverFoto = $("#coverImageUpload")[0].files;
            var subsId = $("#subsId").val();
            var formData = new FormData();

            formData.append('email', email);
            formData.append('bank_code', bankCode);
            formData.append('f_name', f_name);
            formData.append('l_name', l_name);
            formData.append('price', price);
            formData.append('phone', phone);
            formData.append('restaurant_name', restaurantName);
            formData.append('tax', tax);
            formData.append('address', address);
            formData.append('logo', fotoRestaurant);
            formData.append('cover_photo', coverFoto);
            formData.append('subsId', subsId);
            $.ajax({
                type : 'POST',
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    $("#modal-body").html('');
                    $("#modal-body").append(`
                        <div class="col-12">
                            <div class="col-8">
                                Bank
                                ${res.bank_code}
                            </div>
                            <div class="col-8">
                                Virtual Account Number
                                ${res.account_number}
                            </div>
                            <div class="col-8">
                                Total Payment
                                ${res.expected_amount}
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-primary" onclick="finishPayment()">Finish</button>
                        </div>
                    `);
                },
                error: function (err) {
                    $("#modal-body").html('');
                    $("#modal-body").append('<div class="col-md-8">Error, Please Try Again</div>')
                }
            });
        }

        function finishPayment() {
            Swal.fire({
                icon: 'success',
                title: 'Registration Complete',
                text: 'Click Here, Then Go To Login Page',
            }).then((res) => {
                window.location.href = "{{route('home')}}"
            })
        }
    </script>
    <script>
      $(document).on('ready', function () {            

        // INITIALIZATION OF SHOW PASSWORD
        // =======================================================
        $('.js-toggle-password').each(function () {
          new HSTogglePassword(this).init()
        });


        // INITIALIZATION OF FORM VALIDATION
        // =======================================================
        $('.js-validate').each(function() {
          $.HSCore.components.HSValidation.init($(this), {
            rules: {
              confirmPassword: {
                equalTo: '#signupSrPassword'
              }
            }
          });
        });
      });
    </script>
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

        $("#customFileEg1").change(function () {
            readURL(this, 'viewer');
        });

        $("#coverImageUpload").change(function () {
            readURL(this, 'coverImageViewer');
        });
    </script>

    <script src="{{asset('assets/admin/js/spartan-multi-image-picker.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            $("#coba").spartanMultiImagePicker({
                fieldName: 'identity_image[]',
                maxCount: 5,
                rowHeight: '120px',
                groupClassName: 'col-2',
                maxFileSize: '',
                placeholderImage: {
                    image: '{{asset('assets/admin/img/400x400/img2.jpg')}}',
                    width: '100%'
                },
                dropFileLabel: "Drop Here",
                onAddRow: function (index, file) {

                },
                onRenderedPreview: function (index) {

                },
                onRemoveRow: function (index) {

                },
                onExtensionErr: function (index, file) {
                    toastr.error('Please only input png or jpg type file', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                },
                onSizeErr: function (index, file) {
                    toastr.error('File size too big', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                }
            });
        });
    </script>
@endpush