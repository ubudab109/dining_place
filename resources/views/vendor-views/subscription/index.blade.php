@extends('layouts.vendor.app')

@section('title','Subscription')

@push('css_or_js')

@endpush

@section('content')
<div class="content container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="page-header-title text-capitalize">Suubscription</h4>
        </div>
        <div class="card-body row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="for-card col-md-6 mb-1">
                <div class="card for-card-body-2 shadow h-100 text-white"  style="background: #8d8d8d;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold  text-uppercase for-card-text mb-1">
                                    Subscription
                                </div>
                                <div
                                    class="for-card-count">{{$subscription->subs_name}}
                                </div>
                                <div
                                    class="for-card-count">Price Rp. {{number_format($subscription->subs_price, 0)}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer"  style="background: #8d8d8d; border:none;">
                      <a tabindex="0" class="btn btn w-100 btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="{{__('messages.warning_missing_bank_info')}}" data-content="{{__('messages.warning_add_bank_info')}}">Cancel Subscription</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
      <div class="card-header">
          <h4 class="page-header-title text-capitalize">Suubscription Details</h4>
      </div>
      <div class="card-body row">
          <!-- Earnings (Monthly) Card Example -->
          <div class="for-card col-md-12 mb-1">
              <div class="card for-card-body-2 shadow h-100 text-white"  style="background: #8d8d8d;">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="font-weight-bold  text-uppercase for-card-text mb-1">
                                  Subscription Details
                              </div>
                              {!! $subscription->desc !!}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>
@endsection