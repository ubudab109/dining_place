<!-- Header -->
<div class="card-header">
    <h5 class="card-header-title">
        <i class="tio-star"></i> <?php echo e(trans('messages.top_rated_foods')); ?>

    </h5>
    <?php ($params=session('dash_params')); ?>
    <?php if($params['zone_id']!='all'): ?>
        <?php ($zone_name=\App\Models\Zone::where('id',$params['zone_id'])->first()->name); ?>
    <?php else: ?>
        <?php ($zone_name='All'); ?>
    <?php endif; ?>
    <label class="badge badge-soft-info">( Zone : <?php echo e($zone_name); ?> )</label>
</div>
<!-- End Header -->

<!-- Body -->
<div class="card-body">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tbody>
                <?php $__currentLoopData = $top_rated_foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ($food=\App\Models\Food::find($item['food_id'])); ?>
                    <tr onclick="location.href='<?php echo e(route('admin.food.view',[$item['food_id']])); ?>'"
                        style="cursor: pointer">
                        <td scope="row">
                            <img height="35" style="border-radius: 5px"
                                 src="<?php echo e(asset('storage/app/public/product')); ?>/<?php echo e($food['image']); ?>"
                                 onerror="this.src='<?php echo e(asset('public/assets/admin/img/160x160/img2.jpg')); ?>'"
                                 alt="<?php echo e($food->name); ?> image">
                            <span class="ml-2">
                                                    <?php echo e($food->name??'Not exist!'); ?>

                                                </span>
                        </td>
                        <td>
                                                <span style="font-size: 18px">
                                                    <?php echo e(round($item['ratings_average'],2)); ?> <i style="color: gold" class="tio-star"></i>
                                                </span>
                        </td>
                        <td>
                                                  <span style="font-size: 18px">
                                                    <?php echo e($item['total']); ?> <i class="tio-users-switch"></i>
                                                  </span>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Body -->
<?php /**PATH /home/vagrant/code/diningtest/resources/views/admin-views/partials/_top-rated-foods.blade.php ENDPATH**/ ?>