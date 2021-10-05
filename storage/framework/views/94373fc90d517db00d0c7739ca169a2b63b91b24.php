

<?php $__env->startSection('title','Add new category'); ?>

<?php $__env->startPush('css_or_js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title"><?php echo e(__('messages.category')); ?></h1>
                </div>
                <?php if(isset($category)): ?>
                <a href="<?php echo e(route('admin.category.add')); ?>" class="btn btn-primary pull-right"><i class="tio-add-circle"></i> <?php echo e(__('messages.add')); ?> <?php echo e(__('messages.new')); ?> <?php echo e(__('messages.category')); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header"><h5><?php echo e(isset($category)?__('messages.update'):__('messages.add').' '.__('messages.new')); ?> <?php echo e(__('messages.category')); ?></h5></div>
                    <div class="card-body">
                        <form action="<?php echo e(isset($category)?route('admin.category.update',[$category['id']]):route('admin.category.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"><?php echo e(__('messages.name')); ?></label>
                                <input type="text" name="name" value="<?php echo e(isset($category)?$category['name']:''); ?>" class="form-control" placeholder="New Category" required>
                            </div>
                            <input name="position" value="0" style="display: none">
                            <div class="form-group">
                                <label><?php echo e(__('messages.image')); ?></label><small style="color: red">* ( <?php echo e(__('messages.size')); ?> 600 X 200 pixel )</small>
                                <div class="custom-file">
                                    <input type="file" name="image" id="customFileEg1" class="custom-file-input"
                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" required>
                                    <label class="custom-file-label" for="customFileEg1"><?php echo e(__('messages.choose')); ?> <?php echo e(__('messages.file')); ?></label>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom:0%;">
                                <center>
                                    <img style="width: 80%;border: 1px solid; border-radius: 10px;" id="viewer"
                                        <?php if(isset($category)): ?>
                                        src="<?php echo e(asset('storage/app/public/category')); ?>/<?php echo e($category['image']); ?>"
                                        <?php else: ?>
                                        src="<?php echo e(asset('public/assets/admin/img/900x400/img1.jpg')); ?>"
                                        <?php endif; ?>
                                        alt="image"/>
                                </center>
                            </div>
                            <div class="form-group pt-2">
                                <button type="submit" class="btn btn-primary"><?php echo e(isset($category)?__('messages.update'):__('messages.save')); ?></button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5><?php echo e(__('messages.category')); ?> <?php echo e(__('messages.list')); ?><span class="badge badge-soft-dark ml-2" id="itemCount"><?php echo e($categories->count()); ?></span></h5>
                        <form id="dataSearch">
                            <?php echo csrf_field(); ?>
                            <!-- Search -->
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tio-search"></i>
                                    </div>
                                </div>
                                <input type="search" name="search" class="form-control" placeholder="Search categories" aria-label="Search categories">
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
                                        <th><?php echo e(__('messages.#')); ?></th>
                                        <th><?php echo e(__('messages.id')); ?></th>
                                        <th style="width: 50%"><?php echo e(__('messages.name')); ?></th>
                                        <th style="width: 20%"><?php echo e(__('messages.status')); ?></th>
                                        <th style="width: 10%"><?php echo e(__('messages.action')); ?></th>
                                    </tr>
                                </thead>

                                <tbody id="table-div">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+$categories->firstItem()); ?></td>
                                        <td><?php echo e($category->id); ?></td>
                                        <td>
                                        <span class="d-block font-size-sm text-body">
                                            <?php echo e($category['name']); ?>

                                        </span>
                                        </td>
                                        <td>
                                            <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox<?php echo e($category->id); ?>">
                                            <input type="checkbox" onclick="location.href='<?php echo e(route('admin.category.status',[$category['id'],$category->status?0:1])); ?>'"class="toggle-switch-input" id="stocksCheckbox<?php echo e($category->id); ?>" <?php echo e($category->status?'checked':''); ?>>
                                                <span class="toggle-switch-label">
                                                    <span class="toggle-switch-indicator"></span>
                                                </span>
                                            </label>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-white"
                                                href="<?php echo e(route('admin.category.edit',[$category['id']])); ?>" title="<?php echo e(__('messages.edit')); ?> <?php echo e(__('messages.category')); ?>"><i class="tio-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-white" href="javascript:"
                                            onclick="form_alert('category-<?php echo e($category['id']); ?>','Want to delete this category')" title="<?php echo e(__('messages.delete')); ?> <?php echo e(__('messages.category')); ?>"><i class="tio-delete-outlined"></i>
                                            </a>
                                            <form action="<?php echo e(route('admin.category.delete',[$category['id']])); ?>" method="post" id="category-<?php echo e($category['id']); ?>">
                                                <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                                            </form>
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
                                    <?php echo $categories->links(); ?>

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
                url: '<?php echo e(route('admin.category.search')); ?>',
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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/admin-views/category/index.blade.php ENDPATH**/ ?>