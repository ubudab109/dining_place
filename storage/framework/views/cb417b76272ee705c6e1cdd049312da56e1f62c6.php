<style>
    .nav-sub{
        background: #334257!important;
    }
    .navbar-vertical-content{
        background-color: #fff !important;
    }
    .navbar-vertical-content a{
        color: #000 !important;
    }
    .navbar-vertical-content .nav-item .nav-subtitle{
        color: rgb(22, 22, 22) !important;
    }
    .navbar .active > ul > li,
    .navbar > ul > li,
    .nav-sub {
        background-color: #fff !important;
    }
    .navbar .active,
    .navbar .active > ul > li.active {
        background-color: #f67280 !important;
    }
    
    .navbar .active a{
        border-left-color:transparent !important;
    }
    ul.navbar-nav li{
        border-bottom: 1px solid #e0e0e054 !important;
    }
    .nav-tabs .nav-item :hover{
        background-color: #f67280 !important;
    }
</style>

<div id="sidebarMain" class="d-none">
    <aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
            <div class="navbar-brand-wrapper justify-content-between">
                <!-- Logo -->
                <?php ($restaurant_logo=\App\Models\BusinessSetting::where(['key'=>'logo'])->first()->value); ?>
                <a class="navbar-brand" href="<?php echo e(route('admin.dashboard')); ?>" aria-label="Front">
                    <img class="navbar-brand-logo" style="max-height: 55px; border-radius: 8px;max-width: 100%!important;"
                         onerror="this.src='<?php echo e(asset('assets/logo_mdp.jpg')); ?>'"
                         src="<?php echo e(asset('storage/app/public/business/'.$restaurant_logo)); ?>"
                         alt="Logo">
                    <img class="navbar-brand-logo-mini" style="max-height: 55px; border-radius: 8px;max-width: 100%!important;"
                         onerror="this.src='<?php echo e(asset('assets/logo_mdp.jpg')); ?>'"
                         src="<?php echo e(asset('storage/app/public/business/'.$restaurant_logo)); ?>" alt="Logo">
                </a>
                <!-- End Logo -->

                <!-- Navbar Vertical Toggle -->
                <button type="button"
                        class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                    <i class="tio-clear tio-lg"></i>
                </button>
                <!-- End Navbar Vertical Toggle -->
            </div>

            <!-- Content -->
            <div class="navbar-vertical-content" style="background-color: #334257;">
                <ul class="navbar-nav navbar-nav-lg nav-tabs">
                    <!-- Dashboards -->
                    <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin')?'show':''); ?>">
                        <a class="js-navbar-vertical-aside-menu-link nav-link"
                           href="<?php echo e(route('admin.dashboard')); ?>" title="<?php echo e(__('messages.dashboard')); ?>">
                            <i class="tio-home-vs-1-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                <?php echo e(__('messages.dashboard')); ?>

                            </span>
                        </a>
                    </li>
                    <!-- End Dashboards -->

                    <!-- Orders -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('order')): ?>
                        <li class="nav-item">
                            <small
                                class="nav-subtitle"><?php echo e(__('messages.order')); ?> <?php echo e(__('messages.section')); ?></small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/order*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                               href="javascript:" title="<?php echo e(__('messages.order')); ?>">
                                <i class="tio-shopping-cart nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    <?php echo e(__('messages.orders')); ?>

                                </span>
                            </a>
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: <?php echo e(Request::is('admin/order*')?'block':'none'); ?>">
                                <li class="nav-item <?php echo e(Request::is('admin/order/list/pending')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.order.list',['pending'])); ?>"
                                       title="<?php echo e(__('messages.pending')); ?> <?php echo e(__('messages.orders')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            <?php echo e(__('messages.pending')); ?>

                                            <span class="badge badge-soft-info badge-pill ml-1">
                                                <?php echo e(\App\Models\Order::Pending()->count()); ?>

                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li class="nav-item <?php echo e(Request::is('admin/order/list/accepted')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.order.list',['accepted'])); ?>"
                                       title="<?php echo e(__('messages.acceptedbyDM')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                        <?php echo e(__('messages.accepted')); ?>

                                            <span class="badge badge-soft-success badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::AccepteByDeliveryman()->count()); ?>

                                        </span>
                                    </span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/order/list/processing')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.order.list',['processing'])); ?>"
                                       title="<?php echo e(__('messages.preparingInRestaurants')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            <?php echo e(__('messages.processing')); ?>

                                                <span class="badge badge-warning badge-pill ml-1">
                                                <?php echo e(\App\Models\Order::Preparing()->count()); ?>

                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/order/list/food_on_the_way')?'active':''); ?>">
                                    <a class="nav-link text-capitalize"
                                       href="<?php echo e(route('admin.order.list',['food_on_the_way'])); ?>"
                                       title="<?php echo e(__('messages.foodOnTheWay')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            <?php echo e(__('messages.foodOnTheWay')); ?>

                                                <span class="badge badge-warning badge-pill ml-1">
                                                <?php echo e(\App\Models\Order::FoodOnTheWay()->count()); ?>

                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/order/list/delivered')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.order.list',['delivered'])); ?>"
                                       title="<?php echo e(__('messages.delivered')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                        <?php echo e(__('messages.delivered')); ?>

                                            <span class="badge badge-success badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::Delivered()->count()); ?>

                                        </span>
                                    </span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/order/list/canceled')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.order.list',['canceled'])); ?>"
                                       title="<?php echo e(__('messages.canceled')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                        <?php echo e(__('messages.canceled')); ?>

                                            <span class="badge badge-soft-warning bg-light badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::Canceled()->count()); ?>

                                        </span>
                                    </span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/order/list/failed')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.order.list',['failed'])); ?>"
                                       title="<?php echo e(__('messages.payment')); ?> <?php echo e(__('messages.failed')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate text-capitalize">
                                        <?php echo e(__('messages.payment')); ?> <?php echo e(__('messages.failed')); ?>

                                            <span class="badge badge-soft-danger bg-light badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::failed()->count()); ?>

                                        </span>
                                    </span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/order/list/refunded')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.order.list',['refunded'])); ?>"
                                       title="<?php echo e(__('messages.refunded')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                        <?php echo e(__('messages.refunded')); ?>

                                            <span class="badge badge-soft-danger bg-light badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::Refunded()->count()); ?>

                                        </span>
                                    </span>
                                    </a>
                                </li>

                                <li class="nav-item <?php echo e(Request::is('admin/order/list/scheduled')?'active':''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('admin.order.list',['scheduled'])); ?>"
                                       title="<?php echo e(__('messages.scheduled')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                        <?php echo e(__('messages.scheduled')); ?>

                                        <span class="badge badge-info badge-pill ml-1">
                                            <?php echo e(\App\Models\Order::Scheduled()->count()); ?>

                                        </span>
                                    </span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/order/list/all')?'active':''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('admin.order.list',['all'])); ?>"
                                       title="<?php echo e(__('messages.all')); ?> <?php echo e(__('messages.orders')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            <?php echo e(__('messages.all')); ?>

                                            <span class="badge badge-info badge-pill ml-1">
                                                <?php echo e(\App\Models\Order::count()); ?>

                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Order dispachment -->
                        
                        <!-- Order dispachment End-->
                    <?php endif; ?>
                <!-- End Orders -->

                    <!-- Restaurant -->
                    <li class="nav-item">
                        <small class="nav-subtitle"
                               title="<?php echo e(__('messages.restaurant')); ?> <?php echo e(__('messages.section')); ?>"><?php echo e(__('messages.restaurant')); ?> <?php echo e(__('messages.management')); ?></small>
                        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                    </li>

                    <?php if(\App\CentralLogics\Helpers::module_permission_check('zone')): ?>
                        
                    <?php endif; ?>
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('restaurant')): ?>
                    <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/vendor*')?'active':''); ?>">
                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                            href="javascript:" title="<?php echo e(__('messages.vendor')); ?>"
                        >
                            <i class="tio-filter-list nav-icon"></i>
                            <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.restaurants')); ?></span>
                        </a>
                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                            style="display: <?php echo e(Request::is('admin/vendor*')?'block':'none'); ?>">
                            <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/vendor/add')?'active':''); ?>">
                                <a class="js-navbar-vertical-aside-menu-link nav-link"
                                href="<?php echo e(route('admin.vendor.add')); ?>"
                                title="<?php echo e(__('messages.register')); ?> <?php echo e(__('messages.restaurant')); ?>"
                                >
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                        <?php echo e(__('messages.add')); ?> <?php echo e(__('messages.restaurant')); ?>

                                    </span>
                                </a>
                            </li>

                            <li class="navbar-item <?php echo e(Request::is('admin/vendor/list')?'active':''); ?>">
                                <a class="js-navbar-vertical-aside-menu-link nav-link"
                                href="<?php echo e(route('admin.vendor.list')); ?>"
                                title="<?php echo e(__('messages.restaurant')); ?> <?php echo e(__('messages.list')); ?>"
                                >
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span
                                        class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.restaurants')); ?> <?php echo e(__('list')); ?></span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(Request::is('admin/vendor/bulk-import')?'active':''); ?>">
                                <a class="nav-link " href="<?php echo e(route('admin.vendor.bulk-import')); ?>"
                                    title="<?php echo e(__('messages.bulk_import')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate text-capitalize"><?php echo e(__('messages.bulk_import')); ?></span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(Request::is('admin/vendor/bulk-export')?'active':''); ?>">
                                <a class="nav-link " href="<?php echo e(route('admin.vendor.bulk-export-index')); ?>"
                                    title="<?php echo e(__('messages.bukl_export')); ?>">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate text-capitalize"><?php echo e(__('messages.bulk_export')); ?></span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <?php endif; ?>
                    <!-- End Restaurant -->

                    <li class="nav-item">
                        <small class="nav-subtitle"
                               title="<?php echo e(__('messages.food')); ?> <?php echo e(__('messages.section')); ?>"><?php echo e(__('messages.food')); ?> <?php echo e(__('messages.management')); ?></small>
                        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                    </li>

                    <!-- Category -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('category')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/category*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                               href="javascript:" title="<?php echo e(__('messages.category')); ?>"
                            >
                                <i class="tio-category nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.categories')); ?></span>
                            </a>
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: <?php echo e(Request::is('admin/category*')?'block':'none'); ?>">
                                <li class="nav-item <?php echo e(Request::is('admin/category/add')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.category.add')); ?>"
                                       title="<?php echo e(__('messages.category')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate"><?php echo e(__('messages.category')); ?></span>
                                    </a>
                                </li>

                                <li class="nav-item <?php echo e(Request::is('admin/category/add-sub-category')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.category.add-sub-category')); ?>"
                                       title="<?php echo e(__('messages.sub_category')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate"><?php echo e(__('messages.sub_category')); ?></span>
                                    </a>
                                </li>

                                
                                <li class="nav-item <?php echo e(Request::is('admin/category/bulk-import')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.category.bulk-import')); ?>"
                                       title="<?php echo e(__('messages.bulk_import')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate text-capitalize"><?php echo e(__('messages.bulk_import')); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/category/bulk-export')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.category.bulk-export-index')); ?>"
                                       title="<?php echo e(__('messages.bukl_export')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate text-capitalize"><?php echo e(__('messages.bulk_export')); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <!-- End Category -->

                    <!-- Attributes -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('attribute')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/attribute*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link"
                               href="<?php echo e(route('admin.attribute.add-new')); ?>" title="<?php echo e(__('messages.attributes')); ?>"
                            >
                                <i class="tio-apps nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    <?php echo e(__('messages.attributes')); ?>

                                </span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <!-- End Attributes -->

                    <!-- AddOn -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('addon')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/addon*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                               href="javascript:" title="<?php echo e(__('messages.addons')); ?>"
                            >
                                <i class="tio-add-circle-outlined nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.addons')); ?></span>
                            </a>
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: <?php echo e(Request::is('admin/addon*')?'block':'none'); ?>">
                                <li class="nav-item <?php echo e(Request::is('admin/addon/add-new')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.addon.add-new')); ?>"
                                       title="<?php echo e(__('messages.addon')); ?> <?php echo e(__('messages.list')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate"><?php echo e(__('messages.list')); ?></span>
                                    </a>
                                </li>

                                <li class="nav-item <?php echo e(Request::is('admin/addon/bulk-import')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.addon.bulk-import')); ?>"
                                       title="<?php echo e(__('messages.bulk_import')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate text-capitalize"><?php echo e(__('messages.bulk_import')); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/addon/bulk-export')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.addon.bulk-export-index')); ?>"
                                       title="<?php echo e(__('messages.bukl_export')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate text-capitalize"><?php echo e(__('messages.bulk_export')); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                <!-- End AddOn -->
                    <!-- Food -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('food')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/food*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                               href="javascript:" title="<?php echo e(__('messages.food')); ?>"
                            >
                                <i class="tio-premium-outlined nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.foods')); ?></span>
                            </a>
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: <?php echo e(Request::is('admin/food*')?'block':'none'); ?>">
                                <li class="nav-item <?php echo e(Request::is('admin/food/add-new')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.food.add-new')); ?>"
                                       title="<?php echo e(__('messages.add')); ?> <?php echo e(__('messages.new')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span
                                            class="text-truncate"><?php echo e(__('messages.add')); ?> <?php echo e(__('messages.new')); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/food/list')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.food.list')); ?>"
                                       title="<?php echo e(__('messages.food')); ?> <?php echo e(__('messages.list')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate"><?php echo e(__('messages.list')); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/food/bulk-import')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.food.bulk-import')); ?>"
                                       title="<?php echo e(__('messages.bulk_import')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate text-capitalize"><?php echo e(__('messages.bulk_import')); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/food/bulk-export')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.food.bulk-export-index')); ?>"
                                       title="<?php echo e(__('messages.bukl_export')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate text-capitalize"><?php echo e(__('messages.bulk_export')); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                <!-- End Food -->
                    <!-- DeliveryMan -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('deliveryman')): ?>
                        
                    <?php endif; ?>
                <!-- End DeliveryMan -->
                    <!-- Marketing section -->
                    <li class="nav-item">
                        <small class="nav-subtitle"
                               title="<?php echo e(__('messages.employee_handle')); ?>"><?php echo e(__('messages.marketing')); ?> <?php echo e(__('messages.section')); ?></small>
                        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                    </li>
                    <!-- Campaign -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('campaign')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/campaign*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                               href="javascript:" title="<?php echo e(__('messages.campaign')); ?>"
                            >
                                <i class="tio-layers-outlined nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.campaigns')); ?></span>
                            </a>
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: <?php echo e(Request::is('admin/campaign*')?'block':'none'); ?>">

                                <li class="nav-item <?php echo e(Request::is('admin/campaign/basic/*')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.campaign.list', 'basic')); ?>"
                                       title="<?php echo e(__('messages.basic')); ?> <?php echo e(__('messages.campaign')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span
                                            class="text-truncate"><?php echo e(__('messages.basic')); ?> <?php echo e(__('messages.campaign')); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/campaign/item/*')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.campaign.list', 'item')); ?>"
                                       title="<?php echo e(__('messages.item')); ?> <?php echo e(__('messages.campaign')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span
                                            class="text-truncate"><?php echo e(__('messages.item')); ?> <?php echo e(__('messages.campaign')); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                <!-- End Campaign -->
                    <!-- Banner -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('banner')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/banner*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link"
                               href="<?php echo e(route('admin.banner.add-new')); ?>" title="<?php echo e(__('messages.banner')); ?>"
                            >
                                <i class="tio-image nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.banners')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <!-- End Banner -->
                    <!-- Coupon -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('coupon')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/coupon*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link"
                               href="<?php echo e(route('admin.coupon.add-new')); ?>" title="<?php echo e(__('messages.coupon')); ?>"
                            >
                                <i class="tio-gift nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.coupons')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <!-- End Coupon -->
                    <!-- Notification -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('notification')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/notification*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link"
                               href="<?php echo e(route('admin.notification.add-new')); ?>"
                               title="<?php echo e(__('messages.send')); ?> <?php echo e(__('messages.notification')); ?>"
                            >
                                <i class="tio-notifications nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    <?php echo e(__('messages.push')); ?> <?php echo e(__('messages.notification')); ?>

                                </span>
                            </a>
                        </li>
                    <?php endif; ?>
                <!-- End Notification -->

                    <!-- End marketing section -->

                    <!-- Business Section-->
                    <li class="nav-item">
                        <small class="nav-subtitle"
                               title="<?php echo e(__('messages.business')); ?> <?php echo e(__('messages.section')); ?>"><?php echo e(__('messages.business')); ?> <?php echo e(__('messages.section')); ?></small>
                        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                    </li>

                    <!-- withdraw -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('withdraw_list')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/vendor/withdraw*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link"
                               href="<?php echo e(route('admin.vendor.withdraw_list')); ?>"
                               title="<?php echo e(__('messages.restaurant')); ?> <?php echo e(__('messages.withdraws')); ?>"
                            >
                                <i class="tio-table nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.restaurant')); ?> <?php echo e(__('messages.withdraws')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/subscription/add-new*')?'active':''); ?>">
                        <a class="js-navbar-vertical-aside-menu-link nav-link"
                           href="<?php echo e(route('admin.subscription.index')); ?>"
                           title="<?php echo e(__('messages.restaurant')); ?> <?php echo e(__('messages.withdraws')); ?>"
                        >
                            <i class="tio-table nav-icon"></i>
                            <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Subscription</span>
                        </a>
                    </li>
                <!-- End withdraw -->
                    <!-- account -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('account')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/account-transaction*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link"
                               href="<?php echo e(route('admin.account-transaction.index')); ?>"
                               title="<?php echo e(__('messages.collect')); ?> <?php echo e(__('messages.cash')); ?>"
                            >
                                <i class="tio-money nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.collect')); ?> <?php echo e(__('messages.cash')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <!-- End account -->

                    <!-- provide_dm_earning -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('provide_dm_earning')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/provide-deliveryman-earnings*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link"
                               href="<?php echo e(route('admin.provide-deliveryman-earnings.index')); ?>"
                               title="<?php echo e(__('messages.deliverymen_earning_provide')); ?>"
                            >
                                <i class="tio-send nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.deliverymen_earning_provide')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <!-- End provide_dm_earning -->
                    <!-- Custommer -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('customerList')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/customer*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link"
                               href="<?php echo e(route('admin.customer.list')); ?>" title="<?php echo e(__('messages.customers')); ?>"
                            >
                                <i class="tio-poi-user nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    <?php echo e(__('messages.customers')); ?>

                                </span>
                            </a>
                        </li>
                    <?php endif; ?>
                <!-- End Custommer -->

                    <!-- Business Settings -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('settings')): ?>
                        <li class="nav-item">
                            <small class="nav-subtitle"
                                   title="<?php echo e(__('messages.business')); ?> <?php echo e(__('messages.settings')); ?>"><?php echo e(__('messages.business')); ?> <?php echo e(__('messages.settings')); ?></small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/business-settings/business-setup')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.business-settings.business-setup')); ?>"
                               title="<?php echo e(__('messages.business')); ?> <?php echo e(__('messages.setup')); ?>"
                            >
                                <span class="tio-settings nav-icon"></span>
                                <span
                                    class="text-truncate"><?php echo e(__('messages.business')); ?> <?php echo e(__('messages.setup')); ?></span>
                            </a>
                        </li>

                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/business-settings/payment-method')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.business-settings.payment-method')); ?>"
                               title="<?php echo e(__('messages.payment')); ?> <?php echo e(__('messages.methods')); ?>"
                            >
                                <span class="tio-atm nav-icon"></span>
                                <span
                                    class="text-truncate"><?php echo e(__('messages.payment')); ?> <?php echo e(__('messages.methods')); ?></span>
                            </a>
                        </li>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/business-settings/mail-config')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.business-settings.mail-config')); ?>"
                               title="<?php echo e(__('messages.mail')); ?> <?php echo e(__('messages.config')); ?>"
                            >
                                <span class="tio-email nav-icon"></span>
                                <span
                                    class="text-truncate"><?php echo e(__('messages.mail')); ?> <?php echo e(__('messages.config')); ?></span>
                            </a>
                        </li>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/business-settings/sms-module')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.business-settings.sms-module')); ?>"
                               title="<?php echo e(__('messages.sms')); ?> <?php echo e(__('messages.module')); ?>">
                                <span class="tio-message nav-icon"></span>
                                <span class="text-truncate"><?php echo e(__('messages.sms')); ?> <?php echo e(__('messages.module')); ?></span>
                            </a>
                        </li>

                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/business-settings/fcm-index')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.business-settings.fcm-index')); ?>"
                               title="<?php echo e(__('messages.push')); ?> <?php echo e(__('messages.notification')); ?>">
                                <span class="tio-notifications nav-icon"></span>
                                <span
                                    class="text-truncate"><?php echo e(__('messages.notification')); ?> <?php echo e(__('messages.settings')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <!-- End Business Settings -->

                    <!-- web & adpp Settings -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('settings')): ?>
                        <li class="nav-item">
                            <small class="nav-subtitle"
                                   title="<?php echo e(__('messages.business')); ?> <?php echo e(__('messages.settings')); ?>"><?php echo e(__('messages.web_and_app')); ?> <?php echo e(__('messages.settings')); ?></small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/business-settings/config*')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.business-settings.config-setup')); ?>"
                               title="<?php echo e(__('messages.third_party_apis')); ?>"
                            >
                                <span class="tio-key nav-icon"></span>
                                <span
                                    class="text-truncate"><?php echo e(__('messages.third_party_apis')); ?></span>
                            </a>
                        </li>

                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/business-settings/pages*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                               href="javascript:" title="<?php echo e(__('messages.pages')); ?> <?php echo e(__('messages.setup')); ?>"
                            >
                                <i class="tio-pages nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.pages')); ?> <?php echo e(__('messages.setup')); ?></span>
                            </a>
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: <?php echo e(Request::is('admin/business-settings/pages*')?'block':'none'); ?>">

                                <li class="nav-item <?php echo e(Request::is('admin/business-settings/pages/terms-and-conditions')?'active':''); ?>">
                                    <a class="nav-link "
                                       href="<?php echo e(route('admin.business-settings.terms-and-conditions')); ?>"
                                       title="<?php echo e(__('messages.terms_and_condition')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate"><?php echo e(__('messages.terms_and_condition')); ?></span>
                                    </a>
                                </li>

                                <li class="nav-item <?php echo e(Request::is('admin/business-settings/pages/privacy-policy')?'active':''); ?>">
                                    <a class="nav-link "
                                       href="<?php echo e(route('admin.business-settings.privacy-policy')); ?>"
                                       title="<?php echo e(__('messages.privacy_policy')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate"><?php echo e(__('messages.privacy_policy')); ?></span>
                                    </a>
                                </li>

                                <li class="nav-item <?php echo e(Request::is('admin/business-settings/pages/about-us')?'active':''); ?>">
                                    <a class="nav-link "
                                       href="<?php echo e(route('admin.business-settings.about-us')); ?>"
                                       title="<?php echo e(__('messages.about_us')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate"><?php echo e(__('messages.about_us')); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/file-manager*')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.file-manager.index')); ?>"
                               title="<?php echo e(__('messages.third_party_apis')); ?>"
                            >
                                <span class="tio-album nav-icon"></span>
                                <span
                                    class="text-truncate text-capitalize"><?php echo e(__('messages.gallery')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <!-- End web & adpp Settings -->

                    <!-- Report -->
                    <?php if(\App\CentralLogics\Helpers::module_permission_check('report')): ?>
                        <li class="nav-item">
                            <small class="nav-subtitle"
                                   title="<?php echo e(__('messages.report_and_analytics')); ?>"><?php echo e(__('messages.report_and_analytics')); ?></small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/report/day-wise-report')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.report.day-wise-report')); ?>"
                               title="<?php echo e(__('messages.day_wise_report')); ?>">
                                <span class="tio-report nav-icon"></span>
                                <span
                                    class="text-truncate"><?php echo e(__('messages.day_wise_report')); ?></span>
                            </a>
                        </li>

                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/report/food-wise-report')?'active':''); ?>">
                            <a class="nav-link " href="<?php echo e(route('admin.report.food-wise-report')); ?>"
                               title="<?php echo e(__('messages.food_wise_report')); ?>">
                                <span class="tio-report nav-icon"></span>
                                <span
                                    class="text-truncate"><?php echo e(__('messages.food_wise_report')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                <!-- Employee-->

                    <li class="nav-item">
                        <small class="nav-subtitle"
                               title="<?php echo e(__('messages.employee_handle')); ?>"><?php echo e(__('messages.employee')); ?> <?php echo e(__('section')); ?></small>
                        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                    </li>

                    <?php if(\App\CentralLogics\Helpers::module_permission_check('custom_role')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/custom-role*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link"
                               href="<?php echo e(route('admin.custom-role.create')); ?>"
                               title="<?php echo e(__('messages.employee')); ?> <?php echo e(__('messages.Role')); ?>">
                                <i class="tio-incognito nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.employee')); ?> <?php echo e(__('messages.Role')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(\App\CentralLogics\Helpers::module_permission_check('employee')): ?>
                        <li class="navbar-vertical-aside-has-menu <?php echo e(Request::is('admin/employee*')?'active':''); ?>">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                               href="javascript:"
                               title="<?php echo e(__('messages.Employee')); ?>">
                                <i class="tio-user nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate"><?php echo e(__('messages.employees')); ?></span>
                            </a>
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                style="display: <?php echo e(Request::is('admin/employee*')?'block':'none'); ?>">
                                <li class="nav-item <?php echo e(Request::is('admin/employee/add-new')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.employee.add-new')); ?>"
                                       title="<?php echo e(__('messages.add')); ?> <?php echo e(__('messages.new')); ?> <?php echo e(__('messages.Employee')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span
                                            class="text-truncate"><?php echo e(__('messages.add')); ?> <?php echo e(__('messages.new')); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo e(Request::is('admin/employee/list')?'active':''); ?>">
                                    <a class="nav-link " href="<?php echo e(route('admin.employee.list')); ?>"
                                       title="<?php echo e(__('messages.Employee')); ?> <?php echo e(__('messages.list')); ?>">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate"><?php echo e(__('messages.list')); ?></span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                <?php endif; ?>
                <!-- End Employee -->


                    <li class="nav-item" style="padding-top: 100px">

                    </li>
                </ul>
            </div>
            <!-- End Content -->
        </div>
    </aside>
</div>

<div id="sidebarCompact" class="d-none">

</div>
<?php /**PATH /home/vagrant/code/diningtest/resources/views/layouts/admin/partials/_sidebar.blade.php ENDPATH**/ ?>