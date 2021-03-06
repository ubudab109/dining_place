<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <!-- Title -->
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/landing/fontawesome/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/landing/fontawesome/css/fontawesome.min.css')); ?>">
    <!-- CSS Implementing Plugins -->
    
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/admin')); ?>/vendor/icon-set/style.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/admin')); ?>/css/theme.minc619.css?v=1.0">
    <?php echo $__env->yieldPushContent('css_or_js'); ?>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/landing')); ?>/css/normalize.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
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

        .dark-bg {
            background-color: #161616;
        }

        .font-custome {
            font-family: "Poppins", Sans-serif;
        }

        .font-describe {
            font-family: "Poppins", Sans-serif;
            line-height: 1.6em;
            font-size: 14px;
        }

        .font-auth {
            font-family: "Poppins", Sans-serif;
            font-weight: 600;
            font-size: 14px;
        }

        .hover-red:hover {
            color: #F67280 !important;
        }
    </style>

    
    <link href="<?php echo e(asset('assets/style-custom.css')); ?>" rel="stylesheet"/>
    
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/landing')); ?>/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/admin')); ?>/css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/admin')); ?>/vendor/icon-set/style.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/admin')); ?>/css/theme.minc619.css?v=1.0">
    <?php echo $__env->yieldPushContent('css_or_js'); ?>
    <script src="<?php echo e(URL::asset('assets/admin')); ?>/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/admin')); ?>/css/toastr.css">
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <?php echo $__env->yieldContent('styler'); ?>
</head>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="loading" style="display: none;">
                <div style="position: fixed;z-index: 9999; left: 40%;top: 37% ;width: 100%">
                    <img width="200" src="<?php echo e(URL::asset('assets/admin/img/loader.gif')); ?>">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Builder -->

<!-- End Builder -->

<!-- JS Preview mode only -->

<header id="headerMain">
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
                            <a style="color: #697279; font-size: 14px; font-weight: 600;" class="nav-link navbar-font font-custome" href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.home')); ?> <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #697279; font-size: 14px; font-weight: 600;" class="nav-link navbar-font font-custome" href="<?php echo e(route('home')); ?>#about-us"><?php echo e(__('messages.about_us')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #697279; font-size: 14px; font-weight: 600;" class="nav-link navbar-font font-custome" href="<?php echo e(route('home')); ?>#subcription">Pricing Plan</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #697279; font-size: 14px; font-weight: 600;" class="nav-link navbar-font font-custome" href="<?php echo e(route('home')); ?>#subcription">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <?php if(auth('vendor')->check()): ?>
                            <div class="btn-group dropdown">
                                <a href="<?php echo e(url('/vendor-panel')); ?>" style="color: #697279;" class="nav-link navbar-font font-auth"><i class="far fa-user"></i> Hi, <?php echo e(\App\CentralLogics\Helpers::get_loggedin_user()->f_name); ?></a>
                                <a type="button" class="btn btn-light dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-arrow-down"></i>
                                </a>
                                <div class="dropdown-menu">
                                  <!-- Dropdown menu links -->
                                  <div class="dropdown-item-text">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img"
                                                 onerror="this.src='<?php echo e(URL::asset('assets/admin/img/160x160/img1.jpg')); ?>'"
                                                 src="<?php echo e(URL::asset('storage/vendor')); ?>/<?php echo e(\App\CentralLogics\Helpers::get_loggedin_user()->image); ?>"
                                                 alt="Owner image">
                                        </div>
                                        <div class="media-body">
                                            <span class="card-title h5"><?php echo e(\App\CentralLogics\Helpers::get_loggedin_user()->f_name); ?></span>
                                            <span class="card-text"><?php echo e(\App\CentralLogics\Helpers::get_loggedin_user()->email); ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="<?php echo e(route('vendor.profile.view')); ?>">
                                    <span class="text-truncate pr-2" title="Settings"><?php echo e(__('messages.settings')); ?></span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="javascript:" onclick="Swal.fire({
                                    title: 'Do you want to logout?',
                                    showDenyButton: true,
                                    showCancelButton: true,
                                    confirmButtonColor: '#FC6A57',
                                    cancelButtonColor: '#363636',
                                    confirmButtonText: `Yes`,
                                    denyButtonText: `Don't Logout`,
                                    }).then((result) => {
                                    if (result.value) {
                                    location.href='<?php echo e(route('vendor.auth.logout')); ?>';
                                    } else{
                                    Swal.fire('Canceled', '', 'info')
                                    }
                                    })">
                                    <span class="text-truncate pr-2" title="Sign out"><?php echo e(__('messages.sign_out')); ?></span>
                                </a>
                                </div>
                            </div>
                            <?php else: ?>
                                <a data-target="#custom-login-wrapper" href="#custom-login-wrapper" data-toggle="modal" style="color: #697279;" class="nav-link navbar-font font-auth"><i class="fas fa-user"></i> Login Or Register </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>


