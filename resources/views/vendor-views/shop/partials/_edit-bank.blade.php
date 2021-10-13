<div class="content container-fluid mt-6"> 
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h1 class="h3 mb-0 text-capitalize">{{__('messages.edit')}} {{__('messages.restaurant')}} Bank Info</h1>
              </div>
              <div class="card-body">
                  <form action="{{route('vendor.shop.update-bank',[$shop->id])}}" method="post"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">Account Name</label>
                                <div class="form-group">
                                    <input type="text" name="holder_name" id="customFileUpload" class="form-control" value="{{$vendor->holder_name}}">
                                </div>
                            </div>
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">Account Number</label>
                                <div class="form-group">
                                    <input type="text" name="account_no" id="customFileUpload" class="form-control" value="{{$vendor->account_no}}">
                                </div>
                            </div>
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">Bank Name</label>
                                <div class="form-group">
                                    <input type="text" name="bank_name" id="customFileUpload" class="form-control" value="{{$vendor->bank_name}}">
                                </div>
                            </div>
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">Bank Address</label>
                                <div class="form-group">
                                    <input type="text" name="branch" id="customFileUpload" class="form-control" value="{{$vendor->branch}}">
                                </div>
                            </div>
                        </div> 
                      </div>

                      <br>
                      <button type="submit" class="btn btn-pink text-capitalize" id="btn_update">{{__('messages.update')}}</button>
                      <a class="btn btn-pink text-capitalize" href="{{route('vendor.shop.view')}}">{{__('messages.cancel')}}</a>

                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
