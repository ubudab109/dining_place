
<?php $__env->startSection('title','QR CODE'); ?>
<?php $__env->startPush('css_or_js'); ?>
    <!-- Custom styles for this page -->
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content container-fluid"> 
  <div class="row">
    <div class="col-sm-4">
      <h3 class="card-title">Payment Method</h3>
      <p class="card-text">Set your Payment Method</p>
      <div class="card">
        <div class="card-body">
          <form action="">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="">Do you want to allow customers to pay through our website/app (handling fee from 4% applies)?</label>
              <select name="" id="" class="form-control">
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </form>
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

<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/payment-method/index.blade.php ENDPATH**/ ?>