

<?php $__env->startSection('title','Reservation'); ?>

<?php $__env->startPush('css_or_js'); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('styler'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.9.0/main.min.css,npm/fullcalendar@5.9.0/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css">
    <style>
        .fc-event,
        .fc-agenda .fc-event-time,
        .fc-event a {
        background-color: #F67280 !important; /* background color */
        border-color: #F67280 !important;     /* border color */
        color: white;              /* text color */
        cursor: pointer;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content container-fluid mt-3">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Reservation <?php echo e(__('messages.list')); ?></h1>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="reservation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Reservation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('reservation.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-4">
                            <div class="col">
                            Customer Name <span style="color: red">*</span>
                            </div>
                            <div class="col">
                            <input type="text" name="customer_name" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            Customer Email <span style="color: red">*</span>
                            </div>
                            <div class="col mb-4">
                                <input name="customer_email" type="email" class="form-control" placeholder="Email">
                                <span>Your email address will not be published.</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            Customer Phone <span style="color: red">*</span>
                            </div>
                            <div class="col">
                                <input type="text" name="customer_phone" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            Number of Pax <span style="color: red">*</span>
                            </div>
                            <div class="col">
                                <input type="text" name="pax" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            Date & Time <span style="color: red">*</span>
                            </div>
                            <div class="col">
                                <input type="datetime-local" name="reservation_date" class="form-control">
                                <input type="hidden" name="restaurant_id" value="<?php echo e(App\CentralLogics\Helpers::get_restaurant_id()); ?>">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            Table
                            </div>
                            <div class="col">
                                <select name="table_id" id="" class="form-control">
                                    <option value="" disabled <?php echo e(!request()->table ? 'selected' : ''); ?>>Select Table</option>
                                    <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>" <?php echo e(request()->table === $item->id ? 'selected' : ''); ?>><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            Additional Request
                            </div>
                            <div class="col">
                                <input type="text" name="desc" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row justify-content-center">
                            <button class="btn btn-pink" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        <!-- End Page Header -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Reservation <?php echo e(__('messages.list')); ?><span class="badge badge-soft-dark ml-2" id="itemCount"><?php echo e($reservations->count()); ?></span></h5>
                        <button class="btn btn-pink" type="button" data-toggle="modal" data-target="#reservation">Add Reservation</button>
                        
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
                                        <th><?php echo e(__('messages.#')); ?></th>
                                        <th>Customer</th>
                                        <th>Pax</th>
                                        <th>Table</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody id="table-div">
                                <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+$reservations->firstItem()); ?></td>
                                        <td>
                                        <span class="d-block font-size-sm text-body">
                                            <?php echo e($reservation['customer_name']); ?>

                                        </span>
                                        </td>
                                        <td>
                                          <span class="d-block font-size-sm text-body">
                                              <?php echo e($reservation['pax']); ?>

                                          </span>
                                        </td>
                                        <td>
                                          <span class="d-block font-size-sm text-body">
                                              <?php echo e($reservation->restaurantTable->name); ?>

                                          </span>
                                        </td>
                                        <td>
                                          <span class="d-block font-size-sm text-body">
                                              <?php echo e($reservation['reservation_date']); ?>

                                          </span>
                                        </td>
                                        <td>
                                          <?php if($reservation['status'] == 'reserved'): ?>    
                                            <span class="d-block font-size-sm badge badge-info" style="color: white">
                                                Waiting Approval
                                            </span>
                                          <?php else: ?>
                                            <span class="d-block font-size-sm badge badge-success" style="color: white">
                                              Confirmation
                                            </span>
                                          <?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail" onclick="detail(<?php echo e($reservation['id']); ?>)">Detail</a>
                                                  <?php if($reservation['status'] == 'reserved'): ?>
                                                    <a class="dropdown-item" href="#" onclick="updateStatus(<?php echo e($reservation['id']); ?>, 'completed')">Confirmation</a>
                                                  <?php else: ?>
                                                    <a class="dropdown-item" href="#" onclick="updateStatus(<?php echo e($reservation['id']); ?>, 'reserved')">Waiting Approval</a>
                                                  <?php endif; ?>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer page-area">
                        <!-- Pagination -->
                        <div class="row justify-content-center justify-content-sm-between align-items-sm-center"> 
                            <div class="col-sm-auto">
                                <div class="d-flex justify-content-center justify-content-sm-end">
                                    <!-- Pagination -->
                                    <?php echo $reservations->links(); ?>

                                </div>
                            </div>
                        </div>
                        <!-- End Pagination -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Reservation Calender</h3>
                    </div>
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Customer Name</label>
                        <input type="text" id="name" disabled readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Customer Email</label>
                        <input type="text" id="email" disabled readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Customer Phone</label>
                        <input type="text" id="phone" disabled readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pax">Pax</label>
                        <input type="text" id="pax" disabled readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="table">Table Number</label>
                        <input type="text" id="table" disabled readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="date">Reservation Date</label>
                        <input type="text" id="date" disabled readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" id="status" disabled readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="desc">Additional Request</label>
                        <input type="text" id="desc" disabled readonly class="form-control">
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script_2'); ?>
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
                    '<img class="mb-3" src="<?php echo e(asset('public/assets/admin/svg/illustrations/sorry.svg')); ?>" alt="Image Description" style="width: 7rem;">' +
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
                url: '<?php echo e(route('vendor.category.search')); ?>',
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

        function updateStatus(id, status) {
            var url = '<?php echo e(route("vendor.reservation.status", ":id")); ?>';
            url = url.replace(':id', id);
            Swal.fire({
                title: `Do you want to change reservation status?`,
                showCancelButton: true,
                confirmButtonText: 'Update',
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.value) {
                    console.log('test');
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        url: url,
                        data: {
                            status: status,
                        },
                        success: function(res) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!!',
                                text:  `Status Updated Successfully`,
                            }).then((res) => {
                                if (res.value) {
                                    window.location.reload()
                                }
                            })
                        },
                        error: function(err) {
                            Swal.fire('Error!', 'Please Try Again', 'error')
                        }
                    });
                }
            })
        }
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('scripts'); ?>




