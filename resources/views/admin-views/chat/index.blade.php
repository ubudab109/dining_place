@extends('layouts.admin.app')

@section('title','List Vendor Chat')

@push('css_or_js')

@endpush

@section('content')
<div class="content container-fluid">
  <div class="row gx-2 gx-lg-3">
    <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header pb-1 pt-1" >
                <h5>List Chat Vendor</h5>
                <form action="javascript:" id="search-form" >
                                <!-- Search -->
                    @csrf
                    <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tio-search"></i>
                            </div>
                        </div>
                        <input id="datatableSearch_" type="search" name="search" class="form-control"
                                placeholder="Search" aria-label="Search" required>
                        <button type="submit" class="btn btn-light">{{__('messages.search')}}</button>

                    </div>
                    <!-- End Search -->
                </form>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="columnSearchDatatable"
                       class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                       data-hs-datatables-options='{
                         "order": [],
                         "orderCellsTop": true,
                         "paging":false

                       }'>
                    <thead class="thead-light">
                    <tr>
                        <th style="width: 10%;">{{__('messages.#')}}</th>
                        <th style="width: 20%;">Email</th>
                        <th style="width: 15%;">Total Messages</th>
                        <th style="width: 10%;">{{__('messages.action')}}</th>
                    </tr>
                    </thead>

                    <tbody id="set-rows">
                    @foreach($vendors as $key=>$vendor)
                        <tr>
                            <td>{{$key+$vendors->firstItem()}}</td>
                            <td>
                                {{$vendor->email}}
                            </td>
                            <td>
                                {{$vendor->chat()->where('admin_messages',null)->count()}}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-white"
                                    href="{{route('admin.chat.show',[$vendor['id']])}}" title="{{__('messages.view')}} Chat"><i class="tio-visible text-success"></i>
                                </a>
                                {{--<a class="btn btn-sm btn-white" href="javascript:"
                                onclick="form_alert('vendor-{{$dm['id']}}','Want to remove this information ?')" title="{{__('messages.delete')}} {{__('messages.restaurant')}}"><i class="tio-delete-outlined text-danger"></i>
                                </a>
                                <form action="{{route('admin.vendor.delete',[$dm['id']])}}" method="post" id="vendor-{{$dm['id']}}">
                                    @csrf @method('delete')
                                </form>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>

                <div class="page-area">
                    <table>
                        <tfoot>
                        {!! $vendors->links() !!}
                        </tfoot>
                    </table>
                </div>

            </div>
            <!-- End Table -->
        </div>
        <!-- End Card -->
    </div>
  </div>
</div>
@endsection

@push('script_2')
    <script>
        function status_change_alert(url, message, e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: message,
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: 'default',
                confirmButtonColor: '#FC6A57',
                cancelButtonText: 'No',
                confirmButtonText: 'Yes',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    location.href=url;
                }
            })
        }
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

            $('#column2_search').on('keyup', function () {
                datatable
                    .columns(2)
                    .search(this.value)
                    .draw();
            });

            $('#column3_search').on('keyup', function () {
                datatable
                    .columns(3)
                    .search(this.value)
                    .draw();
            });

            $('#column4_search').on('keyup', function () {
                datatable
                    .columns(4)
                    .search(this.value)
                    .draw();
            });


            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-select2-custom').each(function () {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });
        });
    </script>

    <script>
        $('#search-form').on('submit', function () {
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post({
                url: '{{route('admin.vendor.search')}}',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    $('#set-rows').html(data.view);
                    $('#itemCount').html(data.total);
                    $('.page-area').hide();
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        });
    </script>
@endpush
