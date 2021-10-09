

<?php $__env->startSection('title','Subscription'); ?>

<?php $__env->startPush('css_or_js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="page-header-title text-capitalize">Suubscription</h4>
        </div>
        <div class="card-body row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="for-card col-md-6 mb-1">
                <div class="card for-card-body-2 shadow h-100 text-white"  style="background: #8d8d8d;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold  text-uppercase for-card-text mb-1">
                                    Subscription
                                </div>
                                <div
                                    class="for-card-count"><?php echo e($subscription->subs_name); ?>

                                </div>
                                <div
                                    class="for-card-count">Price Rp. <?php echo e(number_format($subscription->subs_price, 0)); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer"  style="background: #8d8d8d; border:none;">
                      <a tabindex="0" class="btn btn w-100 btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo e(__('messages.warning_missing_bank_info')); ?>" data-content="<?php echo e(__('messages.warning_add_bank_info')); ?>">Cancel Subscription</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
      <div class="card-header">
          <h4 class="page-header-title text-capitalize">Suubscription Details</h4>
      </div>
      <div class="card-body row">
          <!-- Earnings (Monthly) Card Example -->
          <div class="for-card col-md-12 mb-1">
              <div class="card for-card-body-2 shadow h-100 text-white"  style="background: #8d8d8d;">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="font-weight-bold  text-uppercase for-card-text mb-1">
                                  Subscription Details
                              </div>
                              <?php echo $subscription->desc; ?>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/subscription/index.blade.php ENDPATH**/ ?>