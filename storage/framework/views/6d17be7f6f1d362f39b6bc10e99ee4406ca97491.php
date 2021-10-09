

<?php $__env->startSection('title','Add new coupon'); ?>

<?php $__env->startPush('css_or_js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title"><i class="tio-add-circle-outlined"></i> <?php echo e(__('messages.add')); ?> <?php echo e(__('messages.new')); ?> <?php echo e(__('messages.coupon')); ?></h1>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row gx-2 gx-lg-3">
            <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
                <form action="<?php echo e(route('vendor.coupon.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                   <div class="row">
                       <div class="col-4">
                           <div class="form-group">
                               <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.title')); ?></label>
                               <input type="text" name="title" class="form-control" placeholder="New coupon" required>
                           </div>
                       </div>
                       <div class="col-4">
                           <div class="form-group">
                               <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.coupon')); ?> <?php echo e(__('messages.type')); ?></label>
                               <select name="coupon_type" class="form-control" onchange="coupon_type_change(this.value)">
                                   <option value="default"><?php echo e(__('messages.default')); ?></option>
                                   <option value="first_order"><?php echo e(__('messages.first')); ?> <?php echo e(__('messages.order')); ?></option>
                               </select>
                           </div>
                       </div>
                       <div class="col-4" id="limit-for-user">
                           <div class="form-group">
                               <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.limit')); ?> <?php echo e(__('messages.for')); ?> <?php echo e(__('messages.same')); ?> <?php echo e(__('messages.user')); ?></label>
                               <input type="number" name="limit" class="form-control" placeholder="EX: 10">
                           </div>
                       </div>
                   </div>

                    <div class="row">
                        <div class="col-md-4 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.code')); ?></label>
                                <input type="text" name="code" class="form-control"
                                       placeholder="<?php echo e(\Illuminate\Support\Str::random(8)); ?>" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.start')); ?> <?php echo e(__('messages.date')); ?></label>
                                <input type="date" name="start_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.expire')); ?> <?php echo e(__('messages.date')); ?></label>
                                <input type="date" name="expire_date" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.min')); ?> <?php echo e(__('messages.purchase')); ?></label>
                                <input type="number" step="0.01" name="min_purchase" value="0" min="0" max="100000" class="form-control"
                                       placeholder="100">
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.max')); ?> <?php echo e(__('messages.discount')); ?></label>
                                <input type="number" step="0.01" min="0" value="0" max="1000000" name="max_discount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.discount')); ?></label>
                                <input type="number" step="0.01" min="1" max="10000" name="discount" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-2 col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.discount')); ?> <?php echo e(__('messages.type')); ?></label>
                                <select name="discount_type" class="form-control">
                                    <option value="amount"><?php echo e(__('messages.amount')); ?></option>
                                    <option value="percent"><?php echo e(__('messages.percent')); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('messages.submit')); ?></button>
                </form>
            </div>

            <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-title"></h5>
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
                                <th><?php echo e(__('messages.min')); ?> <?php echo e(__('messages.purchase')); ?></th>
                                <th><?php echo e(__('messages.max')); ?> <?php echo e(__('messages.discount')); ?></th>
                                <th><?php echo e(__('messages.discount')); ?></th>
                                <th><?php echo e(__('messages.discount')); ?> <?php echo e(__('messages.type')); ?></th>
                                <th><?php echo e(__('messages.start')); ?> <?php echo e(__('messages.date')); ?></th>
                                <th><?php echo e(__('messages.expire')); ?> <?php echo e(__('messages.date')); ?></th>
                                <th><?php echo e(__('messages.status')); ?></th>
                                <th><?php echo e(__('messages.action')); ?></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>
                                    <input type="text" id="column1_search" class="form-control form-control-sm"
                                           placeholder="<?php echo e(__('messages.search')); ?>">
                                </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>
                                    
                                </th>
                                <th></th>
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
                                    <td><?php echo e(\App\CentralLogics\Helpers::format_currency($coupon['min_purchase'])); ?></td>
                                    <td><?php echo e(\App\CentralLogics\Helpers::format_currency($coupon['max_discount'])); ?></td>
                                    <td><?php echo e($coupon['discount']); ?></td>
                                    <td><?php echo e($coupon['discount_type']); ?></td>
                                    <td><?php echo e($coupon['start_date']); ?></td>
                                    <td><?php echo e($coupon['expire_date']); ?></td>
                                    <td>
                                        <?php if($coupon['status']==1): ?>
                                            <div style="padding: 10px;border: 1px solid;cursor: pointer">
                                                <span class="legend-indicator bg-success"></span><?php echo e(__('messages.active')); ?>

                                            </div>
                                        <?php else: ?>
                                            <div style="padding: 10px;border: 1px solid;cursor: pointer">
                                                <span class="legend-indicator bg-danger"></span><?php echo e(__('messages.disabled')); ?>

                                            </div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                <i class="tio-settings"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                
                                                <a class="dropdown-item" href="javascript:"
                                                   onclick="form_alert('coupon-<?php echo e($coupon['id']); ?>','Want to delete this coupon ?')"><?php echo e(__('messages.delete')); ?></a>
                                                <form action="<?php echo e(route('vendor.coupon.delete',[$coupon['id']])); ?>"
                                                      method="post" id="coupon-<?php echo e($coupon['id']); ?>">
                                                    <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Dropdown -->
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

<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/coupon/index.blade.php ENDPATH**/ ?>