
<?php $__env->startSection('title','QR CODE'); ?>
<?php $__env->startPush('css_or_js'); ?>
    <!-- Custom styles for this page -->
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content container-fluid"> 
  <div class="row">
    <div class="col-sm-4">
      <h3 class="card-title">Restaurant’s QR Code Design</h3>
      <p class="card-text">Use the design below to display in front of your restaurant</p>
      <div class="card">
        <div class="card-body">
          <div class="row mb-5 justify-content-center">
            <h1 style="font-size: 20px; font-weight: bold; line-height: 30px;">Scan QR Code Below To See Our Menu</h1>
          </div>
          <div class="row justify-content-center mb-5">
            <img src="<?php echo e(asset('storage/restaurant/'. $restaurant->logo)); ?>" alt="" style="border-radius: 50%; width: 30%;  ">
          </div>
          <div class="row justify-content-center text-center mb-5">
            <p>Now you can order contactless and pay cashless through your smartphone with us through My Dining Place!</p>
          </div>
          <div class="row justify-content-center">
            
            <?php echo QrCode::size(200)->generate(route('restaurant-list', $restaurant->slug)); ?>

          </div>
          <div class="row justify-content-center mt-4">
            <img src="https://mydiningplace.com/wp-content/uploads/2020/12/IMG-20201214-WA0002.jpg" width="150">
          </div>
          <div class="row justify-content-center">
            <p class="qr_code_desc" style="font-weight:300;padding-top: 15px">www.mydiningplace.com</p>
          </div>
          <div class="row justify-content-center">
            <img src="https://mydiningplace.com/wp-content/uploads/2020/12/download.png" width="150">
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 mt-8">
      <div class="row justify-content-center">
        <?php echo QrCode::size(200)->generate(route('restaurant-list', $restaurant->slug)); ?>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card text-center">
        <div class="card-header">
          Table's QR code.
          Use the generator below to generate QR Code for your tables. Save each photo and place on your table accordingly
        </div>
        <div class="card-body">
          <form action="">
            <div class="col-7">
              <input type="hidden" name="" id="slug" value=<?php echo e($restaurant->slug); ?>>
              <input type="text" name="title" id="title" class="form-control" placeholder="title">
            </div>
            <div class="col-7">
              <select name="table" id="table" class="form-control">
                <option value="" selected disabled>Select Table</option>
                <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </form>
          <div class="form-group mt-3 text-left">
            <button type="button" onclick="generate()" class="btn btn-primary">Generate</button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="row mt-8">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="row mb-5 justify-content-center">
            <h1 style="font-size: 20px; font-weight: bold; line-height: 30px;">Scan QR Code Below To See Our Menu</h1>
          </div>
          <div class="row justify-content-center mb-5">
            <img src="<?php echo e(asset('storage/restaurant/'. $restaurant->logo)); ?>" alt="" style="border-radius: 50%; width: 30%;  ">
          </div>
          <div class="row justify-content-center text-center mb-5">
            <p>Now you can order contactless and pay cashless through your smartphone with us through My Dining Place!</p>
          </div>
          <div class="row justify-content-center">
            <div id="qrcode-2"></div>
          </div>
          <div class="row justify-content-center mt-4">
            <img src="https://mydiningplace.com/wp-content/uploads/2020/12/IMG-20201214-WA0002.jpg" width="150">
          </div>
          <div class="row justify-content-center">
            <p class="qr_code_desc" style="font-weight:300;padding-top: 15px">www.mydiningplace.com</p>
          </div>
          <div class="row justify-content-center">
            <img src="https://mydiningplace.com/wp-content/uploads/2020/12/download.png" width="150">
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
  function generate()
  {
    var title = $("#title").val();
    var slug = $("#slug").val();
    var table = $("#table").val();
    if (title == '' || table == '') {
      alert('Please Fill First')
    } else {
      var url = "<?php echo e(route('restaurant-list', ':slug')); ?>?table=:table"
      url = url.replace(':slug', slug);
      url = url.replace(':table', table);
      new QRCode(document.getElementById("qrcode-2"), {
        text: url,
      });
    }
  }
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <!-- Page level plugins -->
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/QR/index.blade.php ENDPATH**/ ?>