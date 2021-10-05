

<?php $__env->startSection('title','Landing Page | '.\App\Models\BusinessSetting::where(['key'=>'business_name'])->first()->value??'Stack Food'); ?>

<?php $__env->startSection('content'); ?>

    <main>
        <div class="main-body-div">
            <!-- Top Start -->
            <section class="top-start">
                <div class="container ">
                    <div class="row">
                        <div class="row col-lg-7 top-content">
                            <div>
                                <h3 class="d-flex justify-content-center justify-content-md-start text-center text-md-left">
                                    <?php echo e(__('messages.header_title_1')); ?>

                                </h3>
                                <span
                                    class="d-flex justify-content-center justify-content-md-start text-center text-md-left">
                                     <?php echo e(__('messages.header_title_2')); ?>

                                </span>
                                <h4 class="d-flex justify-content-center justify-content-md-start text-center text-md-left">
                                    <?php echo e(__('messages.header_title_3')); ?>

                                </h4>
                            </div>

                            <div class="download-buttons">
                                <div class="play-store">
                                    <a href="https://play.google.com">
                                        <img src="<?php echo e(asset('assets/landing')); ?>/image/play_store.png">
                                    </a>
                                </div>

                                <div class="apple-store">
                                    <a href="https://www.apple.com/app-store">
                                        <img src="<?php echo e(asset('assets/landing')); ?>/image/apple_store.png">
                                    </a>
                                </div>

                                <div class="apple-store">
                                    <a href="#">
                                        <img src="<?php echo e(asset('assets/landing')); ?>/image/browse.png">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-lg-5 d-flex justify-content-center justify-content-md-end text-center text-md-right top-image">
                            <img src="<?php echo e(asset('assets/landing')); ?>/image/double_screen_image.png">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Top End -->

            <!-- About Us Start -->
            
            <!-- About Us End -->

            <!-- Why Choose Us Start -->
            
            <!-- Why Choose Us End -->

            <!-- Trusted Customers Starts -->
            
            <!-- Trusted Customers Ends -->

            <section class="about-us mt-5" id="about-us">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-2 text-center">
                            <h1>About Us</h1>
                        </div>
                        <div class="col-12">
                            <p>Welcome to My Dining Place! We’re connecting diners and restaurants to make dining in still possible in the midst of the pandemic, with less risks and contact.</p>

                            <p>Customers who dine in can experience the features of our website with following benefits:</p>
                            
                            <ul>
                                <li>Scan QR code placed on the table to access menu</li>
                                <li>Place order through our website</li>
                                <li>Pay the order through our website – no more contacts needed! Both cashless and contactless payment</li>
                                <li>Track their order through their account or e-mail</li>
                                <li>See and leave reviews</li>
                            </ul>

                            <p><b>Future of Contactless Dining Experience is Coming Soon!</b></p>

                            <p>We are not done yet! Soon dinners can also download our app:</p>

                            <ul>
                                <li>Find restaurants in your area that use our app</li>
                                <li>Browse through the menu before you choose your restaurant and make reservation</li>
                                <li>Don’t have time yet? Love the restaurant to add to wishlist</li>
                                <li>Find your foodprints – where you have been to dine</li>
                            </ul>

                            <p><b>Register Your Restaurant</b></p>

                            <p>Don’t miss out now and register your restaurant for FREE for a total of 3 months & 28 days. No coupon needed, just click on subscribe for Basic Plan</p>

                            <p><b>Upcoming Features for Restaurant:</b></p>

                            <p>In the future with your app you can also:</p>

                            <ul>
                                <li>Use app payment methods for your customers to pay their bills through us – charge applies</li>
                                <li>Be found on our app before the customers want to find their place of dining</li>
                                <li>Advertise your restaurant on our app</li>
                                <li>Make discounts for your customers</li>
                            </ul>

                            <p><b>Check out the Pricing Plan below and choose the most suitable one for your restaurant! </b></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-4" id="subcription">
                <div class="container">
                    <div class="row mt-2">
                        <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6">
                            <div class="card shadow rounded border-0 p-5">
                                <div class="card-body text-center">
                                    <div class="mb-5" style="color: #ff7714;">
                                        <h3><?php echo e($subscription->subs_name); ?></h3>
                                        <span><?php echo e($subscription->subtitle); ?></span>
                                    </div>
                                    <div>
                                        <?php echo $subscription->desc; ?>

                                    </div>
                                    <div class="mt-5">
                                        <a href="<?php echo e(route('subs-reg', $subscription->id)); ?>" class="btn text-white" style="background-color: #ff7714;">Subscribe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/diningtest/resources/views/home.blade.php ENDPATH**/ ?>