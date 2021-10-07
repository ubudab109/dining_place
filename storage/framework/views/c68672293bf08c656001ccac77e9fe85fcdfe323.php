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

        .dark-bg {
            background-color: #161616;
        }
    </style>

    
<<<<<<< Updated upstream

    <link rel="stylesheet" href="<?php echo e(asset('assets/landing')); ?>/css/main.css">
=======
    <link href="<?php echo e(asset('assets/style-custom.css')); ?>" rel="stylesheet"/>
    
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/landing')); ?>/css/main.css">
>>>>>>> Stashed changes
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/vendor/icon-set/style.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/css/theme.minc619.css?v=1.0">
    <?php echo $__env->yieldPushContent('css_or_js'); ?>
<<<<<<< Updated upstream

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
=======
    <script src="<?php echo e(URL::asset('assets/admin')); ?>/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/admin')); ?>/css/toastr.css">
>>>>>>> Stashed changes
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
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

<header id="headerMain">
    <div class="navbar-div bg-color-primary" style="background-color: #FFFFFF;border-style: solid;border-width: 0px 0px 01px 0px;border-color: #F67280;">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                    <?php ($logo=\App\CentralLogics\Helpers::get_settings('logo')); ?>
                    <img  onerror="this.src='<?php echo e(asset('assets/logo_mdp.jpg')); ?>'"
                          src="<?php echo e(asset('storage/business/'.$logo)); ?>"
                          style="height:auto;width:100%; max-width:200px; max-height:60px">
                </a>
                
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
                                    <a href="<?php echo e(url('/vendor-panel')); ?>" style="color: #000000;" class="nav-link navbar-font"><i class="fas fa-user"></i> Hi, <?php echo e(\App\CentralLogics\Helpers::get_loggedin_user()->f_name); ?></a>
                                    <a type="button" class="btn btn-light dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-arrow-down"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                      <!-- Dropdown menu links -->
                                      <div class="dropdown-item-text">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-sm avatar-circle mr-2">
                                                <img class="avatar-img"
                                                     onerror="this.src='<?php echo e(asset('assets/admin/img/160x160/img1.jpg')); ?>'"
                                                     src="<?php echo e(asset('storage/vendor')); ?>/<?php echo e(\App\CentralLogics\Helpers::get_loggedin_user()->image); ?>"
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

<<<<<<< Updated upstream
<!-- END ONLY DEV -->

<div class="container-fluid">
    
    <main id="content" role="main" class="main pointer-event">
        <div class="d-flex">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light collapse" style="width: 280px;">
                <?php ($restaurant_data=\App\CentralLogics\Helpers::get_restaurant_data()); ?>
                <a class="navbar-brand" target="_blank" href="<?php echo e(route('restaurant-list', $restaurant_data->slug)); ?>" aria-label="Front" style="padding-top: 0!important;padding-bottom: 0!important;">
                    <img class="navbar-brand-logo"
                         style="border-radius: 50%;height: 55px;width: 55px!important; border: 5px solid #80808012"
                         onerror="this.src='<?php echo e(asset('assets/admin/img/160x160/img2.jpg')); ?>'"
                         src="<?php echo e(asset('storage/restaurant/'.$restaurant_data->logo)); ?>"
                         alt="Logo">
                    <?php echo e(\Illuminate\Support\Str::limit($restaurant_data->name,15)); ?>
=======
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
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel')?'active':''); ?>" href="<?php echo e(route('vendor.dashboard')); ?>"><i class="fas fa-chalkboard"></i> Dashboard</a>
>>>>>>> Stashed changes

            
            <div class="dropright">
                <a class="list-group-item list-group-item-action list-group-item-light dropright p-3 <?php echo e(Request::is('vendor-panel/food*')?'active':''); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#!" ><i class="fas fa-chart-pie"></i> Menu
                
