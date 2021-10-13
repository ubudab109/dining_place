

<?php $__env->startSection('title','Add new coupon'); ?>

<?php $__env->startPush('css_or_js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid mt-3">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title"><i class="tio-add-circle-outlined"></i> List <?php echo e(__('messages.coupon')); ?></h1>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row gx-4 gx-lg-4">
            <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-title"></h5>
                        <a href="<?php echo e(route('vendor.coupon.create')); ?>" class="btn btn-pink">Add Coupon</a>
                    </div>
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
                                <th><?php echo e(__('messages.#')); ?></th>
                                <th><?php echo e(__('messages.title')); ?></th>
                                <th><?php echo e(__('messages.code')); ?></th>
                                <th>Valid Until</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td>
                                    <span class="d-block font-size-sm text-body">
                                        <?php echo e($coupon['title']); ?>

                                    </span>
                                    </td>
                                    <td><?php echo e($coupon['code']); ?></td>
                                    <td><?php echo e($coupon['expire_date']); ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <a class="dropdown-item" href="#" onclick="detail(<?php echo e($coupon['id']); ?>)" data-toggle="modal" data-target="#detail_modal">Detail</a>
                                              <a class="dropdown-item" href="#" onclick="destroy(<?php echo e($coupon['id']); ?>)">Delete</a>
                                            </div>
                                          </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <hr>
                        <table>
                            <tfoot>
                            <?php echo $coupons->links(); ?>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
    <div class="modal fade" id="detail_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Coupon</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" class="form-control" id="code" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label for="expired">Expired</label>
                        <input type="text" class="form-control" id="expired" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label for="min">Min Purchase</label>
                        <input type="text" class="form-control" id="min" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label for="max">Max Discount</label>
                        <input type="text" class="form-control" id="max" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label for="discount">Discount</label>
                        <input type="text" class="form-control" id="discount" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label for="discount_type">Discount Type</label>
                        <input type="text" class="form-control" id="discount_type" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Exclude Items</label>
                        <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="9" style="width: 100%; top: 0px;">
                            <span class="selection">
                                <span class="select2-selection select2-selection--multiple custom-select" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                    <ul class="select2-selection__rendered" id="exclude">
 
                                    </ul>
                                </span>
                            </span>
                        </span>

                    </div>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
            var datatable = $.HSCore.components.HSDatatables.init($('#columnSearchDatatable'));

            $('#column1_search').on('keyup', function () {
                datatable
                    .columns(1)
                    .search(this.value)
                    .draw();
            });


            $('#column3_search').on('change', function () {
                datatable
                    .columns(9)
                    .search(this.value)
                    .draw();
            });

            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-select2-custom').each(function () {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });
        });

        function coupon_type_change(order_type) {
            if(order_type=='first_order'){
                $('#limit-for-user').hide();
            }else{
                $('#limit-for-user').show();
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    function detail(id)
    {
        var url = '<?php echo e(route("vendor.coupon.show", ":id")); ?>';
        url = url.replace(':id', id);
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'json',
            success: function(res) {
                $("#title").val(res.title);
                $("#code").val(res.code);
                $("#expired").val(res.expire_date);
                $("#min").val(res.min_purchase);
                $("#max").val(res.max_discount);
                $("#discount").val(res.discount);
                $("#discount_type").val(res.discount_type);
                var html = ''
                var exclude = $("#exclude");
                if (res.exclude.length > 0) {
                    res.exclude.map((val) => {
                        html += `<li class="select2-selection__choice" title="${val.food.name}" data-select2-id="${val.food.id}">
                                    <span>${val.food.name}</span>
                                </li>`
                    });
                    exclude.html(html);
                } else {
                    exclude.text('No Exclude Items');
                }
            },
            error: function(err) {
                alert('error')
            }
        })
    }

    function destroy(id)
    {
        var url = '<?php echo e(route("vendor.coupon.delete", ":id")); ?>';
        url = url.replace(':id', id);
        Swal.fire({
                title: `Do you want to delete this coupon?`,
                showCancelButton: true,
                confirmButtonText: 'Yes, Delete It',
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.value) {
                    console.log('test');
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'DELETE',
                        url: url,
                        success: function(res) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!!',
                                text:  `Coupon Deleted Successfully`,
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/coupon/index.blade.php ENDPATH**/ ?>