
<?php $__env->startSection('title','QR CODE'); ?>
<?php $__env->startPush('css_or_js'); ?>
    <!-- Custom styles for this page -->
<?php $__env->stopPush(); ?>
<?php $__env->startSection('style'); ?>
<style>
  .wcfm-clearfix {
    clear: both;
}


.template_qrcode_raw_store, .template_qrcode_raw {
    margin: 0 auto;
}

p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}

#qrcode_store {
    margin-top: 10px;
}
</style>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="content container mt-5"> 
  <div class="store_code_wrapper" style="display: flex;
  width: 100%; justify-content: space-between;">
    <div class="store_code" id="store-code-2" style="width:400px;border:1px solid #ccc;padding: 20px;background:#fff">
      <div class="row" style="padding: inherit;">
        <div class="qr_code_title_store" style="float:left;width:60%">
          <p style="font-size: 27px;font-weight:1000;line-height: 30px; color: black">Scan QR Code Below To See Our Menu</p>
        </div>
        <div class="qr_code_logo_store" style="float:left;width:40%; text-align:right">
          <img src="<?php echo e(asset('storage/restaurant/'.$restaurant->logo)); ?>" width="90">
        </div>
      </div>
      <div class="wcfm-clearfix"></div>
      <div class="row" style="padding: inherit; color: black">
        <p class="qr_code_desc_store"> Now you can order contactless and pay cashless through your smartphone with us through My Dining Place!</p>
      </div>
      <br>
      <div id="qrcode_store" class="row justify-content-center">
        <?php
            $png = QrCode::format('png')->size(200)->generate(route('restaurant-list', $restaurant->slug));
            $png = base64_encode($png);
            echo "<img class='img-qr' src='data:image/png;base64," . $png . "' width='50' height='300'>";
        ?>
      </div>
      <br>
      <div class="wcfm-clearfix"></div>
      <div class="qr_code_site_logo" style="float:left;text-align:left">
        <img src="<?php echo e(asset('assets/dining.jpg')); ?>" width="150">
        <p class="qr_code_desc" style="font-weight:300;padding-top: 15px">www.mydiningplace.com</p>
      </div>	
      <div class="qr_code_site_logo" style="float:left;width:50%;text-align:right">
        <img src="<?php echo e(asset('assets/download.png')); ?>" width="150">
      </div>
      <div class="wcfm-clearfix"></div>
    </div>
    <div class="template_qrcode_raw_store">
      <div id="qrcode_raw_store" class="row justify-content-left">
        <?php
            $png = QrCode::format('png')->size(200)->generate(route('restaurant-list', $restaurant->slug));
            $png = base64_encode($png);
            echo "<img src='data:image/png;base64," . $png . "'>";
        ?>
      </div>
    </div>
  </div>
  <div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-4 col-sm-8">
      <button class="btn btn-pink mr-2" type="button" onclick="downloadTemplate()">Download Template</button>
    </div>
    <div class="col-lg-4 col-sm-8">
      <a class="btn btn-pink" href="data:image/png;base64,<?php echo e($png); ?>" download>Download Raw</a>
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
            <button type="button" onclick="generate()" class="btn btn-pink">Generate</button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="row mt-8">
    <div class="store_code_wrapper" style="display: flex;
  width: 100%; justify-content: space-between;">
    <div class="store_code" id="store_code-1" style="width:400px;border:1px solid #ccc;padding: 20px;background:#fff">
      <div class="row" style="padding: inherit;">
        <div class="qr_code_title_store" style="float:left;width:60%">
          <p style="font-size: 27px;font-weight:1000;line-height: 30px; color: black">Scan QR Code Below To See Our Menu</p>
        </div>
        <div class="qr_code_logo_store" style="float:left;width:40%; text-align:right">
          <img src="<?php echo e(asset('storage/restaurant/'.$restaurant->logo)); ?>" width="90">
        </div>
      </div>
      <div class="wcfm-clearfix"></div>
      <div class="row" style="padding: inherit; color: black">
        <p class="qr_code_desc_store">Title <span id="title_text"></span> </p>
        <p class="qr_code_desc_store">Table Number <span id="number_table"></span> </p>
      </div>
      <br>
      <div id="qrcode_store-1" class="row justify-content-center" style="display: block;
      margin-left: auto;
      margin-right: auto;
      width: 80%;">
       
      </div>
      <br>
      <div class="wcfm-clearfix"></div>
      <div class="qr_code_site_logo" style="float:left;text-align:left">
        <img src="<?php echo e(asset('assets/dining.jpg')); ?>" width="150">
        <p class="qr_code_desc" style="font-weight:300;padding-top: 15px">www.mydiningplace.com</p>
      </div>	
      <div class="qr_code_site_logo" style="float:left;width:50%;text-align:right">
        <img src="<?php echo e(asset('assets/download.png')); ?>" width="150">
      </div>
      <div class="wcfm-clearfix"></div>
    </div>
    <div class="template_qrcode_raw_store">
      <div id="qrcode_raw_store-1" class="row justify-content-left" style="display: block;
      margin-left: auto;
      margin-right: auto;
      width: 70%;">
        
      </div>
    </div>
    
  </div>
  </div>
  <div class="row justify-content-center" id="downloadButton">
    
  </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>

  function downloadTemplateRaw()
  {
    html2canvas(document.getElementById("qrcode_raw_store-1"),		{
			allowTaint: true,
			useCORS: true
		}).then(function (canvas) {
			var anchorTag = document.createElement("a");
			document.body.appendChild(anchorTag);
			anchorTag.download = "qrCode.jpg";
			anchorTag.href = canvas.toDataURL();
			anchorTag.target = '_blank';
			anchorTag.click();
		});
  }


  function downloadTemplateNew()
  {
    html2canvas(document.getElementById("store_code-1"),		{
			allowTaint: true,
			useCORS: true
		}).then(function (canvas) {
			var anchorTag = document.createElement("a");
			document.body.appendChild(anchorTag);
			anchorTag.download = "qrCode.jpg";
			anchorTag.href = canvas.toDataURL();
			anchorTag.target = '_blank';
			anchorTag.click();
		});
  }
  function downloadTemplate()
  {
    html2canvas(document.getElementById("store-code-2"),		{
			allowTaint: true,
			useCORS: true
		}).then(function (canvas) {
			var anchorTag = document.createElement("a");
			document.body.appendChild(anchorTag);
			anchorTag.download = "qrCode.jpg";
			anchorTag.href = canvas.toDataURL();
			anchorTag.target = '_blank';
			anchorTag.click();
		});
  }

  function generate()
  {
    var title = $("#title").val();
    var slug = $("#slug").val();
    var table = $("#table").val();
    var tableT = $("#table option:selected" ).text();;
    if (title == '' || table == '') {
      alert('Please Fill First')
    } else {
      var url = "<?php echo e(route('restaurant-list', ':slug')); ?>?table=:table"
      url = url.replace(':slug', slug);
      url = url.replace(':table', table);
      $("#number_table").text(tableT);
      $("#title_text").text(title);
      $("#qrcode_store-1").empty();
      $("#qrcode_raw_store-1").empty();

      new QRCode(document.getElementById("qrcode_store-1"), {
        text: url,
        width: 500,
	      height: 500,
      });

      var qrRaw = new QRCode(document.getElementById("qrcode_raw_store-1"), {
        text: url,
        
      });

      $("#downloadButton").html(`
        <div class='row justify-content-center mt-5 mb-5'>
          <div class='col-lg-4 col-sm-8'>
            <a class="btn btn-pink mr-2" type="button" onclick="downloadTemplateNew()">Download Template</a>
          </div>
          <div class='col-lg-4 col-sm-8'>
            <a class="btn btn-pink" onclick="downloadTemplateRaw()" download>Download Raw</a>
          </div>
        </div>
      `)
    }
  }
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <!-- Page level plugins -->
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.vendor.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/QR/index.blade.php ENDPATH**/ ?>