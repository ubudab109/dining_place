

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
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home">Restaurant</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu1">Address</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu2">Document</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu3">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu4">Bank</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu5">Settings</a>
            </li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
    
            <div class="tab-pane container active" id="home"><?php echo $__env->make('vendor-views.shop.partials._edit-info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
            <div class="tab-pane fade container fade" id="menu1"><?php echo $__env->make('vendor-views.shop.partials._edit-address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
            <div class="tab-pane fade container fade" id="menu2"><?php echo $__env->make('vendor-views.shop.partials._edit-document', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
            <div class="tab-pane fade container fade" id="menu3"><?php echo $__env->make('vendor-views.shop.partials._edit-social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
            <div class="tab-pane fade container fade" id="menu4"><?php echo $__env->make('vendor-views.shop.partials._edit-bank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
            <div class="tab-pane fade container fade" id="menu5"><?php echo $__env->make('vendor-views.shop.partials._edit-setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
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