<div class="content container-fluid mt-6"> 
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h1 class="h3 mb-0 text-capitalize">{{__('messages.edit')}} {{__('messages.restaurant')}} Document</h1>
              </div>
              <div class="card-body">
                  <form action="{{route('vendor.shop.update-document',[$shop->id])}}" method="post"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">KTP/Passport Copy of Main Admin</label>
                                <div class="custom-file">
                                    <input type="file" name="vendor_document" id="customFileUpload" class="custom-file-input"
                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" onchange="readURL(this, 'viewer1')">
                                    <label class="custom-file-label" for="customFileUpload1">{{__('messages.choose')}} {{__('messages.file')}}</label>
                                </div>
                            </div>
                            @if ($document)    
                              <center>
                                  <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer1"
                                  onerror="this.src='{{asset('assets/admin/img/image-place-holder.png')}}'"
                                  src="{{URL::asset('storage/restaurant/vendor-doc/'.$document->vendor_document)}}" alt="Product thumbnail"/>
                              </center>
                            @else
                            <center>
                              <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer1"
                              onerror="this.src='{{asset('assets/admin/img/image-place-holder.png')}}'"
                              alt="Product thumbnail" src="{{URL::asset('storage/restaurant/vendor-doc/')}}"/>
                            </center>
                            @endif
                        </div> 
                      </div>


                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">NPWP of Main Admin</label>
                                <div class="custom-file">
                                    <input type="file" name="vendor_npwp" id="customFileUpload2" class="custom-file-input"
                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" onchange="readURL(this, 'viewer2')">
                                    <label class="custom-file-label" for="customFileUpload2">{{__('messages.choose')}} {{__('messages.file')}}</label>
                                </div>
                            </div>
                            @if ($document)
                            <center>
                                <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer2"
                                onerror="this.src='{{asset('assets/admin/img/image-place-holder.png')}}'"
                                src="{{URL::asset('storage/restaurant/vendor-npwp/'.$document->vendor_npwp)}}" alt="Product thumbnail"/>
                            </center>
                            @else
                            <center>
                              <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer2"
                              onerror="this.src='{{asset('assets/admin/img/image-place-holder.png')}}'"
                              alt="Product thumbnail" src="{{URL::asset('storage/restaurant/vendor-doc/')}}"/>
                            </center>
                            @endif
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">NPWP of Your Restaurant/Company</label>
                                <div class="custom-file">
                                    <input type="file" name="restaurant_npwp" id="customFileUpload3" class="custom-file-input"
                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"  onchange="readURL(this, 'viewer3')">
                                    <label class="custom-file-label" for="customFileUpload3">{{__('messages.choose')}} {{__('messages.file')}}</label>
                                </div>
                            </div>
                            @if ($document)    
                            <center>
                                <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer3"
                                onerror="this.src='{{asset('assets/admin/img/image-place-holder.png')}}'"
                                src="{{URL::asset('storage/restaurant/restaurant-npwp/'.$document->restaurant_npwp)}}" alt="Product thumbnail"/>
                            </center>
                            @else
                            <center>
                              <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer3"
                              onerror="this.src='{{asset('assets/admin/img/image-place-holder.png')}}'"
                              alt="Product thumbnail" src="{{URL::asset('storage/restaurant/vendor-doc/')}}"/>
                            </center>  
                            @endif
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">SIUP of Your Company</label>
                                <div class="custom-file">
                                    <input type="file" name="restaurant_siup" id="customFileUpload4" class="custom-file-input"
                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"  onchange="readURL(this, 'viewer4')">
                                    <label class="custom-file-label" for="customFileUpload4">{{__('messages.choose')}} {{__('messages.file')}}</label>
                                </div>
                            </div>
                            @if ($document)
                            <center>
                                <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer4"
                                onerror="this.src='{{asset('assets/admin/img/image-place-holder.png')}}'"
                                src="{{URL::asset('storage/restaurant/restaurant-siup/'.$document->restaurant_siup)}}" alt="Product thumbnail"/>
                            </center>
                            @else
                            <center>
                              <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer4"
                              onerror="this.src='{{asset('assets/admin/img/image-place-holder.png')}}'"
                              alt="Product thumbnail" src="{{URL::asset('storage/restaurant/vendor-doc/')}}"/>
                            </center>  
                            @endif
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                                <label for="name">TD of Your Company</label>
                                <div class="custom-file">
                                    <input type="file" name="restaurant_td" id="customFileUpload5" class="custom-file-input"
                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"  onchange="readURL(this, 'viewer5')">
                                    <label class="custom-file-label" for="customFileUpload5">{{__('messages.choose')}} {{__('messages.file')}}</label>
                                </div>
                            </div>
                            @if ($document)
                            <center>
                                <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer5"
                                onerror="this.src='{{asset('assets/admin/img/image-place-holder.png')}}'"
                                src="{{URL::asset('storage/restaurant/restaurant-td/'.$document->restaurant_td)}}" alt="Product thumbnail"/>
                            </center>
                            @else
                            <center>
                              <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer5"
                              onerror="this.src='{{asset('assets/admin/img/image-place-holder.png')}}'"
                              alt="Product thumbnail" src="{{URL::asset('storage/restaurant/vendor-doc/')}}"/>
                            </center>  
                            @endif
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
@section('scripts')
    <script>
      function readURL(input, id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(`#${id}`)
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection