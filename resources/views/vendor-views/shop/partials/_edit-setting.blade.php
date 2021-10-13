<div class="content container-fluid mt-6"> 
  <div class="row">
      <div class="col-md-12">

        <div class="card h-100">
          <div class="card-header">
              {{__('messages.restaurant')}} {{__('messages.settings')}}
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="form-group">
                          <label class="toggle-switch toggle-switch-sm d-flex justify-content-between border border-secondary rounded px-4 form-control" for="schedule_order">
                              <span class="pr-2">{{__('messages.scheduled')}} {{__('messages.order')}}:</span> 
                              <input type="checkbox" class="toggle-switch-input" onclick="location.href='{{route('vendor.business-settings.toggle-settings',[$shop->id,$shop->schedule_order?0:1, 'schedule_order'])}}'" id="schedule_order" {{$shop->schedule_order?'checked':''}}>
                              <span class="toggle-switch-label">
                                  <span class="toggle-switch-indicator"></span>
                              </span>
                          </label>
                      </div>
                  </div>
                  {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="form-group">
                          <label class="toggle-switch toggle-switch-sm d-flex justify-content-between border border-secondary rounded px-4 form-control" for="delivery">
                              <span class="pr-2">{{__('messages.delivery')}}:</span> 
                              <input type="checkbox" name="delivery" class="toggle-switch-input" onclick="location.href='{{route('vendor.business-settings.toggle-settings',[$shop->id,$shop->delivery?0:1, 'delivery'])}}'" id="delivery" {{$shop->delivery?'checked':''}}>
                              <span class="toggle-switch-label">
                                  <span class="toggle-switch-indicator"></span>
                              </span>
                          </label>
                      </div>
                  </div> --}}
                  <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 col-12">
                      <div class="form-group">
                          <label class="toggle-switch toggle-switch-sm d-flex justify-content-between border border-secondary rounded px-4 form-control" for="take_away">
                              <span class="pr-2 text-capitalize">{{__('messages.take_away')}}:</span> 
                              <input type="checkbox" class="toggle-switch-input" onclick="location.href='{{route('vendor.business-settings.toggle-settings',[$shop->id,$shop->take_away?0:1, 'take_away'])}}'" id="take_away" {{$shop->take_away?'checked':''}}>
                              <span class="toggle-switch-label">
                                  <span class="toggle-switch-indicator"></span>
                              </span>
                          </label>
                      </div>
                  </div>
              </div>
              <form action="{{route('vendor.business-settings.update-setup',[$shop['id']])}}" method="post"
                  enctype="multipart/form-data">
                  @csrf 
                  <div class="row">
                      <div class="col-sm-4 col-12">
                          <div class="form-group">
                              <label class="input-label text-capitalize" for="title">{{__('messages.opening')}} {{__('messages.time')}}</label>
                              <input type="time" id="closeing_time" class="form-control" name="opening_time" value="{{$shop->opening_time?$shop->opening_time->format('H:i:s'):''}}">
                          </div>
                      </div>
                      <div class="col-sm-4 col-12">
                          <label class="input-label text-capitalize" for="title">{{__('messages.closing')}} {{__('messages.time')}}</label>
                          <input type="time" id="closeing_time" class="form-control"  name="closeing_time" value="{{$shop->closeing_time?$shop->closeing_time->format('H:i:s'):''}}">
                      </div>
                      <div class="col-sm-4 col-12">
                          <div class="form-group">
                              <label class="input-label text-capitalize" for="title">{{__('messages.minimum')}} {{__('messages.order')}} {{__('messages.amount')}}</label>
                              <input type="number" name="minimum_order" step="0.01" min="0" max="100000" class="form-control" placeholder="100" value="{{$shop->minimum_order??'0'}}"> 
                          </div>
                      </div>
                  </div>

                  <button type="submit" class="btn btn-pink">{{__('messages.update')}}</button>
              </form>
          </div>
      </div>
      
      </div>
  </div>
</div>