<<<<<<< Updated upstream
                <hr>
                <ul class="nav nav-pills flex-column mb-auto" id="navbarul">
                    
                    <li class="nav-item">
                        <a href="<?php echo e(route('vendor.dashboard')); ?>" class="nav-link <?php echo e(Request::is('vendor-panel')?'active':''); ?>" aria-current="page">
                            <i class="tio-home-vs-1-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                Dashboard
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
                        <li class="nav-item <?php echo e(Request::is('vendor-panel/order/create')?'active':''); ?>">
                            <a class="nav-link" href="<?php echo e(route('vendor.order.list',['all'])); ?>" title="<?php echo e(__('messages.all')); ?> <?php echo e(__('messages.order')); ?>">
                                <span class="text-truncate">
                                    Create New
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

                    
                    <li class="nav-item">
                        <a href="<?php echo e(route('vendor.qr.index')); ?>" class="nav-link <?php echo e(Request::is('vendor-panel/qr/qr')?'active':''); ?>" aria-current="page">
                            <i class="fas fa-qrcode"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                QR Code
                            </span>
                        </a>
                    </li>

                    
                    <li class="nav-item">
                        <a href="<?php echo e(route('vendor.table.index')); ?>" class="nav-link <?php echo e(Request::is('vendor-panel/table')?'active':''); ?>" aria-current="page">
                            <i class="fas fa-table"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                Restaurant Table
                            </span>
                        </a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a href="<?php echo e(route('vendor.reservation.list')); ?>" class="nav-link <?php echo e(Request::is('vendor-panel/reservation')?'active':''); ?>" aria-current="page">
                            <i class="fas fa-table"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                Reservation
                            </span>
                        </a>
                    </li>
                    <?php endif; ?>
=======
                </a>
                <ul class="dropdown-menu">
                    <li><a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo e(route('vendor.food.add-new')); ?>"><?php echo e(__('messages.add')); ?> <?php echo e(__('messages.new')); ?></a></li>
                    <li><a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo e(route('vendor.food.list')); ?>">List</a></li>
                    <li><a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo e(route('vendor.food.bulk-import')); ?>"><?php echo e(__('messages.bulk_import')); ?></a></li>
                    <li><a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo e(route('vendor.food.bulk-export-index')); ?>"><?php echo e(__('messages.bulk_export')); ?></a></li>
