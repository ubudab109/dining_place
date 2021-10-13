<div class="content container-fluid mt-6"> 
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h1 class="h3 mb-0 text-capitalize">{{__('messages.edit')}} {{__('messages.restaurant')}} {{__('messages.info')}}</h1>
              </div>
              <div class="card-body">
                  <form action="{{route('vendor.shop.update',[$shop->id])}}" method="post"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="name">{{__('messages.restaurant')}} {{__('messages.name')}} <span class="text-danger">*</span></label>
                                  <input type="text" name="name" value="{{$shop->name}}" class="form-control" id="name"
                                          required>
                              </div>
                              <div class="form-group">
                                  <label for="name">Slug <span class="text-danger">*</span></label>
                                  <input type="text" name="slug" value="{{$shop->slug}}" class="form-control" id="slug"
                                          required>
                              </div>
                              <div class="form-group">
                                  <label for="name">{{__('messages.contact')}} {{__('messages.number')}}<span class="text-danger">*</span></label>
                                  <input type="text" name="contact" value="{{$shop->phone}}" class="form-control" id="name"
                                          required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="name">{{__('messages.upload')}} {{__('messages.logo')}}</label>
                                  <div class="custom-file">
                                      <input type="file" name="image" id="customFileUpload" class="custom-file-input"
                                          accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                      <label class="custom-file-label" for="customFileUpload">{{__('messages.choose')}} {{__('messages.file')}}</label>
                                  </div>
                              </div> 
                              <center>
                                  <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer"
                                  onerror="this.src='{{asset('assets/admin/img/image-place-holder.png')}}'"
                                  src="{{URL::asset('storage/restaurant/'.$shop->logo)}}" alt="Product thumbnail"/>
                                  
                              </center>  
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="name">{{__('messages.upload')}} {{__('messages.cover')}} {{__('messages.photo')}} <span class="text-danger">({{__('messages.ratio')}} 2:1)</span></label>
                          <div class="custom-file">
                              <input type="file" name="photo" id="coverImageUpload" class="custom-file-input"
                                  accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                              <label class="custom-file-label" for="customFileUpload">{{__('messages.choose')}} {{__('messages.file')}}</label>
                          </div>
                      </div> 
                      <center>
                          <img style="max-width: 100%;border: 1px solid; border-radius: 10px; max-height:200px;" id="coverImageViewer"
                          onerror="this.src='{{asset('assets/admin/img/restaurant_cover.jpg')}}'"
                          src="{{URL::asset('storage/restaurant/cover/'.$shop->cover_photo)}}" alt="Product thumbnail"/>
                          
                      </center>  
                      <br>
                      <button type="submit" class="btn btn-pink text-capitalize" id="btn_update">{{__('messages.update')}}</button>
                      <a class="btn btn-pink text-capitalize" href="{{route('vendor.shop.view')}}">{{__('messages.cancel')}}</a>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>