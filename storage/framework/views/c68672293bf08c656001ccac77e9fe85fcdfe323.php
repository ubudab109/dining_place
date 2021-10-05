<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('assets/landing/fontawesome/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/landing/fontawesome/css/fontawesome.min.css')); ?>">
    <!-- CSS Implementing Plugins -->
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/vendor/icon-set/style.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/theme.minc619.css?v=1.0">
    <?php echo $__env->yieldPushContent('css_or_js'); ?>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/landing')); ?>/css/normalize.css">

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
    </style>

    

    <link rel="stylesheet" href="<?php echo e(asset('assets/landing')); ?>/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/vendor/icon-set/style.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/theme.minc619.css?v=1.0">
    <?php echo $__env->yieldPushContent('css_or_js'); ?>

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
    <style>

        /* The sidebar menu */
        .sidebar {
          height: 100%; /* 100% Full-height */
          width: 0; /* 0 width - change this with JavaScript */
          position: fixed; /* Stay in place */
          z-index: 1; /* Stay on top */
          top: 0;
          left: 0;
          background-color: #111; /* Black*/
          overflow-x: hidden; /* Disable horizontal scroll */
          padding-top: 60px; /* Place content 60px from the top */
          transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
        }
        
        /* The sidebar links */
        .sidebar a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }
        
        /* When you mouse over the navigation links, change their color */
        .sidebar a:hover {
          color: #f1f1f1;
        }
        
        /* Position and style the close button (top right corner) */
        .sidebar .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        
        /* The button used to open the sidebar */
        .openbtn {
          font-size: 20px;
          cursor: pointer;
          background-color: #111;
          color: white;
          padding: 10px 15px;
          border: none;
        }
        
        .openbtn:hover {
          background-color: #444;
        }
        
        /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
        #main {
          transition: margin-left .5s; /* If you want a transition effect */
          padding: 20px;
        }
        
        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media  screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }

        

        


    </style>
    <script src="<?php echo e(asset('assets/admin')); ?>/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/toastr.css">
</head>

<body class="footer-offset">


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="loading" style="display: none;">
                <div style="position: fixed;z-index: 9999; left: 40%;top: 37% ;width: 100%">
                    <img width="200" src="<?php echo e(asset('assets/admin/img/loader.gif')); ?>">
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
                    <img  onerror="this.src='<?php echo e(asset('assets/logo_mdp.jpg')); ?>'"
                          src="<?php echo e(asset('storage/app/business/'.$logo)); ?>"
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
                                <div class="btn-group dropdown">
                                    <a href="<?php echo e(url('/vendor-panel')); ?>" style="color: #000000;" class="nav-link navbar-font"><i class="fas fa-user"></i><?php echo e(\App\CentralLogics\Helpers::get_loggedin_user()->f_name); ?></a>
                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                      <!-- Dropdown menu links -->
                                      <div class="dropdown-item-text">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-sm avatar-circle mr-2">
                                                <img class="avatar-img"
                                                     onerror="this.src='<?php echo e(asset('assets/admin/img/160x160/img1.jpg')); ?>'"
                                                     src="<?php echo e(asset('storage/app/public/vendor')); ?>/<?php echo e(\App\CentralLogics\Helpers::get_loggedin_user()->image); ?>"
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
                                <a data-target="#custom-login-wrapper" href="#custom-login-wrapper" data-toggle="modal" style="color: #000000;" class="nav-link navbar-font"><i class="fas fa-user"></i> Login Or Register </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- END ONLY DEV -->

