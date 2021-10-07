<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" href="<?php echo e(URL::asset('assets/landing')); ?>/image/logo_no_bg.png">

    <!-- Bootstrap+JQuery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/landing/fontawesome/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/landing/fontawesome/css/fontawesome.min.css')); ?>">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/landing')); ?>/css/normalize.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/landing')); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/admin')); ?>/css/toastr.css">
    <style>
        a:hover {
            color: #000000!important;
            text-decoration: underline;
        }
        html {
            scroll-behavior: smooth;
        }

        .spanner {
            font-size: 14px;
            color: #555;
            font-weight: 400;
            margin: 0 0 10px;
            text-align: left;
        }

        .mybtn1 {
            border-width: 1px;
            border-style: solid;
            border-color: #df5c64;
            background: #e65c65;
            color: #fff;
            padding: 0 30px;
            text-transform: uppercase;
            font-weight: 500;
            line-height: 42px;
            font-size: 14px;
            letter-spacing: 0;
            border-radius: 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            -webkit-transition: .4s;
            -o-transition: .4s;
            transition: .4s;
            display: inline-block;
            text-align: center;
            position: relative;
            width: 100%;
            margin-top: 20px;
        }
    </style>
    <style>
        

        .scroll-bar {
            max-height: calc(100vh - 100px);
            overflow-y: auto !important;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 1px #cfcfcf;
            /*border-radius: 5px;*/
        }

        ::-webkit-scrollbar {
            width: 3px;
        }

        ::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            /*border-radius: 5px;*/
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #FC6A57;
        }
        .deco-none {
            color: inherit;
            text-decoration: inherit;
        }
        .qcont{
            text-transform: lowercase;
        }
        .qcont:first-letter {
            text-transform: capitalize;
        }



        .navbar-vertical .nav-link {
            color: #ffffff;
        }

        .navbar .nav-link:hover {
            color: #C6FFC1;
        }

        .navbar .active > .nav-link, .navbar .nav-link.active, .navbar .nav-link.show, .navbar .show > .nav-link {
            color: #C6FFC1;
        }

        .navbar-vertical .active .nav-indicator-icon, .navbar-vertical .nav-link:hover .nav-indicator-icon, .navbar-vertical .show > .nav-link > .nav-indicator-icon {
            color: #C6FFC1;
        }

        .nav-subtitle {
            display: block;
            color: #fffbdf91;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .03125rem;
        }

        .navbar-vertical .navbar-nav.nav-tabs .active .nav-link, .navbar-vertical .navbar-nav.nav-tabs .active.nav-link {
            border-left-color: #C6FFC1;
        }
    </style>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <?php echo $__env->yieldContent('styler'); ?>
    
</head>

<body>

<header>
    <div class="navbar-div bg-color-primary" style="background-color: #FFFFFF;border-style: solid;border-width: 0px 0px 01px 0px;border-color: #F67280;">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                    <?php ($logo=\App\CentralLogics\Helpers::get_settings('logo')); ?>
                    <img  onerror="this.src='<?php echo e(URL::asset('assets/logo_mdp.jpg')); ?>'"
                          src="<?php echo e(URL::asset('storage/app/business/'.$logo)); ?>"
                          style="height:auto;width:100%; max-width:200px; max-height:60px">
                </a>
                <button style="background: #FFFFFF; border-radius: 2px;font-size: 13px" class="navbar-toggler" type="button"
                        data-toggle="collapse" data-target="#navbarNav">
                   ....
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a style="color: #000000;" class="nav-link navbar-font" href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.home')); ?> <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #000000;" class="nav-link navbar-font" href="<?php echo e(route('home')); ?>#about-us"><?php echo e(__('messages.about_us')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #000000;" class="nav-link navbar-font" href="<?php echo e(route('home')); ?>#subcription">Subcription</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <?php if(auth('vendor')->check()): ?>
                                <a href="<?php echo e(url('/vendor-panel')); ?>" style="color: #000000;" class="nav-link navbar-font"><i class="fas fa-user"></i><?php echo e(\App\CentralLogics\Helpers::get_loggedin_user()->f_name); ?></a>
                            <?php else: ?>
                                <a data-target="#custom-login-wrapper" href="#custom-login-wrapper" data-toggle="modal" style="color: #000000;" class="nav-link navbar-font"><i class="fas fa-user"></i> Login Or Register </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- Modal -->
<div class="modal fade" id="custom-login-wrapper" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col text-center mb-4">
              <h5>LOGIN</h5>
          </div>
          <form class="js-validate" action="<?php echo e(route('vendor.auth.login')); ?>" method="post" id="vendor_login_form">
            <?php echo csrf_field(); ?>
            <div class="js-form-message form-group">
                <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail"
                       tabindex="1" placeholder="email@address.com" aria-label="email@address.com"
                       required data-msg="Please enter a valid email address.">
            </div>
            <div class="js-form-message form-group">
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
                            <i id="changePassIcon" class="tio-visible-outlined far fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="termsCheckbox"
                           name="remember">
                    <label class="custom-control-label text-muted" for="termsCheckbox">
                        Remember me
                    </label>
                </div>
            </div>
            <button type="submit" class="mybtn1">Submit</button>
            <div class="text-center mt-4">
                <a style="color: #df5c64">Lost Password?</a>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col">
                    <a href="<?php echo e(route('login-facebook')); ?>" type="button" class="btn btn-primary" style="width: 102%;">
                        <i class="fab fa-facebook" style="font-size: 20px;"></i>
                        <div class="col-12">
                            Login with <strong>Facebook</strong>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-danger" style="width: 102%;">
                        <div class="col">
                            <i class="fab fa-google" style="font-size: 20px;"></i>
                        </div>
                        <div class="col-12">
                            Login with <strong>Google</strong>
                        </div>
                    </button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php echo $__env->yieldContent('content'); ?>

