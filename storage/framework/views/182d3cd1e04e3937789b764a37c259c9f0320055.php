

<?php $__env->startSection('title',__('messages.restaurant').' '.__('messages.wallet')); ?>

<?php $__env->startPush('css_or_js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="page-header-title text-capitalize"><?php echo e(__('messages.restaurant')); ?> <?php echo e(__('messages.wallet')); ?></h4>
        </div>
        <div class="card-body row">
        <?php
            $wallet = \App\Models\RestaurantWallet::where('vendor_id',\App\CentralLogics\Helpers::get_vendor_id())->first();
            if(isset($wallet)==false){
                \Illuminate\Support\Facades\DB::table('restaurant_wallets')->insert([
                    'vendor_id'=>\App\CentralLogics\Helpers::get_vendor_id(),
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
                $wallet = \App\Models\RestaurantWallet::where('vendor_id',\App\CentralLogics\Helpers::get_vendor_id())->first();
            }
        ?>
                    <!-- Earnings (Monthly) Card Example -->
            <div class="for-card col-md-4 mb-1">
                <div class="card for-card-body-2 shadow h-100 text-white"  style="background: #8d8d8d;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold  text-uppercase for-card-text mb-1">
                                    <?php echo e(__('messages.withdraw_able_balance')); ?>

                                </div>
                                <div
                                    class="for-card-count"><?php echo e($wallet->balance); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer"  style="background: #8d8d8d; border:none;">
                        <?php if(\App\CentralLogics\Helpers::get_vendor_data()->account_no==null || \App\CentralLogics\Helpers::get_vendor_data()->bank_name==null): ?>
                        <a tabindex="0" class="btn btn w-100 btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo e(__('messages.warning_missing_bank_info')); ?>" data-content="<?php echo e(__('messages.warning_add_bank_info')); ?>"><?php echo e(__('messages.request')); ?> <?php echo e(__('messages.withdraw')); ?></a>
                        <?php else: ?>   
                        <a class="btn w-100" style="background: #f9fafc;" href="javascript:" data-toggle="modal" data-target="#balance-modal"><?php echo e(__('messages.request')); ?> <?php echo e(__('messages.withdraw')); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <!-- Panding Withdraw Card Example -->
                    <div class="for-card col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                        <div class="card  shadow h-100 for-card-body-3  badge-secondary" >
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div
                                            class=" font-weight-bold for-card-text text-uppercase mb-1"><?php echo e(__('messages.pending')); ?> <?php echo e(__('messages.withdraw')); ?></div>
                                        <div
                                            class="for-card-count"><?php echo e($wallet->pending_withdraw); ?></div>
                                    </div>
                                    <div class="col-auto for-margin">
                                        <i class="fas fa-money-bill fa-2x for-fa-3 text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="for-card col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                        <div class="card  shadow h-100 for-card-body-3 text-white"  style="background: #2C2E43;">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div
                                            class=" font-weight-bold for-card-text text-uppercase mb-1"><?php echo e(__('messages.withdrawn')); ?></div>
                                        <div
                                            class="for-card-count"><?php echo e($wallet->total_withdrawn); ?></div>
                                    </div>
                                    <div class="col-auto for-margin">
                                        <i class="fas fa-money-bill fa-2x for-fa-3 text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collected Cash Card Example -->
                    <div class="for-card col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                        <div class="card r shadow h-100 for-card-body-4  badge-dark">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div
                                            class=" for-card-text font-weight-bold  text-uppercase mb-1"><?php echo e(__('messages.collected_cash')); ?></div>
                                        <div
                                            class="for-card-count"><?php echo e($wallet->collected_cash); ?></div>
                                    </div>
                                    <div class="col-auto for-margin">
                                        <i class="fas fa-money-bill for-fa-fa-4  fa-2x text-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="for-card col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                        <div class="card r shadow h-100 for-card-body-4 text-white" style="background:#362222;">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div
                                            class=" for-card-text font-weight-bold  text-uppercase mb-1"><?php echo e(__('messages.total_earning')); ?></div>
                                        <div
                                            class="for-card-count"><?php echo e($wallet->total_earning); ?></div>
                                    </div>
                                    <div class="col-auto for-margin">
                                        <i class="fas fa-money-bill for-fa-fa-4  fa-2x text-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    <div class="modal fade" id="balance-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Withdraw Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('vendor.wallet.withdraw-request')); ?>" method="post">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Amount:</label>
                            <input type="number" name="amount" step="0.01"
                                    value="<?php echo e($wallet->balance); ?>" 
                                    class="form-control" id="" min="0" max="<?php echo e($wallet->balance); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Content Row -->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5><?php echo e(__('messages.withdraw')); ?> <?php echo e(__('messages.request')); ?> <?php echo e(__('messages.table')); ?></h5>
                </div>
                <div class="card-body" style="padding: 0">
                    <div class="table-responsive">
                        <table id="datatable"
                                class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                                style="width: 100%"
                                data-hs-datatables-options='{
                                 "order": [],
                                 "orderCellsTop": true,
                                 "paging":false
                               }'>
                            <thead class="thead-light">
                            <tr>
                                <th><?php echo e(__('messages.sl#')); ?></th>
                                <th><?php echo e(__('messages.amount')); ?></th>
                                <th><?php echo e(__('messages.note')); ?></th>
                                <th><?php echo e(__('messages.request_time')); ?></th>
                                <th><?php echo e(__('messages.status')); ?></th>
                                <th style="width: 5px">Close</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $withdraw_req; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$wr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td scope="row"><?php echo e($k+$withdraw_req->firstItem()); ?></td>
                                    <td><?php echo e($wr['amount']); ?></td>
                                    <td><?php echo e($wr->__action_note); ?></td>
                                    <td><?php echo e($wr->created_at); ?></td>
                                    <td>
                                        <?php if($wr->approved==0): ?>
                                            <label class="badge badge-primary">Pending</label>
                                        <?php elseif($wr->approved==1): ?>
                                            <label class="badge badge-success">Approved</label>
                                        <?php else: ?>
                                            <label class="badge badge-danger">Denied</label>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($wr->approved==0): ?>
                                            
                                            <a class="btn btn-sm btn-danger" href="javascript:" onclick="form_alert('withdraw-<?php echo e($wr['id']); ?>','Want to delete this  ?')" title="<?php echo e(__('messages.delete')); ?>"><i class="tio-delete-outlined"></i>
                                        </a>

                                            <form action="<?php echo e(route('vendor.wallet.close-request',[$wr['id']])); ?>"
                                                    method="post" id="withdraw-<?php echo e($wr['id']); ?>">
                                                <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                                            </form>
                                        <?php else: ?>
                                            <label>complete</label>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <?php echo e($withdraw_req->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/wallet/index.blade.php ENDPATH**/ ?>