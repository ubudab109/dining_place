

<?php $__env->startSection('title',__('messages.edit_restaurant')); ?>
<?php $__env->startPush('css_or_js'); ?>
    <!-- Custom styles for this page -->
    <link href="<?php echo e(asset('assets/admin')); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
     <!-- Custom styles for this page -->
     <link href="<?php echo e(asset('assets/admin/css/croppie.css')); ?>" rel="stylesheet">
     <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
     <style>
        @media(max-width:375px){
         #shop-image-modal .modal-content{
           width: 367px !important;
         margin-left: 0 !important;
     }
    
     }

@media(max-width:500px){
 #shop-image-modal .modal-content{
           width: 400px !important;
         margin-left: 0 !important;
     }
   
   
}
 </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Content Row -->
    <div class="content container-fluid"> 
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 mb-0 text-capitalize"><?php echo e(__('messages.edit')); ?> <?php echo e(__('messages.restaurant')); ?> <?php echo e(__('messages.info')); ?></h1>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('vendor.shop.update',[$shop->id])); ?>" method="post"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name"><?php echo e(__('messages.restaurant')); ?> <?php echo e(__('messages.name')); ?> <span class="text-danger">*</span></label>
                                    <input type="text" name="name" value="<?php echo e($shop->name); ?>" class="form-control" id="name"
                                            required>
                                </div>
                                <div class="form-group">
                                    <label for="name"><?php echo e(__('messages.contact')); ?> <?php echo e(__('messages.number')); ?><span class="text-danger">*</span></label>
                                    <input type="text" name="contact" value="<?php echo e($shop->phone); ?>" class="form-control" id="name"
                                            required>
                                </div>
                                <div class="form-group">
                                    <label for="address"><?php echo e(__('messages.address')); ?><span class="text-danger">*</span></label>
                                    <textarea type="text" rows="4" name="address" value="" class="form-control" id="address"
                                            required><?php echo e($shop->address); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name"><?php echo e(__('messages.upload')); ?> <?php echo e(__('messages.logo')); ?></label>
                                    <div class="custom-file">
                                        <input type="file" name="image" id="customFileUpload" class="custom-file-input"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                        <label class="custom-file-label" for="customFileUpload"><?php echo e(__('messages.choose')); ?> <?php echo e(__('messages.file')); ?></label>
                                    </div>
                                </div> 
                                <center>
                                    <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer"
                                    onerror="this.src='<?php echo e(asset('assets/admin/img/image-place-holder.png')); ?>'"
                                    src="<?php echo e(asset('storage/app/public/restaurant/'.$shop->logo)); ?>" alt="Product thumbnail"/>
                                </center>  
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name"><?php echo e(__('messages.upload')); ?> <?php echo e(__('messages.cover')); ?> <?php echo e(__('messages.photo')); ?> <span class="text-danger">(<?php echo e(__('messages.ratio')); ?> 2:1)</span></label>
                            <div class="custom-file">
                                <input type="file" name="photo" id="coverImageUpload" class="custom-file-input"
                                    accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                <label class="custom-file-label" for="customFileUpload"><?php echo e(__('messages.choose')); ?> <?php echo e(__('messages.file')); ?></label>
                            </div>
                        </div> 
                        <center>
                            <img style="max-width: 100%;border: 1px solid; border-radius: 10px; max-height:200px;" id="coverImageViewer"
                            onerror="this.src='<?php echo e(asset('assets/admin/img/restaurant_cover.jpg')); ?>'"
                            src="<?php echo e(asset('storage/app/public/restaurant/cover/'.$shop->cover_photo)); ?>" alt="Product thumbnail"/>
                        </center>  
                        <br>
                        <button type="submit" class="btn btn-primary text-capitalize" id="btn_update"><?php echo e(__('messages.update')); ?></button>
                        <a class="btn btn-danger text-capitalize" href="<?php echo e(route('vendor.shop.view')); ?>"><?php echo e(__('messages.cancel')); ?></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script_2'); ?>

   <script>
        function readURL(input, viewer) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+viewer).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#coverImageUpload").change(function () {
            readURL(this, 'coverImageViewer');
        });
        $("#customFileUpload").change(function () {
            readURL(this, 'viewer');
        });
   </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/shop/edit.blade.php ENDPATH**/ ?>