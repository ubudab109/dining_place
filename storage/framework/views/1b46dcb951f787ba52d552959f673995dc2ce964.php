<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Admin | Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/vendor/icon-set/style.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/theme.minc619.css?v=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/toastr.css">
</head>

<body>
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="main">
    <div class="position-fixed top-0 right-0 left-0 bg-img-hero"
         style="height: 100%; background-image: url(<?php echo e(asset('assets/admin')); ?>/svg/components/login-background.png);">
    </div>
    <?php ($systemlogo=\App\Models\BusinessSetting::where(['key'=>'logo'])->first()->value); ?>
    <!-- Content -->
    <div class="container py-5 py-sm-7">
        <a class="d-flex justify-content-center mb-5" href="javascript:">
            <img class="z-index-2"
            onerror="this.src='<?php echo e(asset('assets/admin/img/160x160/img2.jpg')); ?>'"
                         src="<?php echo e(asset('storage/app/business/'.$systemlogo)); ?>"
                  alt="Image Description" style="max-height: 100px; max-width: 300px">
        </a>

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <!-- Card -->
                <div class="card card-lg mb-5">
                    <div class="card-body">
                        <!-- Form -->
                        <form class="js-validate" action="<?php echo e(route('admin.auth.login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="text-center">
                                <div class="mb-5">
                                    <h2 class="text-capitalize"><?php echo e(__('messages.signin')); ?></h2>
                                    <span class="badge badge-soft-info">( <?php echo e(__('messages.admin_or_employee_signin')); ?> )</span>
                                    <p><?php echo e(__('messages.want')); ?> <?php echo e(__('messages.to')); ?> <?php echo e(__('messages.login')); ?> <?php echo e(__('messages.your')); ?> <?php echo e(__('messages.vendors')); ?>?
                                        <a href="<?php echo e(route('vendor.auth.login')); ?>">
                                            <?php echo e(__('messages.vendor')); ?> <?php echo e(__('messages.login')); ?>

                                        </a>
                                    </p>
                                </div>
                                
                            </div>

                            <!-- Form Group -->
                            <div class="js-form-message form-group">
                                <label class="input-label text-capitalize" for="signinSrEmail"><?php echo e(__('messages.your')); ?> <?php echo e(__('messages.email')); ?></label>

                                <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail"
                                       tabindex="1" placeholder="email@address.com" aria-label="email@address.com"
                                       required data-msg="Please enter a valid email address.">
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="js-form-message form-group">
                                <label class="input-label" for="signupSrPassword" tabindex="0">
                                    <span class="d-flex justify-content-between align-items-center">
                                      <?php echo e(__('messages.password')); ?>

                                    </span>
                                </label>

                                <div class="input-group input-group-merge">
                                    <input type="password" class="js-toggle-password form-control form-control-lg"
                                           name="password" id="signupSrPassword" placeholder="8+ characters required"
                                           aria-label="8+ characters required" required
                                           data-msg="Your password is invalid. Please try again."
                                           data-hs-toggle-password-options='{
                                                     "target": "#changePassTarget",
                                            "defaultClass": "tio-hidden-outlined",
                                            "showClass": "tio-visible-outlined",
                                            "classChangeTarget": "#changePassIcon"
                                            }'>
                                    <div id="changePassTarget" class="input-group-append">
                                        <a class="input-group-text" href="javascript:">
                                            <i id="changePassIcon" class="tio-visible-outlined"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Checkbox -->
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="termsCheckbox"
                                           name="remember">
                                    <label class="custom-control-label text-muted" for="termsCheckbox">
                                        <?php echo e(__('messages.remember')); ?> <?php echo e(__('messages.me')); ?>

                                    </label>
                                </div>
                            </div>
                            <!-- End Checkbox -->

                            <button type="submit" class="btn btn-lg btn-block btn-primary"><?php echo e(__('messages.sign_in')); ?></button>
                        </form>
                        <!-- End Form -->
                    </div>
                    <?php if(env('APP_MODE')=='demo'): ?>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-10">
                                    <span>Email : admin@admin.com</span><br>
                                    <span>Password : 12345678</span>
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-primary" onclick="copy_cred()"><i class="tio-copy"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
    <!-- End Content -->
</main>
<!-- ========== END MAIN CONTENT ========== -->


<!-- JS Implementing Plugins -->
<script src="<?php echo e(asset('assets/admin')); ?>/js/vendor.min.js"></script>

<!-- JS Front -->
<script src="<?php echo e(asset('assets/admin')); ?>/js/theme.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/js/toastr.js"></script>
<?php echo Toastr::message(); ?>


<?php if($errors->any()): ?>
    <script>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        toastr.error('<?php echo e($error); ?>', Error, {
            CloseButton: true,
            ProgressBar: true
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<?php endif; ?>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // INITIALIZATION OF SHOW PASSWORD
        // =======================================================
        $('.js-toggle-password').each(function () {
            new HSTogglePassword(this).init()
        });

        // INITIALIZATION OF FORM VALIDATION
        // =======================================================
        $('.js-validate').each(function () {
            $.HSCore.components.HSValidation.init($(this));
        });
    });
</script>

<?php if(env('APP_MODE')=='demo'): ?>
    <script>
        function copy_cred() {
            $('#signinSrEmail').val('admin@admin.com');
            $('#signupSrPassword').val('12345678');
            toastr.success('Copied successfully!', 'Success!', {
                CloseButton: true,
                ProgressBar: true
            });
        }
    </script>
<?php endif; ?>

<!-- IE Support -->
<script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="<?php echo e(asset('/assets/admin')); ?>/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
</body>
</html>
<?php /**PATH /home/vagrant/code/diningtest/resources/views/admin-views/auth/login.blade.php ENDPATH**/ ?>