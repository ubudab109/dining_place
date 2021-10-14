@extends('layouts.landing.app')

@section('title','Privacy Policy')
@section('styler')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{URL::asset('assets/admin')}}/css/vendor.min.css">
<link rel="stylesheet" href="{{URL::asset('assets/admin')}}/vendor/icon-set/style.css">
<!-- CSS Front Template -->
<link rel="stylesheet" href="{{URL::asset('assets/admin')}}/css/theme.minc619.css?v=1.0">

<style>
    .wizard-content-left {
    background-blend-mode: darken;
    background-color: rgba(0, 0, 0, 0.45);
    background-position: center center;
    background-size: cover;
    height: 100vh;
    padding: 30px;
    }
    .wizard-content-left h1 {
    color: #ffffff;
    font-size: 38px;
    font-weight: 600;
    padding: 12px 20px;
    text-align: center;
    }

    .form-wizard {
    color: #888888;
    padding: 30px;
    }
    .form-wizard .wizard-form-radio {
    display: inline-block;
    margin-left: 5px;
    position: relative;
    }
    .form-wizard .wizard-form-radio input[type="radio"] {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    background-color: #dddddd;
    height: 25px;
    width: 25px;
    display: inline-block;
    vertical-align: middle;
    border-radius: 50%;
    position: relative;
    cursor: pointer;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:focus {
    outline: 0;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:checked {
    background-color: #fb1647;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:checked::before {
    content: "";
    position: absolute;
    width: 10px;
    height: 10px;
    display: inline-block;
    background-color: #ffffff;
    border-radius: 50%;
    left: 1px;
    right: 0;
    margin: 0 auto;
    top: 8px;
    }
    .form-wizard .wizard-form-radio input[type="radio"]:checked::after {
    content: "";
    display: inline-block;
    webkit-animation: click-radio-wave 0.65s;
    -moz-animation: click-radio-wave 0.65s;
    animation: click-radio-wave 0.65s;
    background: #000000;
    content: '';
    display: block;
    position: relative;
    z-index: 100;
    border-radius: 50%;
    }
    .form-wizard .wizard-form-radio input[type="radio"] ~ label {
    padding-left: 10px;
    cursor: pointer;
    }
    .form-wizard .form-wizard-header {
    text-align: center;
    }
    .text-red {
        color: red !important;
    }
    .form-wizard .form-wizard-next-btn, .form-wizard .form-wizard-previous-btn, .form-wizard .form-wizard-submit {
    background-color: #f67280;
    color: #ffffff;
    display: inline-block;
    min-width: 100px;
    min-width: 120px;
    padding: 10px;
    text-align: center;
    }
    .form-wizard .form-wizard-next-btn:hover, .form-wizard .form-wizard-next-btn:focus, .form-wizard .form-wizard-previous-btn:hover, .form-wizard .form-wizard-previous-btn:focus, .form-wizard .form-wizard-submit:hover, .form-wizard .form-wizard-submit:focus {
    color: #ffffff;
    opacity: 0.6;
    text-decoration: none;
    }
    .form-wizard .wizard-fieldset {
    display: none;
    }
    .form-wizard .wizard-fieldset.show {
    display: block;
    }
    .form-wizard .wizard-form-error {
    display: none;
    background-color: #d70b0b;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: 2px;
    width: 100%;
    }

    .label-cus {
        font-weight: 800 !important;
    }
    .form-wizard .form-wizard-previous-btn {
    background-color: #f67280;
    }
    .form-wizard .form-control {
        font-weight: 500;
        height: auto !important;
        padding: 15px;
        color: black;
        background-color: white;
        border-color: #e5e5e5 !important;
    }
    .form-wizard .form-control:focus {
    box-shadow: none;
    }
    .form-wizard .form-group {
    position: relative;
    margin: 25px 0;
    }
    .form-wizard .wizard-form-text-label {
    position: absolute;
    left: 10px;
    top: 16px;
    transition: 0.2s linear all;
    }
    .form-wizard .focus-input .wizard-form-text-label {
    color: #d65470;
    top: -18px;
    transition: 0.2s linear all;
    font-size: 12px;
    }
    .form-wizard .form-wizard-steps {
    margin: 30px 0;
    }
    .form-wizard .form-wizard-steps li {
    width: 25%;
    float: left;
    position: relative;
    }
    .form-wizard .form-wizard-steps li::after {
    background-color: #f3f3f3;
    content: "";
    height: 5px;
    left: 0;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    border-bottom: 1px solid #dddddd;
    border-top: 1px solid #dddddd;
    }
    .form-wizard .form-wizard-steps li span {
    background-color: #dddddd;
    border-radius: 50%;
    display: inline-block;
    height: 40px;
    line-height: 40px;
    position: relative;
    text-align: center;
    width: 98px;
    z-index: 1;
    }
    .form-wizard .form-wizard-steps li:last-child::after {
    width: 50%;
    }
    .form-wizard .form-wizard-steps li.active span, .form-wizard .form-wizard-steps li.activated span {
    background-color: #d65470;
    color: #ffffff;
    }
    .form-wizard .form-wizard-steps li.active::after, .form-wizard .form-wizard-steps li.activated::after {
    background-color: #d65470;
    left: 50%;
    width: 50%;
    border-color: #d65470;
    }
    .form-wizard .form-wizard-steps li.activated::after {
    width: 100%;
    border-color: #d65470;
    }
    .form-wizard .form-wizard-steps li:last-child::after {
    left: 0;
    }
    .form-wizard .wizard-password-eye {
    position: absolute;
    right: 32px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    }
    @keyframes click-radio-wave {
    0% {
        width: 25px;
        height: 25px;
        opacity: 0.35;
        position: relative;
    }
    100% {
        width: 60px;
        height: 60px;
        margin-left: -15px;
        margin-top: -15px;
        opacity: 0.0;
    }
    }
    @media screen and (max-width: 767px) {
    .wizard-content-left {
        height: auto;
    }
    }

    .rounded {
    border-radius: 1rem
    }

    .nav-pills .nav-link {
        color: #555
    }

    .nav-pills .nav-link.active {
        color: white
    }

    input[type="radio"] {
        margin-right: 5px
    }

    .bold {
        font-weight: bold
    }
</style>
    
@endsection
@section('content')
    <main>
        
        <div class="main-body-div">
            <section class="wizard-section">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-6">
                        <div class="form-wizard">
                            <form action="{{url('subcription/free-reg')}}" method="post" role="form">
                                @csrf
                                <div class="form-wizard-header">
                                    <ul class="list-unstyled form-wizard-steps clearfix">
                                        <li class="activated"><span>Plan</span></li>
                                        <li class="active"><span>Registration</span></li>
                                        <li><span>Payment</span></li>
                                        <li><span>Thank You</span></li>
                                    </ul>
                                </div>
                                <fieldset class="wizard-fieldset show">
                                    <h5>Account Information</h5>
                                        <div class="form-group">
                                            <label class="input-label label-cus" for="name">{{__('messages.restaurant')}} {{__('messages.name')}}</label><span class="text-red">*</span>
                                            <input type="text" name="restaurant_name" id="restaurant_name" class="form-control wizard-required" placeholder="{{__('messages.first')}} {{__('messages.name')}}" value="{{old('name')}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="input-label label-cus" for="address">{{__('messages.restaurant')}} {{__('messages.address')}}</label><span class="text-red">*</span>
                                            <textarea type="text" name="address" id="address_res" class="form-control wizard-required" placeholder="{{__('messages.restaurant')}} {{__('messages.address')}}" required >{{old('address')}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="input-label label-cus" for="address">{{__('messages.vat/tax')}} (%)</label><span class="text-red">*</span>
                                            <input type="number" name="tax" id="tax" class="form-control wizard-required" placeholder="{{__('messages.vat/tax')}}" min="0" step=".01" required value="{{old('tax')}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="input-label label-cus">{{__('messages.restaurant')}} {{__('messages.logo')}}<small style="color: red"> ( {{__('messages.ratio')}} 1:1 )</small></label>
                                            <div class="custom-file">
                                                <input type="file" id="foto_restaurant" name="logo" id="customFileEg1" class="custom-file-input wizard-required"
                                                    accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" required>
                                                <label class="custom-file-label" for="logo">{{__('messages.choose')}} {{__('messages.file')}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-bottom:0%;">                       
                                            <center>
                                                <img style="height: 200px;border: 1px solid; border-radius: 10px;" id="viewer"
                                                    src="{{asset('assets/admin/img/400x400/img2.jpg')}}" alt="delivery-man image"/>
                                            </center>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label class="label-cus" for="name">{{__('messages.upload')}} {{__('messages.cover')}} {{__('messages.photo')}} <span class="text-danger">({{__('messages.ratio')}} 2:1)</span></label>
                                                    <div class="custom-file">
                                                        <input type="file" name="cover_photo" id="coverImageUpload" class="custom-file-input wizard-required"
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
                                                            <label class="input-label label-cus" for="f_name">{{__('messages.first')}} {{__('messages.name')}}<span class="text-red">*</span></label>
                                                            <input type="text" name="f_name" id="f_name" class="form-control wizard-required" placeholder="{{__('messages.first')}} {{__('messages.name')}}"
                                                                value="{{old('f_name')}}"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-group">
                                                            <label class="input-label label-cus" for="l_name">{{__('messages.last')}} {{__('messages.name')}}<span class="text-red">*</span></label>
                                                            <input type="text" name="l_name" id="l_name" class="form-control wizard-required" placeholder="{{__('messages.last')}} {{__('messages.name')}}"
                                                            value="{{old('l_name')}}"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-group">
                                                            <label class="input-label label-cus" for="phone">{{__('messages.phone')}}<span class="text-red">*</span></label>
                                                            <input type="text" name="phone" id="phone" class="form-control wizard-required" placeholder="Ex : 017********"
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
                                                            <label class="input-label label-cus" for="email">{{__('messages.email')}}<span class="text-red">*</span></label>
                                                            <input type="email" name="email" id="user_email" class="form-control wizard-required" placeholder="Ex : ex@example.com"
                                                            value="{{old('email')}}"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-12">
                                                        <div class="js-form-message form-group">
                                                            <label class="input-label label-cus" for="signupSrPassword">Password<span class="text-red">*</span></label>
        
                                                            <div class="input-group input-group-merge">
                                                                <input type="password" class="js-toggle-password form-control wizard-required" name="password" id="signupSrPassword" placeholder="6+ characters required" aria-label="6+ characters required" required
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
                                                    <div class="col-md-12 col-12">
                                                        <div class="js-form-message form-group">
                                                            <label class="input-label label-cus" for="signupSrConfirmPassword">Confirm password<span class="text-red">*</span></label>
        
                                                            <div class="input-group input-group-merge">
                                                            <input type="password" class="js-toggle-password form-control wizard-required" name="confirmPassword" id="signupSrConfirmPassword" placeholder="6+ characters required" aria-label="6+ characters required" required
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
                                                        <div class="form-group">
                                                            <label class="input-label label-cus" for="exampleFormControlSelect1">Restaurant Cuisine & Food Type<span
                                                                    class="input-label-secondary"></span><span class="text-red">*</span></label>
                                                            <select name="type" class="form-control wizard-required">
                                                                    <option value="restaurant">Restaurant</option>
                                                                    <option value="cafe">Cafe</option>
                                                                    <option value="cs">Coffee Shop</option>
                                                                    <option value="takeaway">Take Away</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="input-label label-cus" for="exampleFormControlSelect1">Restaurant Cuisine & Food Type<span
                                                                    class="input-label-secondary"></span><span class="text-red">*</span></label>
                                                            <select name="categories[]" id="categories" class="form-control js-select2-custom wizard-required" multiple="multiple">
                                                                @foreach(\App\Models\RestaurantType::all() as $type)
                                                                    <option value="{{$type['id']}}">{{$type['name']}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                    </div>
                                </fieldset>	
                                <fieldset class="wizard-fieldset">
                                    <h5>Order Information</h5>
                                    <div class="row">
                                        <div class="col-lg-{{!$subscription->is_free ? '6' : '12'}}">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <td>{{$subscription->subs_name}}</td>
                                                    <td>Rp. {{number_format($subscription->subs_price, 0)}}</td>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td>
                                                            <strong>Rp. {{number_format($subscription->subs_price, 0)}}</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Recurring Totals</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="1">Subtotal</th>
                                                        <td>
                                                            <strong>Rp. {{number_format($subscription->subs_price, 0)}}</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="1">Recuring Total</th>
                                                        <td>
                                                            <strong>Rp. {{number_format($subscription->subs_price, 0)}}</strong>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            @if (!$subscription->is_free)

                                            <h5>Virtual Account Here</h5>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Bank</th>
                                                        <th scope="col">Virtual Account</th>
                                                        <th scope="col">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <td id="bank"></td>
                                                    <td id="vanumber"></td>
                                                    <td id="total_price"></td>
                                                </tbody>
                                            </table>
                                            @endif
                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                
                                                    <div class="col-md-12 col-12">
                                                        @if (!$subscription->is_free)
                                                        <input type="hidden" name="price" id="restaurant_price" value="{{$subscription->subs_price}}">
                                                        <input type="hidden" name="externalId" id="externalId" value="">
                                                        <input type="hidden" name="externalId" id="status" value="">
                                                        @else
                                                        <input type="hidden" name="externalId" id="externalId" value="{{uniqid('SUBS')}}">
                                                        <input type="hidden" name="price" id="restaurant_price" value="0">
                                                        <input type="hidden" name="status" id="status" value="COMPLETED">
                                                        @endif

                                                        <input type="hidden" name="subsId" id="subsId" value="{{$subscription->id}}">
                                                        @if (!$subscription->is_free)
                                                            <label for="payment_type" class="label-cus">Payment Type<span class="text-red">*</span></label>
                                                            <select name="payment_type" onchange="getVal()" id="payment_type" required class="form-control wizard-required">
                                                                <option value="" selected disabled>Select Payment Type</option>
                                                                {{-- <option value="manual">Bank Transfer Manual</option> --}}
                                                                <option value="xendit">Virtual Account</option>
                                                            </select>
                                                        @endif
                                                    </div>
                                            </div>
                                            <div class="col-12" id="payment">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                        <button type="submit" class="form-wizard-next-btn float-right">Register</button>
                                    </div>
                                </fieldset>	
                                <fieldset class="wizard-fieldset">
                                    <div class="row justify-content-center">
                                        <div class="col-12 text-center">
                                            <h3>Thank You For Register</h3>
                                            <span>You Will Redirect To Home Page....</span>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="modal fade bd-example-modal-lg" id="paymentModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body" id="modal-body">
                    <div id='loader-payment' class='col-12 text-center'>
                        <div class='col'><h2>Fetching Bank Account</h2></div>
                        <div class='col'><img src='{{asset('assets/load.gif')}}' alt='' width='100' height='100'></div>
                        </div>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" id="paymentModalVa" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body" id="modal-body">
                    <div id='loader-payment' class='col-12 text-center'>
                        <div class='col'><h2>Generating VA</h2></div>
                        <div class='col'><img src='{{asset('assets/load.gif')}}' alt='' width='100' height='100'></div>
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

            // if (f_name == '' || l_name == '' || email == '' || price == null || phone == '' || restaurantName == '' || paymentType == '' || tax == null) {
            //     alert('Please Fill All Input')
            // } else {
                $("#paymentModal").modal('show');
                var url = "{{route('getListVa')}}";
                var dataBank = ''
                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'json',
                    success: function(res) {
                        $.each(res, function(index, data) {
                            $("#payment").append(`<div class="row justify-content-center mb-2">
                                                <div class="card" style="width: 74%;">
                                                    <div class="card-body">
                                                        <div class="form-check">
                                                            <input onchange="createVal('${data.code}')" value="${data.code}" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault${index}">
                                                            <span>Bank Transfer - </span>
                                                            <strong>${data.name}</strong>
                                                            <span><img src="{{asset('assets/bank/${data.code}.png')}}" style=" margin-left: 0.3em;
                                                                max-height: 23px;
                                                                max-width: 63px;" alt="" srcset=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>`);
                                            
                            
                        })
                        
                        $("#paymentModal").modal('hide');
                    },
                    error: function(err) {
                        console.log(err);
                    }
                })
            // }
            
        }

        function createVal(bankCode) {
            $("#paymentModalVa").modal('show');
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
            var cat = $("#categories").val();
            var categories = [];
            cat.map((res) => {
                categories.push(res);
            })
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
            categories.map((val, i) => {
                console.log(i);
                formData.append(`categories[${i}]`, val);
            })
            $.ajax({
                type : 'POST',
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    $("#paymentModalVa").modal('hide');
                    $("#externalId").val(res.external_id);
                    $("#status").val(res.status);
                    $("#bank").html(`<span>${res.bank_code}</span>`)
                    $("#vanumber").html(`<span>${res.account_number}</span>`)
                    $("#total_price").html(`Rp. <strong>${res.expected_amount}</strong>`)
                },
                error: function (err) {
                    alert('error')
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
    <script>
        $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip()
        $('.js-select2-custom').each(function () {
            var select2 = $.HSCore.components.HSSelect2.init($(this));
        });
        // click on next button
        $('.form-wizard-next-btn').click(function() {
            var parentFieldset = $(this).parents('.wizard-fieldset');
            var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-steps .active');
            var next = $(this);
            var nextWizardStep = true;
            parentFieldset.find('.wizard-required').each(function(){
                var thisValue = $(this).val();

                if( thisValue == "") {
                    $(this).siblings(".wizard-form-error").slideDown();
                    nextWizardStep = false;
                }
                else {
                    $(this).siblings(".wizard-form-error").slideUp();
                }
            });
            if( nextWizardStep) {
                next.parents('.wizard-fieldset').removeClass("show","400");
                currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
                next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
                $(document).find('.wizard-fieldset').each(function(){
                    if($(this).hasClass('show')){
                        var formAtrr = $(this).attr('data-tab-content');
                        $(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                            if($(this).attr('data-attr') == formAtrr){
                                $(this).addClass('active');
                                var innerWidth = $(this).innerWidth();
                                var position = $(this).position();
                                $(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                            }else{
                                $(this).removeClass('active');
                            }
                        });
                    }
                });
            }
        });
        //click on previous button
        $('.form-wizard-previous-btn').click(function() {
            var counter = parseInt($(".wizard-counter").text());;
            var prev =$(this);
            var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-steps .active');
            prev.parents('.wizard-fieldset').removeClass("show","400");
            prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
            currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
            $(document).find('.wizard-fieldset').each(function(){
                if($(this).hasClass('show')){
                    var formAtrr = $(this).attr('data-tab-content');
                    $(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                        if($(this).attr('data-attr') == formAtrr){
                            $(this).addClass('active');
                            var innerWidth = $(this).innerWidth();
                            var position = $(this).position();
                            $(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                        }else{
                            $(this).removeClass('active');
                        }
                    });
                }
            });
        });
        //click on form submit button
        $(document).on("click",".form-wizard .form-wizard-submit" , function(){
            var parentFieldset = $(this).parents('.wizard-fieldset');
            var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-steps .active');
            parentFieldset.find('.wizard-required').each(function() {
                var thisValue = $(this).val();
                if( thisValue == "" ) {
                    $(this).siblings(".wizard-form-error").slideDown();
                }
                else {
                    $(this).siblings(".wizard-form-error").slideUp();
                }
            });
        });
        // focus on input field check empty or not
        $(".form-control").on('focus', function(){
            var tmpThis = $(this).val();
            if(tmpThis == '' ) {
                $(this).parent().addClass("focus-input");
            }
            else if(tmpThis !='' ){
                $(this).parent().addClass("focus-input");
            }
        }).on('blur', function(){
            var tmpThis = $(this).val();
            if(tmpThis == '' ) {
                $(this).parent().removeClass("focus-input");
                $(this).siblings('.wizard-form-error').slideDown("3000");
            }
            else if(tmpThis !='' ){
                $(this).parent().addClass("focus-input");
                $(this).siblings('.wizard-form-error').slideUp("3000");
            }
        });
    });

    </script>
@endpush