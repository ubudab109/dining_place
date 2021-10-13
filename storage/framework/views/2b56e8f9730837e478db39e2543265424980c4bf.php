

<?php $__env->startSection('title','Restaurant'); ?>

<?php $__env->startSection('styler'); ?>
    <style>
        .aligner {
            text-align: center;
        }
        @media (min-width: 700px) {
            .aligner {
                text-align: center;
            }
        }

        @media (min-width: 1000px) {
            .aligner {
                text-align: left !important;
                margin-left: 100px; 
            }
        }

        .header-bot-wrapper {
            height: 173px;
        }

        @media (max-width: 427px) {
            .header-bot-wrapper {
                height: 74px;
            }
        }

        @media (max-width: 550px) {
            .header-bot-wrapper {
                height: 106px;
            }
        }

        @media (max-width: 553px) {
            .header-bot-wrapper {
                height: 122px;
            }
        }
        .bg-custom {
            background-color: #f67280;
        }
        /*
            ** Style Simple Ecommerce Theme for Bootstrap 4
            ** Created by T-PHP https://t-php.fr/43-theme-ecommerce-bootstrap-4.html
            */
            .bloc_left_price {
                color: #c01508;
                text-align: center;
                font-weight: bold;
                font-size: 150%;
            }
            .category_block li:hover {
                background-color: #f67280;
            }
            .category_block li:hover a {
                color: #ffffff;
            }
            .category_block li a {
                color: #343a40;
            }
            .add_to_cart_block .price {
                color: #c01508;
                text-align: center;
                font-weight: bold;
                font-size: 200%;
                margin-bottom: 0;
            }
            .add_to_cart_block .price_discounted {
                color: #343a40;
                text-align: center;
                text-decoration: line-through;
                font-size: 140%;
            }
            .product_rassurance {
                padding: 10px;
                margin-top: 15px;
                background: #ffffff;
                border: 1px solid #6c757d;
                color: #6c757d;
            }
            .product_rassurance .list-inline {
                margin-bottom: 0;
                text-transform: uppercase;
                text-align: center;
            }
            .product_rassurance .list-inline li:hover {
                color: #343a40;
            }
            .reviews_product .fa-star {
                color: gold;
            }
            .pagination {
                margin-top: 20px;
            }

            .active-language {
                background: #f67280;
            }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card" style="border: none !important;">
                    <div class="card-body">
                        <?php if($data->cover_photo): ?>
                        <div class="row header-bot-wrapper">
                            <div class="col-12"  style="max-height:250px; overflow-y: hidden;">
                                 <img src="<?php echo e(asset('storage/restaurant/cover/'.$data->cover_photo)); ?>"  style="max-height:auto;width: 100%;">
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="row justify-content-center" style="color: white">
                            <h4 class="text-center"><?php echo e($data->name); ?></h4>
                            <div class="col-12 col-md-12">
                                <div class="card" style="background: #161616 !important">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 text-center">
                                                <img src="<?php echo e(asset('storage/restaurant/'. $data->logo)); ?>" alt="" style="border-radius: 50%; width: 50%;  ">
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <div class="row ml-1">
                                                    <h3 class="display-5" id="username"></h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2"><i class="fas fa-map-marker-alt" style="color: #f67280 !important"></i></div>
                                                    <div class="col-6">: <?php echo e($data->address); ?> </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2"><i class="fas fa-phone" style="color: #f67280 !important"></i></div>
                                                    <div class="col-6">: <?php echo e($data->phone); ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2"><i class="fas fa-envelope" style="color: #f67280 !important"></i></div>
                                                    <div class="col-6">: <?php echo e($data->email); ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 text-center mt-2">
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#reservation">Reservations</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12 col-sm-3">
                        <div class="card bg-light mb-3">
                            <div class="card-header bg-custom text-white text-uppercase"><i class="fa fa-list"></i> Languages</div>
                            <ul class="list-group category_block">
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <li class="list-group-item <?php echo e(request()->language == $item->id ? 'active-language' : ''); ?>"><a href="/r/<?php echo e($data->slug); ?>?language=<?php echo e($item->id); ?>">
                                        <div class="row justify-content-between">
                                            <img src="<?php echo e(asset('assets/flags_new/'.$item->languages->flag->flag)); ?>" alt="">
                                            <?php echo e($data->language_id == $item->id ? 'Default' : ''); ?>

                                        </div>
                                    </a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="card bg-light mb-3">
                            <div class="card-header bg-custom text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                            <ul class="list-group category_block">
                                <li class="list-group-item"><a href="/r/<?php echo e($data->slug); ?>">Show All</a></li>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <li class="list-group-item"><a href="/r/<?php echo e($data->slug); ?>?categories=<?php echo e($item->id); ?>"><?php echo e($item->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="card bg-light mb-3">
                            <div class="card-header bg-custom text-white text-uppercase">Top Selling</div>
                            <?php $__currentLoopData = $sellings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                <div class="card-body">
                                    <img class="img-fluid" src="<?php echo e(asset('storage/product/'.$product->image)); ?>" />
                                    <h5 class="card-title text-center"><?php echo e($product->name); ?></h5>
                                    <p class="card-text text-center"><?php echo e($product->description); ?></p>
                                    <p class="card-text text-center"><strike>Rp . <?php echo e(number_format($product->price, 0)); ?></strike></p>
                                    <p class="bloc_left_price">Rp. <?php echo e(number_format($product->total_discount, 0)); ?></p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="card bg-light mb-3">
                            <div class="card-header bg-custom text-white text-uppercase">On Sale</div>
                            <?php $__currentLoopData = $sellings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <div class="card-body">
                                <img class="img-fluid" src="<?php echo e(asset('storage/product/'.$product->image)); ?>" />
                                <h5 class="card-title text-center"><?php echo e($product->name); ?></h5>
                                <p class="card-text text-center"><?php echo e($product->description); ?></p>
                                <p class="card-text text-center"><strike>Rp . <?php echo e(number_format($product->price, 0)); ?></strike></p>
                                <p class="bloc_left_price">Rp. <?php echo e(number_format($product->total_discount, 0)); ?></p>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <?php if($data->foods->count() < 1): ?> 
                            <div class="col-12 col-md-6 col-lg-4">
                                <h4>No Data Found</h4>
                            </div>
                            <?php else: ?>
                            <?php $__currentLoopData = $data->foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card">
                                        <img class="card-img-top" src=<?php echo e(asset('storage/product/'.$food->image)); ?> alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title text-center"><a href="product.html" title="View Product"><?php echo e($food->name); ?></a></h4>
                                            <p class="card-text text-center"><?php echo e($food->description); ?></p>
                                            <?php if($food->discount > 0): ?>
                                                <p class="card-text text-center"><strike>Rp . <?php echo e(number_format($food->price, 0)); ?></strike></p>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="btn btn-danger btn-block">Rp. <?php echo e(number_format($food->total_discount, 0)); ?></p>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="btn btn-danger btn-block">Rp. <?php echo e(number_format($food->price, 0)); ?></p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="reservation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Reservation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('reservation.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-4">
                            <div class="col">
                            Name <span style="color: red">*</span>
                            </div>
                            <div class="col">
                            <input type="text" name="customer_name" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            Email <span style="color: red">*</span>
                            </div>
                            <div class="col mb-4">
                                <input name="customer_email" type="email" class="form-control" placeholder="Email">
                                <span>Your email address will not be published.</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            Phone <span style="color: red">*</span>
                            </div>
                            <div class="col">
                                <input type="text" name="customer_phone" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            Number of Pax <span style="color: red">*</span>
                            </div>
                            <div class="col">
                                <input type="text" name="pax" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            Date & Time <span style="color: red">*</span>
                            </div>
                            <div class="col">
                                <input type="datetime-local" name="reservation_date" class="form-control">
                                <input type="hidden" name="restaurant_id" value="<?php echo e($data->id); ?>">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            Table
                            </div>
                            <div class="col">
                                <select name="table_id" id="" class="form-control">
                                    <option value="" disabled <?php echo e(!request()->table ? 'selected' : ''); ?>>Select Table</option>
                                    <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>" <?php echo e(request()->table === $item->id ? 'selected' : ''); ?>><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            Additional Request
                            </div>
                            <div class="col">
                                <input type="text" name="desc" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row justify-content-center">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/restaurant/restaurant.blade.php ENDPATH**/ ?>