>>>>>>> Stashed changes
                </ul>
            </div>
            

            
            <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('order')): ?>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/order*')?'active':''); ?>" href="<?php echo e(route('vendor.order.list',['all'])); ?>"><i class="fas fa-shopping-cart"></i> Order</a>
            <?php endif; ?>
            
            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/shop/payment')?'active':''); ?>" href="<?php echo e(route('vendor.shop.edit-payment')); ?>"> <i class="fas fa-money-bill"></i> Payment Method</a>
            
            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/qr/qr')?'active':''); ?>" href="<?php echo e(route('vendor.qr.index')); ?>"> <i class="fas fa-qrcode"></i> QR Code Design</a>
            

            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/language')?'active':''); ?>" href="<?php echo e(route('vendor.language.index')); ?>"> <i class="fas fa-language"></i> Language</a>
            

            
            <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('addon')): ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/addon*')?'active':''); ?>" href="<?php echo e(route('vendor.addon.add-new')); ?>"> <i class="fas fa-puzzle-piece"></i> <?php echo e(__('messages.addons')); ?></a>
            <?php endif; ?>
            

            
            <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('restaurant_setup')): ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/business-settings/restaurant-setup')?'active':''); ?>" href="<?php echo e(route('vendor.business-settings.restaurant-setup')); ?>"> <i class="fas fa-cogs"></i> Settings</a>
            <?php endif; ?>
            

            
            <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('wallet')): ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/wallet*')?'active':''); ?>" href="<?php echo e(route('vendor.wallet.index')); ?>"> <i class="far fa-credit-card"></i> Withdrawals</a>
            <?php endif; ?>
            

            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/report*')?'active':''); ?>" href="<?php echo e(route('vendor.report.dashboard')); ?>"> <i class="fas fa-chart-pie"></i> Report</a>
            

            
            <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('employee')): ?>
            <div class="dropright">
                <a class="list-group-item list-group-item-action list-group-item-light dropright p-3 <?php echo e(Request::is('vendor-panel/employee*')?'active':''); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#!" ><i class="far fa-user"></i> Staff
                
                </a>
                <ul class="dropdown-menu">
                    <li><a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo e(route('vendor.employee.add-new')); ?>"><?php echo e(__('messages.add')); ?> <?php echo e(__('messages.new')); ?></a></li>
                    <li><a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo e(route('vendor.employee.list')); ?>">List</a></li>
                </ul>
            </div>
            <?php endif; ?>
            

            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/coupon/list')?'active':''); ?>" href="<?php echo e(route('vendor.coupon.list')); ?>"> <i class="fas fa-gift"></i> Coupon</a>
            

            
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/subscription')?'active':''); ?>" href="<?php echo e(route('vendor.subscription.list')); ?>"> <i class="fas fa-money-bill-alt"></i> Subscription</a>
            

            
            <?php if(\App\CentralLogics\Helpers::employee_module_permission_check('my_shop')): ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/reservation')?'active':''); ?>" href="<?php echo e(route('vendor.reservation.list')); ?>"> <i class="fas fa-user-times"></i> Reservation</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/shop*')?'active':''); ?>" href="<?php echo e(route('vendor.shop.view')); ?>"> <i class="fas fa-store"></i> Restaurant</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 <?php echo e(Request::is('vendor-panel/table')?'active':''); ?>" href="<?php echo e(route('vendor.table.index')); ?>"> <i class="fas fa-table"></i></i> Restaurant Table </a>
            <?php endif; ?>
            
        </div>
<<<<<<< Updated upstream
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
                                        src="<?php echo e(asset('storage/business/'.$logo)); ?>"
                                        style="max-width: 200px;max-height: 75px">
=======
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
>>>>>>> Stashed changes
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

<footer class="dark-bg">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-2 col-md-6 mb-4">
                <a href="https://mydiningplace.com/contact-us/" target="_blank" class="text-uppercase font-weight-bold mb-4 text-white">Contact Us</a>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <a href="https://mydiningplace.com/help-center/" target="_blank" class="text-uppercase font-weight-bold mb-4 text-white">Help Center</a>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <a href="https://mydiningplace.com/category/career/" target="_blank" class="text-uppercase font-weight-bold mb-4 text-white">Career</a>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <a href="https://mydiningplace.com/terms-of-use/" target="_blank" class="text-uppercase font-weight-bold mb-4 text-white">Terms and Conditions</a>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <a href="https://mydiningplace.com/privacy-policy/" target="_blank"class="text-uppercase font-weight-bold mb-4 text-white">Privacy Policy</a>
            </div>
            <div class="col-lg-2 col-md-4 mb-lg-0">
                <ul class="list-inline">
                    <li class="list-inline-item"><a title="twitter"><i class="fab fa-1x fa-twitter text-white"></i></a></li>
                    <li class="list-inline-item"><a title="facebook"><i class="fab fa-1x fa-facebook-f text-white"></i></a></li>
                    <li class="list-inline-item"><a title="instagram"><i class="fab fa-1x fa-instagram text-white"></i></a></li>
                    <li class="list-inline-item"><a title="pinterest"><i class="fab fa-1x fa-youtube text-white"></i></a></li>
                    <li class="list-inline-item"><a title="vimeo"><i class="fab fa-1x fa-google text-white"></i></a></li>
                </ul>
            </div>
        </div>
        
        <div class="text-left">
            <p class="mb-0 py-2 text-white">Copyright © 2020 <a href="https://mydiningplace.com/" style="color: #F67280 !important;">mydiningplace.com</a> All Rights Reserved</p>
        </div>
    </div>
</footer>

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