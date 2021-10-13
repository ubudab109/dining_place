<div class="content container-fluid mt-6"> 
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h1 class="h3 mb-0 text-capitalize">{{__('messages.edit')}} {{__('messages.restaurant')}} Social</h1>
              </div>
              <div class="card-body">
                  <form action="{{route('vendor.shop.update-social',[$shop->id])}}" method="post"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">Instagram</label>
                                <div class="form-group">
                                    <input type="text" name="instagram" id="customFileUpload" class="form-control" value="{{$info ? $info->instagram : null}}">
                                </div>
                            </div>
                        </div> 
                      </div>


                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">Twitter</label>
                                <div class="form-group">
                                    <input type="text" name="twitter" id="customFileUpload2" class="form-control" value="{{$info ? $info->twitter : null}}">
                                </div>
                            </div>
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">Facebook</label>
                                <div class="form-group">
                                    <input type="text" name="facebook" id="customFileUpload3" class="form-control" value="{{$info ? $info->facebook : null}}">
                                </div>
                            </div>
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">Youtube</label>
                                <div class="form-group">
                                    <input type="text" name="youtube" id="customFileUpload4" class="form-control" value="{{$info ? $info->youtube : null}}">
                                </div>
                            </div>
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">Google Plus</label>
                                <div class="form-group">
                                    <input type="text" name="google_plus" id="customFileUpload5" class="form-control" value="{{$info ? $info->google_plus : null}}">
                                </div>
                            </div>
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">Linkedin</label>
                                <div class="form-group">
                                    <input type="text" name="linkedin" id="customFileUpload6" class="form-control" value="{{$info ? $info->linkedin : null}}">
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