<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <?php ($restaurant_data=\App\CentralLogics\Helpers::get_restaurant_data()); ?>
        <div class="sidebar-heading border-bottom bg-light">
            <a class="navbar-brand" target="_blank" href="<?php echo e(route('restaurant-list', $restaurant_data->slug)); ?>" aria-label="Front" style="padding-top: 0!important;padding-bottom: 0!important; color:rgba(0, 0, 0, 0.829); font-weight: bolder;">
                <img class="navbar-brand-logo"
                     style="border-radius: 50%;height: 55px;width: 55px!important; border: 5px solid #80808012"
                     onerror="this.src='<?php echo e(URL::asset('assets/admin/img/160x160/img2.jpg')); ?>'"
                     src="<?php echo e(URL::asset('storage/restaurant/'.$restaurant_data->logo)); ?>"
                     alt="Logo">
                <?php echo e(\Illuminate\Support\Str::limit($restaurant_data->name,15)); ?>

            </a>
        </div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel')?'active':''); ?>" href="<?php echo e(route('vendor.dashboard')); ?>"><i class="fas fa-chalkboard"></i> Home</a>

            
            <div class="dropright">
                <a class="list-group-item list-group-item-action list-group-item-light dropright p-3 <?php echo e(Request::is('vendor-panel/food*')?'active':''); ?>" href="<?php echo e(route('vendor.food.list')); ?>" ><i class="fas fa-chart-pie"></i> Menu
                
                </a>
            </div>
            

            
            <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('order')): ?>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/order*')?'active':''); ?>" href="<?php echo e(route('vendor.order.list',['all'])); ?>"><i class="fas fa-shopping-cart"></i> Order</a>
            <?php endif; ?>
            
            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/shop/payment')?'active':''); ?>" href="<?php echo e(route('vendor.shop.edit-payment')); ?>"> <i class="fas fa-money-bill"></i> Payment Method</a>
            
            
            <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('my_shop')): ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/table')?'active':''); ?>" href="<?php echo e(route('vendor.table.index')); ?>"> <i class="fas fa-table"></i></i> Restaurant Table </a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/qr/qr')?'active':''); ?>" href="<?php echo e(route('vendor.qr.index')); ?>"> <i class="fas fa-qrcode"></i> QR Code Design</a>
            <?php endif; ?>
            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/chat')?'active':''); ?>" href="<?php echo e(route('vendor.chat.index')); ?>"> <i class="far fa-comments"></i> Chat Box</a>
            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/language')?'active':''); ?>" href="<?php echo e(route('vendor.language.index')); ?>"> <i class="fas fa-language"></i> Language</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/customer/list')?'active':''); ?>" href="<?php echo e(route('vendor.customer.list')); ?>"> <i class="far fa-user-circle"></i> Customer</a>
            

            
            
            

            
            
            

            
            <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('wallet')): ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/wallet*')?'active':''); ?>" href="<?php echo e(route('vendor.wallet.index')); ?>"> <i class="far fa-credit-card"></i> Withdrawals</a>
            <?php endif; ?>
            

            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/report*')?'active':''); ?>" href="<?php echo e(route('vendor.report.dashboard')); ?>"> <i class="fas fa-chart-pie"></i> Report</a>
            

            
            <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('employee')): ?>
            <div class="dropright">
                <a class="list-group-item list-group-item-action list-group-item-light dropright p-3 <?php echo e(Request::is('vendor-panel/employee*')?'active':''); ?>"href="<?php echo e(route('vendor.employee.list')); ?>" ><i class="far fa-user"></i> Staff
                </a>
            </div>
            <?php endif; ?>
            

            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/coupon/list')?'active':''); ?>" href="<?php echo e(route('vendor.coupon.list')); ?>"> <i class="fas fa-gift"></i> Coupon</a>
            

            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/subscription')?'active':''); ?>" href="<?php echo e(route('vendor.subscription.list')); ?>"> <i class="fas fa-money-bill-alt"></i> Subscription</a>
            

            
            <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('my_shop')): ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/reservation')?'active':''); ?>" href="<?php echo e(route('vendor.reservation.list')); ?>"> <i class="fas fa-user-times"></i> Reservation</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/shop*')?'active':''); ?>" href="<?php echo e(route('vendor.shop.view')); ?>"> <i class="fas fa-store"></i> Restaurant</a>
            
            <?php endif; ?>
            
        </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom ml-5">
            <div class="container-fluid">
                <button class="btn btn-light" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('vendor.notification.index')); ?>" style="color: #000000;" ><i class="far fa-bell"></i><span style="color: red;"><?php echo e(count(\App\CentralLogics\Helpers::get_loggedin_user()->notifications()->where('status' ,1)->get())); ?></span></a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('vendor.reservation.list')); ?>" style="color: #000000;" ><i class="far fa-question-circle"></i><span style="color: red;"><?php echo e(count(\App\Models\ReservationCustomer::where('restaurant_id', \App\CentralLogics\Helpers::get_restaurant_data()->id)->get())); ?></span></a></li>
                        <li class="dropdown">
                            <a class="nav-link" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i><?php echo e(\App\CentralLogics\Helpers::get_loggedin_user()->f_name); ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="<?php echo e(route('vendor.profile.view')); ?>">
                                    <span class="text-truncate pr-2" title="Settings"><?php echo e(__('messages.settings')); ?></span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="javascript:" onclick="Swal.fire({
                                    title: 'Do you want to logout?',
                                    showDenyButton: true,
                                    showCancelButton: true,
                                    confirmButtonColor: '#FC6A57',
                                    cancelButtonColor: '#363636',
                                    confirmButtonText: `Yes`,
                                    denyButtonText: `Don't Logout`,
                                    }).then((result) => {
                                    if (result.value) {
                                    location.href='<?php echo e(route('vendor.auth.logout')); ?>';
                                    } else{
                                    Swal.fire('Canceled', '', 'info')
                                    }
                                    })">
                                    <span class="text-truncate pr-2" title="Sign out"><?php echo e(__('messages.sign_out')); ?></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>

