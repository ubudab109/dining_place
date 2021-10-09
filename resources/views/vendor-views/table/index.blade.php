@extends('layouts.vendor.app')

@section('title','Add new table')

@push('css_or_js')

@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Restaurant Table</h1>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header"><h5>Add New Table</h5></div>
                    <div class="card-body">
                        <form action="{{route('vendor.table.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1">{{__('messages.name')}}</label>
                                <input type="hidden" name="restaurant" value={{$restaurant->id}}>
                                <input type="text" name="name" value="" class="form-control" placeholder="Table Name" required>
                            </div>
                            <div class="form-group pt-2">
                                <button type="submit" class="btn btn-pink">Save</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Table List<span class="badge badge-soft-dark ml-2" id="itemCount">{{$tables->count()}}</span></h5>
                        <form id="dataSearch">
                            @csrf
                            <!-- Search -->
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tio-search"></i>
                                    </div>
                                </div>
                                <input type="search" name="search" class="form-control" placeholder="Search table" aria-label="Search subcriptions">
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
                                        <th style="width: 50%">action</th>
                                    </tr>
                                </thead>

                                <tbody id="table-div">
                                @foreach($tables as $key => $table)
                                    <tr>
                                        <td>{{$key+$tables->firstItem()}}</td>
                                        <td>{{$table->id}}</td>
                                        <td>
                                        <span class="d-block font-size-sm text-body">
                                            {{$table->name}}
                                        </span>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-white" type="button" data-toggle="modal" data-target="#editTable" onclick="showTable({{$table->id}})"><i class="tio-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-white" href="javascript:"
                                            onclick="form_alert('table-{{$table['id']}}','Want to delete this table')" title="{{__('messages.delete')}} Table"><i class="tio-delete-outlined"></i>
                                            </a>
                                            <form action="{{route('vendor.table.delete',[$table['id']])}}" method="post" id="table-{{$table['id']}}">
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
                    <div class="modal fade" id="editTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form id="form-update-table">
                                    <div class="form-group">
                                        <label class="input-label" for="exampleFormControlInput1">{{__('messages.name')}}</label>
                                        <input type="hidden" name="" id="table_id">
                                        <input type="text" id="name_edit" name="name" value="" class="form-control" placeholder="Subscription Name" required>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-pink">Save changes</button>
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
                                    {!! $tables->links() !!}
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
        $("#form-update-table").on('submit', function(e) {
            e.preventDefault();
            var id = $("#table_id").val();
            var name = $("#name_edit").val();
            var url = "{{ route('vendor.table.update',':id') }}"
            url = url.replace(':id', id); 
            var form = new FormData();
            form.append('name', name);
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
        function showTable(id)
        {
            var url = "{{ route('vendor.table.show',':id') }}"
            url = url.replace(':id', id);
            $.ajax({
                type: 'GET',
                url : url,
                success: function (res) {
                    $("#table_id").val(res.id);
                    $("#name_edit").val(res.name);
                },
                error: function (res) {
                    console.log(res);
                }
            })
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
