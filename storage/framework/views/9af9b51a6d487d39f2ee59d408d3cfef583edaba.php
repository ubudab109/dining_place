
<?php $__env->startSection('title','QR CODE'); ?>
<?php $__env->startPush('css_or_js'); ?>
    <!-- Custom styles for this page -->
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content container-fluid"> 
  <div class="row">
    <div class="col-sm-4">
      <h3 class="card-title">Set your Main Menu’s Language</h3>
      <p class="card-text">Your current language is <?php echo e($languageRestaurant->name); ?></p>
      <div class="card">
        <div class="card-body">
          <form action="<?php echo e(route('vendor.language.update')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
              <label for="">Set your Main Menu’s Language</label>
              <select name="id_lang" id="" class="form-control">
                <?php $__currentLoopData = $restaurant->language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($item->id); ?>" <?php echo e($restaurant->language_id == $item->id ? 'selected' : ''); ?>><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <button class="btn btn-pink" type="submit">Submit</button>
            
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-8">
      <div class="card">
        <div class="card-header">
          <h4>Add New Language</h4>
        </div>
        <div class="card-body">
          <form action="<?php echo e(route('vendor.language.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <select name="code" id="" class="form-control">
                <option value="" selected disabled>Select Language</option>
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($item->code); ?>"><?php echo e($item->english_name); ?></option> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <button class="btn btn-pink" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <hr />
  <hr />
  <div class="row">
    <div class="col-8">
      <?php $__currentLoopData = $restaurant->language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e(asset('assets/flags_new/'.$item->languages->flag->flag)); ?>"/>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <!-- Page level plugins -->
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/languages/index.blade.php ENDPATH**/ ?>