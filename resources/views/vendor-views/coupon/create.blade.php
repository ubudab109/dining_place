@extends('layouts.vendor.app')

@section('title','Add new coupon')

@push('css_or_js')

@endpush

@section('content')
    <div class="content container-fluid mt-3">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title"><i class="tio-add-circle-outlined"></i> {{__('messages.add')}} {{__('messages.new')}} {{__('messages.coupon')}}</h1>
                </div>
            </div>
        </div>
        <a class="btn btn-pink mb-3" href="{{route('vendor.coupon.list')}}">Back</a>
        <!-- End Page Header -->
        <div class="row gx-2 gx-lg-3">
            <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">

                <form action="{{route('vendor.coupon.store')}}" method="post">
                    @csrf
                   <div class="row">
                       <div class="col-4">
                           <div class="form-group">
                               <label class="input-label" for="exampleFormControlInput1">{{__('messages.title')}}</label>
                               <input type="text" name="title" class="form-control" placeholder="New coupon" required>
                           </div>
                       </div>
                       <div class="col-4">
                           <div class="form-group">
                               <label class="input-label" for="exampleFormControlInput1">{{__('messages.coupon')}} {{__('messages.type')}}</label>
                               <select name="coupon_type" class="form-control" onchange="coupon_type_change(this.value)">
                                   <option value="default">{{__('messages.default')}}</option>
                                   <option value="first_order">{{__('messages.first')}} {{__('messages.order')}}</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-4" id="limit-for-user">
                           <div class="form-group">
                               <label class="input-label" for="exampleFormControlInput1">{{__('messages.limit')}} {{__('messages.for')}} {{__('messages.same')}} {{__('messages.user')}}</label>
                               <input type="number" name="limit" class="form-control" placeholder="EX: 10">
                           </div>
                       </div>
                   </div>

                    <div class="row">
                        <div class="col-md-4 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1">{{__('messages.code')}}</label>
                                <input type="text" name="code" class="form-control"
                                       placeholder="{{\Illuminate\Support\Str::random(8)}}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1">{{__('messages.start')}} {{__('messages.date')}}</label>
                                <input type="date" name="start_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1">{{__('messages.expire')}} {{__('messages.date')}}</label>
                                <input type="date" name="expire_date" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1">{{__('messages.min')}} {{__('messages.purchase')}}</label>
                                <input type="number" step="0.01" name="min_purchase" value="0" min="0" max="100000" class="form-control"
                                       placeholder="100">
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1">{{__('messages.max')}} {{__('messages.discount')}}</label>
                                <input type="number" step="0.01" min="0" value="0" max="1000000" name="max_discount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1">{{__('messages.discount')}}</label>
                                <input type="number" step="0.01" min="1" max="10000" name="discount" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-2 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1">{{__('messages.discount')}} {{__('messages.type')}}</label>
                                <select name="discount_type" class="form-control">
                                    <option value="amount">{{__('messages.amount')}}</option>
                                    <option value="percent">{{__('messages.percent')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label class="input-label" for="exampleFormControlSelect1">Exclude Items<span
                                    class="input-label-secondary"></span></label>
                            <select name="food_id[]" class="form-control js-select2-custom" multiple="multiple">
                                @foreach($foods as $food)
                                    <option value="{{$food['id']}}">{{$food['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-pink">{{__('messages.submit')}}</button>
                </form>
            
            </div>
        </div>
    </div>

@endsection

@push('script_2')
    <script>
        $(document).on('ready', function () {
            // INITIALIZATION OF DATATABLES
            // =======================================================
            var datatable = $.HSCore.components.HSDatatables.init($('#columnSearchDatatable'));

            $('#column1_search').on('keyup', function () {
                datatable
                    .columns(1)
                    .search(this.value)
                    .draw();
            });


            $('#column3_search').on('change', function () {
                datatable
                    .columns(9)
                    .search(this.value)
                    .draw();
            });

            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-select2-custom').each(function () {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });
        });

        function coupon_type_change(order_type) {
            if(order_type=='first_order'){
                $('#limit-for-user').hide();
            }else{
                $('#limit-for-user').show();
            }
        }
    </script>
@endpush
