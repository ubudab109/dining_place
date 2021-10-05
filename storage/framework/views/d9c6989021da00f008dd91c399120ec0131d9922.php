

<?php $__env->startSection('title','Reservation'); ?>

<?php $__env->startPush('css_or_js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Reservation <?php echo e(__('messages.list')); ?></h1>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Reservation <?php echo e(__('messages.list')); ?><span class="badge badge-soft-dark ml-2" id="itemCount"><?php echo e($reservations->count()); ?></span></h5>
                        
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
                                        <th><?php echo e(__('messages.id')); ?></th>
                                        <th>Customer Name</th>
                                        <th>Customer Email</th>
                                        <th>Customer Phone</th>
                                        <th>Number of Pax</th>
                                        <th>Table</th>
                                        <th>Reservation Date</th>
                                        <th>Additional Request</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody id="table-div">
                                <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+$reservations->firstItem()); ?></td>
                                        <td><?php echo e($reservation->id); ?></td>
                                        <td>
                                        <span class="d-block font-size-sm text-body">
                                            <?php echo e($reservation['customer_name']); ?>

                                        </span>
                                        </td>
                                        <td>
                                          <span class="d-block font-size-sm text-body">
                                              <?php echo e($reservation['customer_email']); ?>

                                          </span>
                                        </td>
                                        <td>
                                          <span class="d-block font-size-sm text-body">
                                              <?php echo e($reservation['customer_phone']); ?>

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
                                          <span class="d-block font-size-sm text-body">
                                              <?php echo e($reservation['desc']); ?>

                                          </span>
                                        </td>
                                        <td>
                                          <?php if($reservation['status'] == 'reserved'): ?>    
                                            <span class="d-block font-size-sm badge badge-info" style="color: white">
                                                Reserved
                                            </span>
                                          <?php else: ?>
                                            <span class="d-block font-size-sm badge badge-success" style="color: white">
                                              Complete
                                            </span>
                                          <?php endif; ?>
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
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/reservation/index.blade.php ENDPATH**/ ?>