<footer>
    <div class="footer-div">
        <!-- Footer Start -->
        <footer class="footer-background text-white text-lg-start">
            <!-- Grid container -->
            <div class="container">
                <!--Grid row-->
                <div class="row d-flex justify-content-center justify-content-md-start text-center text-md-left">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-3 mb-md-0 company_details">
                        <div
                            class="row d-flex justify-content-center justify-content-md-start text-center text-md-left">
                            <div class="col-md-12 col-sm-12 d-flex justify-content-center justify-content-md-start text-center text-md-left"
                                 style="padding: 0">
                                <a class="" href="#">
                                    <?php ($logo=\App\CentralLogics\Helpers::get_settings('logo')); ?>
                                    <img class="rounded float-left"
                                         onerror="this.src='<?php echo e(URL::asset('assets/admin/img/160x160/img2.jpg')); ?>'"
                                         src="<?php echo e(URL::asset('storage/app/business/'.$logo)); ?>"
                                         style="max-width: 200px;max-height: 75px">
                                </a>
                            </div>
                        </div>

                        <div class="footer-article-div">
                                <span class="footer-article">
                                    <?php echo e(__('messages.footer_article')); ?>

                                </span>
                        </div>

                        <div class="mt-4">
                            <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white" style="margin-left: 44px"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white" style="margin-left: 44px"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-white" style="margin-left: 44px"><i
                                    class="fab fa-skype"></i></a>
                        </div>
                    </div>

                    <hr class="hr-footer-m">

                    <div class="col-lg-2 col-md-2 mb-0 mb-md-0"></div>
                    <!--Grid column-->
                    <div class="col-lg-2 col-md-2 mb-md-0 footer-items">
                        <span class="footer-title text-uppercase mb-4"><?php echo e(__('messages.support')); ?></span>

                        <ul class="list-unstyled">
                            <li>
                                <a href="<?php echo e(route('about-us')); ?>" class="footer-item text-white"><?php echo e(__('messages.about_us')); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('contact-us')); ?>" class="footer-item text-white"><?php echo e(__('messages.contact_us')); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('privacy-policy')); ?>" class="footer-item text-white"><?php echo e(__('messages.privacy_policy')); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('terms-and-conditions')); ?>" class="footer-item text-white"><?php echo e(__('messages.terms_and_condition')); ?></a>
                            </li>
                        </ul>
                    </div>

                    <hr class="hr-footer-m">

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-2 mb-md-0 footer-items">
                        <span class="footer-title text-uppercase mb-4">Download</span>

                        <ul class="list-unstyled">
                            <li>
                                <a href="https://play.google.com" class="footer-item text-white">Play Store</a>
                            </li>
                            <li class="mb-2">
                                <a href="https://www.apple.com/app-store/" class="footer-item text-white">App Store</a>
                            </li>
                        </ul>
                    </div>

                    <hr class="hr-footer-m">

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-3 mb-md-0 footer-items">
                        <span class="footer-title text-uppercase mb-4">Contact Us</span>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="footer-item text-white">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    <span><?php echo e(\App\CentralLogics\Helpers::get_settings('address')); ?></span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="footer-item text-white">
                                    <i class="fas fa-envelope MR-1"></i>
                                    <span class="ml-1"><?php echo e(\App\CentralLogics\Helpers::get_settings('email_address')); ?></span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="footer-item text-white">
                                    <i class="fas fa-phone MR-1"></i>
                                    <span class="ml-1"><?php echo e(\App\CentralLogics\Helpers::get_settings('phone')); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <hr class="hr-footer-m">
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center" style="background-color: rgba(0, 0, 0, 0.2);font-size: 12px">
                <?php echo e(\App\CentralLogics\Helpers::get_settings('footer_text')); ?>

                <a class="text-white" href="#"><?php echo e(\App\CentralLogics\Helpers::get_settings('business_name')); ?></a>
            </div>
        </footer>
    </div>
</footer>


<!-- Scrips Starts -->
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="<?php echo e(URL::asset('assets/admin')); ?>/js/vendor.min.js"></script>

<!-- JS Front -->
<script src="<?php echo e(URL::asset('assets/admin')); ?>/js/theme.min.js"></script>
<script src="<?php echo e(URL::asset('assets/admin')); ?>/js/sweet_alert.js"></script>
<script src="<?php echo e(URL::asset('assets/admin')); ?>/js/toastr.js"></script>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo Toastr::message(); ?>


<script>
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 2,
            itemsDesktop: [1000, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [767, 1],
            pagination: true,
            autoPlay: true
        });

        $("#why-choose-us-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1000, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [767, 1],
            pagination: true,
            autoPlay: true
        });
    });
</script>

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
        // $('#employee_login_form').hide();
        // $('#vendor_login_form').hide();
    });
    $('#owner_sign_in').on('click', function(){
        $('.signIn').hide();
        $('#employee_login_form').hide();
        $(this).hide();
        $('#employee_sign_in').show();
        $('#vendor_login_form').show();
    });
    $('#employee_sign_in').on('click', function(){
        $('.signIn').hide();
        $('#employee_login_form').show();
        $(this).hide();
        $('#owner_sign_in').show();
        $('#vendor_login_form').hide();
    });
</script>

<?php if(env('APP_MODE')=='demo'): ?>
    <script>
        function copy_cred() {
            $('#signinSrEmail').val('test.restaurant@gmail.com');
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
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="<?php echo e(URL::asset('assets/admin')); ?>/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
<?php echo $__env->yieldPushContent('script_2'); ?>
</body>

</html>
<?php /**PATH /home/vagrant/code/diningtest/resources/views/layouts/landing/app.blade.php ENDPATH**/ ?>