<div class="container-fluid">
    <main id="content" role="main" class="main pointer-event">
        <div class="d-flex">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                <?php ($restaurant_data=\App\CentralLogics\Helpers::get_restaurant_data()); ?>
                <a class="navbar-brand" href="<?php echo e(route('vendor.dashboard')); ?>" aria-label="Front" style="padding-top: 0!important;padding-bottom: 0!important;">
                    <img class="navbar-brand-logo"
                         style="border-radius: 50%;height: 55px;width: 55px!important; border: 5px solid #80808012"
                         onerror="this.src='<?php echo e(asset('assets/admin/img/160x160/img2.jpg')); ?>'"
                         src="<?php echo e(asset('storage/app/public/restaurant/'.$restaurant_data->logo)); ?>"
                         alt="Logo">
                    <?php echo e(\Illuminate\Support\Str::limit($restaurant_data->name,15)); ?>

                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    
                  <li class="nav-item">
                    <a href="<?php echo e(route('vendor.dashboard')); ?>" class="nav-link <?php echo e(Request::is('vendor-panel')?'active':''); ?>" aria-current="page">
                      <i class="tio-home-vs-1-outlined nav-icon"></i>
                      <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                          <?php echo e(__('messages.dashboard')); ?>

                      </span>
                    </a>
                  </li>
                  
                  <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('order')): ?>
                  <li class="nav-item">
                    <a href="#" class="nav-link link-dark <?php echo e(Request::is('vendor-panel/order*')?'active':''); ?>">
                      <i class="tio-shopping-cart nav-icon"></i>
                      <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                        <?php echo e(__('messages.orders')); ?>

                      </span>
                    </a>
                    <ul class="submenu" style="display: <?php echo e(Request::is('vendor-panel/order*')?'block':'none'); ?>">
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/order/list/pending_take_away')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('vendor.order.list',['pending_take_away'])); ?>" title="<?php echo e(__('messages.pending')); ?>(<?php echo e(__('messages.take_away')); ?>)">
                                <span class="text-truncate">
                                    <?php echo e(__('messages.pending')); ?> (<?php echo e(__('messages.take_away')); ?>)
                                        <span class="badge badge-soft-success badge-pill ml-1">
                                        <?php echo e(\App\Models\Order::where(['order_status'=>'pending','restaurant_id'=>\App\CentralLogics\Helpers::get_restaurant_id(), 'order_type'=>'take_away'])->count()); ?>

                                    </span>
                                </span>
                            </a>
                        </li>

                        <li class="nav-item <?php echo e(Request::is('vendor-panel/order/list/confirmed')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('vendor.order.list',['confirmed'])); ?>" title="<?php echo e(__('messages.confirmed')); ?>">
                                <span class="text-truncate">
                                    <?php echo e(__('messages.confirmed')); ?>

                                        <span class="badge badge-soft-success badge-pill ml-1">
                                        <?php echo e(\App\Models\Order::whereIn('order_status',['confirmed', 'accepted'])->whereNotNull('confirmed')->where('restaurant_id', \App\CentralLogics\Helpers::get_restaurant_id())->count()); ?>

                                    </span>
                                </span>
                            </a>
                        </li>

                        <li class="nav-item <?php echo e(Request::is('vendor-panel/order/list/cooking')?'active':''); ?>">
                            <a class="nav-link" href="<?php echo e(route('vendor.order.list',['cooking'])); ?>" title="<?php echo e(__('messages.cooking')); ?>">
                                <span class="text-truncate">
                                    <?php echo e(__('messages.cooking')); ?>

                                    <span class="badge badge-info badge-pill ml-1">
                                        <?php echo e(\App\Models\Order::where(['order_status'=>'processing', 'restaurant_id'=>\App\CentralLogics\Helpers::get_restaurant_id()])->count()); ?>

                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/order/list/ready_for_delivery')?'active':''); ?>">
                            <a class="nav-link" href="<?php echo e(route('vendor.order.list',['ready_for_delivery'])); ?>" title="<?php echo e(__('messages.ready_for_delivery')); ?>">
                                <span class="text-truncate">
                                    <?php echo e(__('messages.ready_for_delivery')); ?>

                                    <span class="badge badge-info badge-pill ml-1">
                                        <?php echo e(\App\Models\Order::where(['order_status'=>'handover', 'restaurant_id'=>\App\CentralLogics\Helpers::get_restaurant_id()])->count()); ?>

                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/order/list/food_on_the_way')?'active':''); ?>">
                            <a class="nav-link" href="<?php echo e(route('vendor.order.list',['food_on_the_way'])); ?>" title="<?php echo e(__('messages.foods_on_the_way')); ?>">
                                <span class="text-truncate">
                                    <?php echo e(__('messages.food_on_the_way')); ?>

                                    <span class="badge badge-info badge-pill ml-1">
                                        <?php echo e(\App\Models\Order::where(['order_status'=>'picked_up', 'restaurant_id'=>\App\CentralLogics\Helpers::get_restaurant_id()])->count()); ?>

                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/order/list/delivered')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('vendor.order.list',['delivered'])); ?>" title="">
                                <span class="text-truncate">
                                    <?php echo e(__('messages.delivered')); ?>

                                        <span class="badge badge-success badge-pill ml-1">
                                        <?php echo e(\App\Models\Order::where(['order_status'=>'delivered','restaurant_id'=>\App\CentralLogics\Helpers::get_restaurant_id()])->count()); ?>

                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/order/list/returned')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('vendor.order.list',['returned'])); ?>" title="">
                                <span class="text-truncate">
                                    <?php echo e(__('messages.returned')); ?>

                                        <span class="badge badge-soft-danger bg-light badge-pill ml-1">
                                        <?php echo e(\App\Models\Order::where(['order_status'=>'returned','restaurant_id'=>\App\CentralLogics\Helpers::get_restaurant_id()])->count()); ?>

                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/order/list/scheduled')?'active':''); ?>">
                            <a class="nav-link" href="<?php echo e(route('vendor.order.list',['scheduled'])); ?>" title="<?php echo e(__('messages.scheduled')); ?>">
                                <span class="text-truncate">
                                    <?php echo e(__('messages.scheduled')); ?>

                                    <span class="badge badge-info badge-pill ml-1">
                                        <?php echo e(\App\Models\Order::where('restaurant_id',\App\CentralLogics\Helpers::get_restaurant_id())->Scheduled()->count()); ?>

                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/order/list/all')?'active':''); ?>">
                            <a class="nav-link" href="<?php echo e(route('vendor.order.list',['all'])); ?>" title="<?php echo e(__('messages.all')); ?> <?php echo e(__('messages.order')); ?>">
                                <span class="text-truncate">
                                    <?php echo e(__('messages.all')); ?>

                                    <span class="badge badge-info badge-pill ml-1">
                                        <?php echo e(\App\Models\Order::where('restaurant_id', \App\CentralLogics\Helpers::get_restaurant_id())->where(function($q){
                                            $q->whereNotIn('order_status',['pending','failed','canceled', 'refund_requested', 'refunded'])->orWhere(function($query){
                                                $query->where('order_status','pending')->where('order_type', 'take_away');
                                            });
                                        })->count()); ?>

                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                  </li>
                  <?php endif; ?>
                  <!-- AddOn -->
                  <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('addon')): ?>
                  <li class="nav-item">
                      <a class="nav-link <?php echo e(Request::is('vendor-panel/addon*')?'active':''); ?>"
                          href="<?php echo e(route('vendor.addon.add-new')); ?>" title="<?php echo e(__('messages.addons')); ?>"
                      >
                          <i class="tio-add-circle-outlined nav-icon"></i>
                          <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                              <?php echo e(__('messages.addons')); ?>

                          </span>
                      </a>
                  </li>
                  <?php endif; ?>
                  
                  <li class="nav-item">
                    <a href="#" class="nav-link link-dark <?php echo e(Request::is('vendor-panel/food*')?'active':''); ?>">
                        <i class="tio-premium-outlined nav-icon"></i>
                        <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                            <?php echo e(__('messages.foods')); ?>

                        </span>
                    </a>
                    <ul class="submenu" style="display: <?php echo e(Request::is('vendor-panel/order*')?'block':'none'); ?>">
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/food/add-new')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('vendor.food.add-new')); ?>"
                                title="add new food">
                                <span
                                    class="text-truncate"><?php echo e(__('messages.add')); ?> <?php echo e(__('messages.new')); ?></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/food/list')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('vendor.food.list')); ?>" title="food list">
                                <span class="text-truncate"><?php echo e(__('messages.list')); ?></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/food/bulk-import')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('vendor.food.bulk-import')); ?>"
                                title="<?php echo e(__('messages.bulk_import')); ?>">
                                <span class="text-truncate text-capitalize"><?php echo e(__('messages.bulk_import')); ?></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/food/bulk-export')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('vendor.food.bulk-export-index')); ?>"
                                title="<?php echo e(__('messages.bukl_export')); ?>">
                                <span class="text-truncate text-capitalize"><?php echo e(__('messages.bulk_export')); ?></span>
                            </a>
                        </li>
                    </ul>
                  </li>

                  
                  <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('employee')): ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-dark <?php echo e(Request::is('vendor-panel/employee*')?'active':''); ?>">
                            <i class="tio-user nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                Staff
                            </span>
                        </a>
                        <ul class="submenu" style="display: <?php echo e(Request::is('vendor-panel/employee*')?'block':'none'); ?>">
                            <li class="nav-item <?php echo e(Request::is('vendor-panel/employee/add-new')?'active':''); ?>">
                                <a class="nav-link " href="<?php echo e(route('vendor.employee.add-new')); ?>">
                                    <span
                                        class="text-truncate"><?php echo e(__('messages.add')); ?> <?php echo e(__('messages.new')); ?></span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(Request::is('vendor-panel/employee/list')?'active':''); ?>">
                                <a class="nav-link " href="<?php echo e(route('vendor.employee.list')); ?>" title="food list">
                                    <span class="text-truncate"><?php echo e(__('messages.list')); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>

                    
                    <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('restaurant_setup')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('vendor-panel/business-settings/restaurant-setup')?'active':''); ?>" href="<?php echo e(route('vendor.business-settings.restaurant-setup')); ?>"
                        >
                            <span class="tio-settings nav-icon"></span>
                            <span
                                class="text-truncate"><?php echo e(__('messages.restaurant')); ?> <?php echo e(__('messages.config')); ?></span>
                        </a>
                    </li>
                    <?php endif; ?>
                    
                    <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('my_shop')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('vendor/shop*')?'active':''); ?>" href="<?php echo e(route('vendor.shop.view')); ?>" 
                        >
                            <i class="tio-home nav-icon"></i>
                            <span
                                class="text-truncate">My Restaurant</span>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
                <hr>
              </div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- Content -->
    </main>
   
</div>
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
                                        onerror="this.src='<?php echo e(asset('assets/admin/img/160x160/img2.jpg')); ?>'"
                                        src="<?php echo e(asset('storage/app/business/'.$logo)); ?>"
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

<!-- ========== END SECONDARY CONTENTS ========== -->
<script src="<?php echo e(asset('assets/admin')); ?>/js/custom.js"></script>
<!-- JS Implementing Plugins -->

<!-- JS Front -->
<script src="<?php echo e(asset('assets/admin')); ?>/js/vendor.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/js/theme.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/js/sweet_alert.js"></script>
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
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });
</script>
<script>
    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>
<script>
    $(document).on('ready', function () {
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
    var audio = document.getElementById("myAudio");

    function playAudio() {
        audio.play();
    }

    function pauseAudio() {
        audio.pause();
    }
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
</script>
<?php echo $__env->yieldPushContent('script'); ?>
<?php echo $__env->yieldPushContent('script_2'); ?>
</body>
</html>
<?php /**PATH /home/vagrant/code/diningtest/resources/views/layouts/vendor/app.blade.php ENDPATH**/ ?>