<!-- End Footer -->

<div class="modal fade" id="popup-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <center>
                            <h2 style="color: rgba(96,96,96,0.68)">
                                <i class="tio-shopping-cart-outlined"></i> You have new order, Check Please.
                            </h2>
                            <hr>
                            <button onclick="check_order()" class="btn btn-primary">Ok, let me check</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========== END MAIN CONTENT ========== -->

<footer class="dark-bg mt-6">
    <div class="container-fluid py-5">
        <div class="row" style="font-size: 10px;">
            <div class="col-lg-8 col-md-4 mb-lg-0" style="font-size: 12px;">
                <ul class="list-inline">
                    <li class="list-inline-item mr-5">
                        <a href="https://mydiningplace.com/contact-us/" target="_blank" class="mb-4 text-white hover-red">Contact Us</a>
                    </li>
                    <li class="list-inline-item mr-5">
                        <a href="https://mydiningplace.com/help-center/" target="_blank" class="mb-4 text-white hover-red">Help Center</a>
                    </li>
                    <li class="list-inline-item mr-5">
                        <a href="https://mydiningplace.com/category/career/" target="_blank" class="mb-4 text-white hover-red">Career</a>
                    </li>
                    <li class="list-inline-item mr-5">
                        <a href="https://mydiningplace.com/terms-of-use/" target="_blank" class="mb-4 text-white hover-red">Terms and Conditions</a>
                    </li>
                    <li class="list-inline-item mr-5">
                        <a href="https://mydiningplace.com/privacy-policy/" target="_blank"class="mb-4 text-white hover-red">Privacy Policy</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 mb-lg-0" style="font-size: 14px;">
                <ul class="list-inline">
                    <li class="list-inline-item mr-3"><a title="twitter"><i class="fab fa-1x fa-twitter text-white"></i></a></li>
                    <li class="list-inline-item mr-3"><a title="facebook"><i class="fab fa-1x fa-facebook-f text-white"></i></a></li>
                    <li class="list-inline-item mr-3"><a title="pinterest"><i class="fab fa-1x fa-youtube text-white"></i></a></li>
                    <li class="list-inline-item mr-3"><a title="instagram"><i class="fab fa-1x fa-instagram text-white"></i></a></li>
                </ul>
            </div>
        </div>
        
        <div class="text-left" style="font-size: 12px;">
            <p class="mb-0 py-2 text-white">Copyright ?? 2020 <a href="https://mydiningplace.com/" style="color: #F67280 !important;">mydiningplace.com</a> All Rights Reserved</p>
        </div>
    </div>
</footer>

<!-- ========== END SECONDARY CONTENTS ========== -->
<script src="<?php echo e(URL::asset('assets/admin')); ?>/js/custom.js"></script>
<!-- JS Implementing Plugins -->