<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/locales-all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        events =<?php echo json_encode($events); ?>;

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            events: events,
            eventClick: function(start, end, callback) {
                eventShow(start.event._def.publicId)
            },
            eventTimeFormat: { // like '14:30:00'
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                meridiem: true
            },
            eventColor: '#378006',
            eventBackgroundColor: '#378006',
            initialView: 'dayGridMonth'
        });
        calendar.render();
      });

      function eventShow(id) {
        $('#detail').modal('show');
        var url = "<?php echo e(route('vendor.reservation.show', ':id')); ?>"
            url = url.replace(':id', id);
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function(res) {
                    $("#name").val(res.customer_name);
                    $("#email").val(res.customer_email);
                    $("#phone").val(res.customer_phone);
                    $("#pax").val(res.pax);
                    $("#table").val(res.restaurant_table.name);
                    $("#status").val(res.status);
                    $("#desc").val(res.desc);
                    $("#date").val(res.reservation_date);
                },
                error: function(err) {
                    alert('error')
                }
            })
      }
      function detail(id)
        {
            var url = "<?php echo e(route('vendor.reservation.show', ':id')); ?>"
            url = url.replace(':id', id);
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function(res) {
                    $("#name").val(res.customer_name);
                    $("#email").val(res.customer_email);
                    $("#phone").val(res.customer_phone);
                    $("#pax").val(res.pax);
                    $("#table").val(res.restaurant_table.name);
                    $("#status").val(res.status);
                    $("#desc").val(res.desc);
                    $("#date").val(res.reservation_date);
                },
                error: function(err) {
                    alert('error')
                }
            })
        }

    //   $(document).ready(function () {
    //     // page is now ready, initialize the calendar...
    //     events =<?php echo json_encode($events); ?>;
    //     $('#calendar').fullCalendar({
    //       // put your options and callbacks here
    //       events: events,
    //       defaultView: 'agendaWeek'
    //     })
    //   })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/reservation/index.blade.php ENDPATH**/ ?>