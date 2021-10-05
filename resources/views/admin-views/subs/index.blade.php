@extends('layouts.admin.app')

@section('title','Add new subcription')

@push('css_or_js')

@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Subscription</h1>
                </div>
                @if(isset($subcription))
                <a href="{{route('admin.category.add')}}" class="btn btn-primary pull-right"><i class="tio-add-circle"></i> {{__('messages.add')}} Subscriptions</a>
                @endif
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header"><h5>Add New Subscription</h5></div>
                    <div class="card-body">
                        <form action="{{route('admin.subscription.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1">{{__('messages.name')}}</label>
                                <input type="text" name="subs_name" value="" class="form-control" placeholder="Subscription Name" required>
                            </div>
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1">Subtitle</label>
                                <input type="text" name="subtitle" value="" class="form-control" placeholder="Subscription Subtitle" required>
                            </div>
                            <div class="form-check form-group">
                              <input class="form-check-input" type="checkbox" id="isFree" onchange="isFreeCheck()">
                              <input type="hidden" name="is_free" id="is_free" value="0">
                              <label class="form-check-label" for="flexCheckDefault">
                                Is Paid
                              </label>
                            </div>

                            <div class="form-group" id="price"></div>
                            <div class="form-group">
                              <label for="desc" class="form-label">Desc</label>
                              <textarea name="desc" class="my-editor form-control" id="my-editor" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group pt-2">
                                <button type="submit" class="btn btn-primary">{{isset($subcription)?__('messages.update'):__('messages.save')}}</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>{{__('messages.category')}} {{__('messages.list')}}<span class="badge badge-soft-dark ml-2" id="itemCount">{{$subcriptions->count()}}</span></h5>
                        <form id="dataSearch">
                            @csrf
                            <!-- Search -->
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tio-search"></i>
                                    </div>
                                </div>
                                <input type="search" name="search" class="form-control" placeholder="Search subcriptions" aria-label="Search subcriptions">
                            </div>
                            <!-- End Search -->
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive datatable-custom">
                            <table id="columnSearchDatatable"
                                class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                                data-hs-datatables-options='{
                                    "search": "#datatableSearch",
                                    "entries": "#datatableEntries",
                                    "isResponsive": false,
                                    "isShowPaging": false,
                                    "paging":false,
                                }'>
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{__('messages.#')}}</th>
                                        <th>{{__('messages.id')}}</th>
                                        <th style="width: 50%">{{__('messages.name')}}</th>
                                        <th style="width: 20%">Is Free?</th>
                                        <th style="width: 20%">Price</th>
                                        <th style="width: 10%">{{__('messages.action')}}</th>
                                    </tr>
                                </thead>

                                <tbody id="table-div">
                                @foreach($subcriptions as $key => $subcription)
                                    <tr>
                                        <td>{{$key+$subcriptions->firstItem()}}</td>
                                        <td>{{$subcription->id}}</td>
                                        <td>
                                        <span class="d-block font-size-sm text-body">
                                            {{$subcription->subs_name}}
                                        </span>
                                        </td>
                                        <td>
                                            {{$subcription->is_free}}
                                        </td>
                                        <td>
                                          Rp. {{number_format($subcription->subs_price, 2)}}
                                      </td>
                                        <td>
                                            <a class="btn btn-sm btn-white" type="button" data-toggle="modal" data-target="#editSubs" onclick="showSubs({{$subcription->id}})"><i class="tio-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-white" href="javascript:"
                                            onclick="form_alert('subscription-{{$subcription['id']}}','Want to delete this subcsription')" title="{{__('messages.delete')}} {{__('messages.category')}}"><i class="tio-delete-outlined"></i>
                                            </a>
                                            <form action="{{route('admin.subscription.delete',[$subcription['id']])}}" method="post" id="subscription-{{$subcription['id']}}">
                                                @csrf @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="editSubs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form id="form-update-subs">
                                    <div class="form-group">
                                        <label class="input-label" for="exampleFormControlInput1">{{__('messages.name')}}</label>
                                        <input type="hidden" name="" id="id_subs_edit">
                                        <input type="text" id="subs_name_edit" name="subs_name" value="" class="form-control" placeholder="Subscription Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="input-label" for="exampleFormControlInput1">Subtitle</label>
                                        <input type="text" id="subtitle_edit" name="subtitle" value="" class="form-control" placeholder="Subscription Subtitle" required>
                                    </div>
                                    <div class="form-check form-group">
                                      <input class="form-check-input" type="checkbox" id="isFreeEdit" onchange="isFreeCheckEdit()">
                                      <input type="hidden" name="is_free" id="is_free_edit" value="0">
                                      <label class="form-check-label" for="flexCheckDefault">
                                        Is Paid
                                      </label>
                                    </div>
                                    <div class="form-group" id="price_edit"></div>
                                    <div class="form-group">
                                      <label for="desc" class="form-label">Desc</label>
                                      <textarea name="desc" class="my-editor form-control" id="my-editor-edit" cols="30" rows="10"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer page-area">
                        <!-- Pagination -->
                        <div class="row justify-content-center justify-content-sm-between align-items-sm-center"> 
                            <div class="col-sm-auto">
                                <div class="d-flex justify-content-center justify-content-sm-end">
                                    <!-- Pagination -->
                                    {!! $subcriptions->links() !!}
                                </div>
                            </div>
                        </div>
                        <!-- End Pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script_2')
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('my-editor');
    CKEDITOR.replace('my-editor-edit');
  </script>
    <script>
        $(document).on('ready', function () {
            // INITIALIZATION OF DATATABLES
            // =======================================================
            var datatable = $.HSCore.components.HSDatatables.init($('#columnSearchDatatable'), {
                select: {
                    style: 'multi',
                    classMap: {
                        checkAll: '#datatableCheckAll',
                        counter: '#datatableCounter',
                        counterInfo: '#datatableCounterInfo'
                    }
                },
                language: {
                    zeroRecords: '<div class="text-center p-4">' +
                    '<img class="mb-3" src="{{asset('public/assets/admin/svg/illustrations/sorry.svg')}}" alt="Image Description" style="width: 7rem;">' +
                    '<p class="mb-0">No data to show</p>' +
                    '</div>'
                }
            });

        $('#dataSearch').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post({
                url: '{{route('admin.category.search')}}',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    $('#table-div').html(data.view);
                    $('#itemCount').html(data.count);
                    $('.page-area').hide();
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        });


            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-select2-custom').each(function () {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });
        });
    </script>

    <script>
        $("#form-update-subs").on('submit', function(e) {
            e.preventDefault();
            var id = $("#id_subs_edit").val();
            var subsName = $("#subs_name_edit").val();
            var subtitle = $("#subtitle_edit").val();
            var isFree = $("#is_free_edit").val();
            var desc = CKEDITOR.instances['my-editor-edit'].getData();
            var url = "{{ route('admin.subscription.update',':id') }}"
            url = url.replace(':id', id); 
            var form = new FormData();
            form.append('subs_name', subsName);
            form.append('subtitle', subtitle);
            form.append('is_free', isFree);
            form.append('desc',desc);
            if (isFree === 0) {
                form.append('subs_price', 0);
            } else {
                form.append('subs_price', $("#subs_price_edit").val());
            }
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                url: url,
                data: form,
                processData: false,
                contentType: false,
                success: function(res) {
                    window.location.reload();
                }
            });
        })
        function showSubs(id)
        {
            var url = "{{ route('admin.subscription.show',':id') }}"
            url = url.replace(':id', id);
            $.ajax({
                type: 'GET',
                url : url,
                success: function (res) {
                    $("#id_subs_edit").val(res.id);
                    $("#subs_name_edit").val(res.subs_name);
                    $("#subtitle_edit").val(res.subtitle);
                    if (res.is_free === 1) {
                        $("#isFreeEdit").prop('checked', true);
                        document.getElementById('is_free_edit').value = res.is_free;
                        $("#price_edit").html(`<label class='input-label' for='exampleFormControlInput1'>Price</label><input value='${res.subs_price}' type='number' id="subs_price_edit" name='subs_price' value='' class='form-control' placeholder='Subscription Price' required>`)
                    } else {
                        $("#isFreeEdit").prop('checked', false);
                        document.getElementById('is_free_edit').value = res.is_free;
                        $("#price_edit").html('')
                    };
                    var editor = document.getElementById('my-editor-edit');
                    CKEDITOR.instances['my-editor-edit'].insertHtml(res.desc);
                },
                error: function (res) {
                    console.log(res);
                }
            })
        }

        function isFreeCheck(e) {
          var valFree = $("#isFree").is(':checked')
          // var paid = $("#isFree")
          var price = $("#price");
          if (valFree) {
            price.html("<label class='input-label' for='exampleFormControlInput1'>Price</label><input type='number' name='subs_price' value='' class='form-control' placeholder='Subscription Price' required>");
            $("#is_free").val(0);
          } else {
            price.html('');
            $("#is_free").val(1);
          }
        }

        function isFreeCheckEdit(e) {
          var valFree = $("#isFreeEdit").is(':checked')
          // var paid = $("#isFree")
          var price = $("#price_edit");
          if (valFree) {
            price.html("<label class='input-label' for='exampleFormControlInput1'>Price</label><input type='number' name='subs_price' value='' class='form-control' placeholder='Subscription Price' required>");
            $("#is_free_edit").val(1);
          } else {
            price.html('');
            $("#is_free_edit").val(0);
          }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#viewer').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#customFileEg1").change(function () {
            readURL(this);
        });
    </script>
@endpush