<!-- JS Front -->
<script src="<?php echo e(URL::asset('assets/admin')); ?>/js/vendor.min.js"></script>
<script src="<?php echo e(URL::asset('assets/admin')); ?>/js/theme.min.js"></script>
<script src="<?php echo e(URL::asset('assets/admin')); ?>/js/sweet_alert.js"></script>
<script src="<?php echo e(URL::asset('assets/admin')); ?>/js/toastr.js"></script>
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
<script>

window.addEventListener('DOMContentLoaded', event => {

// Toggle the side navigation
const sidebarToggle = document.body.querySelector('#sidebarToggle');
if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener('click', event => {
        event.preventDefault();
        document.body.classList.toggle('sb-sidenav-toggled');
        localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
    });
}

});
</script>
<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });
</script>
<script>
    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("mySidebar").style.width = "200px";
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>
<script>
    $(document).on('ready', function () {
        if ($(window).width() < 922) {
        $('#navbarul').collapse({
        toggle: false
        });
    } else {
        $('#navbarul').collapse({
        toggle: true
        });
    }

        // ONLY DEV
        // =======================================================
        if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
                .on('shown.bs.popover', function () {
                    $('.popover').last().addClass('popover-dark')
                });

            $(document).on('click', '#closeBuilderPopover', function () {
                window.localStorage.setItem('hs-builder-popover', true);
                $('#builderPopover').popover('dispose');
            });
        } else {
            $('#builderPopover').on('show.bs.popover', function () {
                return false
            });
        }
        // END ONLY DEV
        // =======================================================

        $('ul.submenu').hide();
        $('ul.nav > li, ul.submenu > li').hover(function () {
        if ($('> ul.submenu',this).length > 0) {
            $('> ul.submenu',this).stop().slideDown('slow');
        }
        },function () {
            if ($('> ul.submenu',this).length > 0) {
                $('> ul.submenu',this).stop().slideUp('slow');
            }
        });


        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
            var unfold = new HSUnfold($(this)).init();
        });


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
            new HSFormSearch($(this)).init()
        });


        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
            var select2 = $.HSCore.components.HSSelect2.init($(this));
        });


        // INITIALIZATION OF DATERANGEPICKER
        // =======================================================
        $('.js-daterangepicker').daterangepicker();

        $('.js-daterangepicker-times').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });

        var start = moment();
        var end = moment();

        function cb(start, end) {
            $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
        }

        $('#js-daterangepicker-predefined').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        $('.js-clipboard').each(function () {
            var clipboard = $.HSCore.components.HSClipboard.init(this);
        });
    });
</script>
<script>
    var order_type = 'all';
    setInterval(function () {
        $.get({
            url: '<?php echo e(route('vendor.get-restaurant-data')); ?>',
            dataType: 'json',
            success: function (response) {
                let data = response.data;
                if (data.new_pending_takeway_order > 0) {
                    order_type = 'pending_take_away'
                    playAudio();
                    $('#popup-modal').appendTo("body").modal('show');
                }
                else if(data.new_confirmed_order > 0)
                {
                    order_type = 'confirmed'
                    playAudio();
                    $('#popup-modal').appendTo("body").modal('show');
                }
            },
        });
    }, 10000);

    function check_order() {
        location.href = '<?php echo e(url('/')); ?>/vendor-panel/order/list/'+order_type;
    }

    function route_alert(route, message) {
        Swal.fire({
            title: 'Are you sure?',
            text: message,
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: 'default',
            confirmButtonColor: '#FC6A57',
            cancelButtonText: 'No',
            confirmButtonText: 'Yes',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                location.href = route;
            }
        })
    }

    function form_alert(id, message) {
        Swal.fire({
            title: 'Are you sure?',
            text: message,
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: 'default',
            confirmButtonColor: '#FC6A57',
            cancelButtonText: 'No',
            confirmButtonText: 'Yes',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $('#'+id).submit()
            }
        })
    }

    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>

<script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '1493903667659848',
        cookie     : true,
        xfbml      : true,
        version    : 'v12.0'
      });
        
      FB.AppEvents.logPageView();   
        
    };
  
    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "https://connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>
  
  <?php echo $__env->yieldContent('scripts'); ?>
<?php echo $__env->yieldPushContent('script'); ?>
<?php echo $__env->yieldPushContent('script_2'); ?>
</body>
</html>
<?php /**PATH /home/vagrant/code/diningtest/resources/views/layouts/vendor/app.blade.php ENDPATH**/ ?>