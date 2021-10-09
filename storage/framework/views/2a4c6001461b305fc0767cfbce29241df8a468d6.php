

<?php $__env->startSection('title','Add new addon'); ?>

<?php $__env->startPush('css_or_js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title"><i class="tio-add-circle-outlined"></i> <?php echo e(__('messages.add')); ?> <?php echo e(__('messages.new')); ?> <?php echo e(__('messages.addon')); ?></h1>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row gx-2 gx-lg-3">
            <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
                <form action="<?php echo e(route('vendor.addon.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.name')); ?></label>
                                <input type="text" name="name" class="form-control" placeholder="New addon" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.price')); ?></label>
                                <input type="number" min="1" max="10000" name="price" step="0.01" class="form-control" placeholder="100" required>
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
                                <th style="width: 50%"><?php echo e(__('messages.name')); ?></th>
                                <th style="width: 50%"><?php echo e(__('messages.price')); ?></th>
                                <th style="width: 10%"><?php echo e(__('messages.action')); ?></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>
                                    <input type="text" id="column1_search" class="form-control form-control-sm"
                                           placeholder="Search Addon">
                                </th>
                                <th></th>
                                <th>
                                    
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php $__currentLoopData = $addons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td>
                                    <span class="d-block font-size-sm text-body">
                                        <?php echo e($addon['name']); ?>

                                    </span>
                                    </td>
                                    <td><?php echo e(\App\CentralLogics\Helpers::format_currency($addon['price'])); ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-white"
                                                href="<?php echo e(route('vendor.addon.edit',[$addon['id']])); ?>" title="<?php echo e(__('messages.edit')); ?> <?php echo e(__('messages.addon')); ?>"><i class="tio-edit"></i></a>
                                        <a class="btn btn-sm btn-white"     href="javascript:"
                                            onclick="form_alert('addon-<?php echo e($addon['id']); ?>','Want to delete this addon ?')" title="<?php echo e(__('messages.delete')); ?> <?php echo e(__('messages.addon')); ?>"><i class="tio-delete-outlined"></i></a>
                                        <form action="<?php echo e(route('vendor.addon.delete',[$addon['id']])); ?>"
                                                    method="post" id="addon-<?php echo e($addon['id']); ?>">
                                            <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <hr>
                        <table>
                            <tfoot>
                            <?php echo $addons->links(); ?>

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
                    .columns(2)
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/addon/index.blade.php ENDPATH**/ ?>