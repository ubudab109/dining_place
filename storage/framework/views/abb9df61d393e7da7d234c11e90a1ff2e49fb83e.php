
<?php $__env->startSection('title',__('messages.restaurant_view')); ?>
<?php $__env->startPush('css_or_js'); ?>
    <!-- Custom styles for this page -->
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content container-fluid"> 
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" >
                <h3 class="mb-0  text-capitalize position-absolute"><?php echo e(__('messages.my_shop')); ?> <?php echo e(__('messages.info')); ?> </h3>
            </div>
            <div class="card-body">
                <?php if($shop->cover_photo): ?>
                <div class="row">
                    <div class="col-12"  style="max-height:250px; overflow-y: hidden;">
                         <img src="<?php echo e(asset('storage/restaurant/cover/'.$shop->cover_photo)); ?>"  style="max-height:auto;width: 100%;">
                    </div>
                </div>
                <?php endif; ?>
                <div class="row mt-2">
                    <?php if($shop->image=='def.png'): ?>
                    <div class="col-md-4">
                        <img height="200" width="200"  class="rounded-circle border"
                        src="<?php echo e(asset('assets/back-end')); ?>/img/shop.png"
                        alt="User Pic">
                    </div>
                    
                    <?php else: ?>
                    
                        <div class="col-md-4">
                            <img src="<?php echo e(asset('storage/restaurant/'.$shop->logo)); ?>" class="rounded-circle border"
                            height="200" width="200" alt="">
                        </div>

                    
                    <?php endif; ?>
                 
                    <!-- http://localhost/Food-multivendor/assets/admin/img/restaurant_cover.jpg -->
                    <div class="col-md-8 mt-4">
                        <span class="h4"><?php echo e(__('messages.name')); ?> : <?php echo e($shop->name); ?></span><br>
                        <span class="h5"><?php echo e(__('messages.phone')); ?> : <a style="text-decoration:none; color:black;" href="tel:<?php echo e($shop->phone); ?>"><?php echo e($shop->phone); ?></a></span><br>
                        <span class="h5"><?php echo e(__('messages.address')); ?> : <?php echo e($shop->address); ?></span><br>
                        <span class="h5"><?php echo e(__('messages.admin_commission')); ?> : <?php echo e((isset($shop->comission)?$shop->comission:\App\Models\BusinessSetting::where('key','admin_commission')->first()->value)); ?>%</span><br>
                        <span class="h5"><?php echo e(__('messages.vat/tax')); ?> : <?php echo e($shop->tax); ?>%</span><br>
                        <a class="btn btn-primary mt-1" href="<?php echo e(route('vendor.shop.edit',[$shop->id])); ?>">EDIT</a>
                    </div>
                </div>
                
               
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <!-- Page level plugins -->
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/shop/shopInfo.blade.php ENDPATH**/ ?>