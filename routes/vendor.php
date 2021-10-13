<?php

use App\CentralLogics\Helpers;
use App\Http\Controllers\Vendor\TableController;
use App\Models\Chat;
use App\Models\Food;
use App\Models\Vendor;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Vendor', 'as' => 'vendor.'], function () {
    /*authentication*/
    Route::group(['namespace' => 'Auth', 'prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::get('login', 'LoginController@login')->name('login');
        Route::post('login', 'LoginController@submit');
        Route::get('logout', 'LoginController@logout')->name('logout');
        Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {
            Route::post('login', 'EmployeeLoginController@submit')->name('login');
            Route::get('logout', 'EmployeeLoginController@logout')->name('logout');
        });
    });
    /*authentication*/

    Route::group(['middleware' => ['vendor']], function () {
        Route::get('/', 'DashboardController@dashboard')->name('dashboard');
        Route::get('/get-restaurant-data', 'DashboardController@restaurant_data')->name('get-restaurant-data');
        Route::get('/reviews', 'ReviewController@index')->name('reviews')->middleware('module:reviews');
        
        Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
            Route::post('order-stats', 'DashboardController@order_stats')->name('order-stats');
        });

        Route::group(['prefix' => 'category', 'as' => 'category.', 'middleware' => ['module:category']], function () {
            Route::get('add', 'CategoryController@index')->name('add');
            Route::get('add-sub-category', 'CategoryController@sub_index')->name('add-sub-category');
            Route::post('search', 'CategoryController@search')->name('search');
        });

        Route::group(['prefix' => 'custom-role', 'as' => 'custom-role.', 'middleware' => ['module:custom_role']], function () {
            Route::get('create', 'CustomRoleController@create')->name('create');
            Route::post('create', 'CustomRoleController@store')->name('store');
            Route::get('edit/{id}', 'CustomRoleController@edit')->name('edit');
            Route::post('update/{id}', 'CustomRoleController@update')->name('update');
            Route::delete('delete/{id}', 'CustomRoleController@distroy')->name('delete');
            Route::post('search', 'CustomRoleController@search')->name('search');
        });

        Route::group(['prefix' => 'employee', 'as' => 'employee.', 'middleware' => ['module:employee']], function () {
            Route::get('add-new', 'EmployeeController@add_new')->name('add-new');
            Route::post('add-new', 'EmployeeController@store');
            Route::get('list', 'EmployeeController@list')->name('list');
            Route::get('edit/{id}', 'EmployeeController@edit')->name('edit');
            Route::post('update/{id}', 'EmployeeController@update')->name('update');
            Route::delete('delete/{id}', 'EmployeeController@distroy')->name('delete');
            Route::post('search', 'EmployeeController@search')->name('search');
        });

        Route::group(['prefix' => 'food', 'as' => 'food.', 'middleware' => ['module:food']], function () {
            Route::get('add-new', 'FoodController@index')->name('add-new');
            Route::post('variant-combination', 'FoodController@variant_combination')->name('variant-combination');
            Route::post('store', 'FoodController@store')->name('store');
            Route::get('edit/{id}', 'FoodController@edit')->name('edit');
            Route::post('update/{id}', 'FoodController@update')->name('update');
            Route::get('list', 'FoodController@list')->name('list');
            Route::delete('delete/{id}', 'FoodController@delete')->name('delete');
            Route::get('status/{id}/{status}', 'FoodController@status')->name('status');
            Route::post('search', 'FoodController@search')->name('search');
            Route::get('view/{id}', 'FoodController@view')->name('view');
            Route::get('get-categories', 'FoodController@get_categories')->name('get-categories');
            
            //Import and export
            Route::get('bulk-import', 'FoodController@bulk_import_index')->name('bulk-import');
            Route::post('bulk-import', 'FoodController@bulk_import_data');
            Route::get('bulk-export', 'FoodController@bulk_export_index')->name('bulk-export-index');
            Route::post('bulk-export', 'FoodController@bulk_export_data')->name('bulk-export');
        });

        Route::group(['prefix' => 'banner', 'as' => 'banner.', 'middleware' => ['module:banner']], function () {
            Route::get('list', 'BannerController@list')->name('list');
            Route::get('join_campaign/{id}/{status}', 'BannerController@status')->name('status');
        });
        Route::group(['prefix' => 'campaign', 'as' => 'campaign.', 'middleware' => ['module:campaign']], function () {
            Route::get('list', 'CampaignController@list')->name('list');
            Route::get('remove-restaurant/{campaign}/{restaurant}', 'CampaignController@remove_restaurant')->name('remove-restaurant');
            Route::get('add-restaurant/{campaign}/{restaurant}', 'CampaignController@addrestaurant')->name('addrestaurant');
            Route::post('search', 'CampaignController@search')->name('search');
        });

        Route::group(['prefix' => 'wallet', 'as' => 'wallet.', 'middleware' => ['module:wallet']], function () {
            Route::get('/', 'WalletController@index')->name('index');
            Route::post('request', 'WalletController@w_request')->name('withdraw-request');
            Route::delete('close/{id}', 'WalletController@close_request')->name('close-request');
        });

        Route::group(['prefix' => 'qr'], function() {
            Route::get('qr', 'QRController@index')->name('qr.index');
            Route::post('generate', 'QRController@generate')->name('qr.generate');
        });

        

        Route::group(['prefix' => 'coupon', 'as' => 'coupon.', 'middleware' => ['module:coupon']], function () {
            Route::get('list', 'CoupunController@index')->name('list');
            Route::get('create', function() {
                $foods = Food::where('restaurant_id', Helpers::get_restaurant_id())->get();
                return view('vendor-views.coupon.create', compact('foods'));
            })->name('create');
            Route::post('store', 'CoupunController@store')->name('store');
            Route::post('updateStatus', 'CoupunController@updateStatus')->name('status');
            Route::delete('delete/{id}', 'CoupunController@destroy')->name('delete');
            Route::get('show/{id}', 'CoupunController@show')->name('show');
            // Route::get('update/{id}', 'CouponController@edit')->name('update');
            // Route::post('update/{id}', 'CouponController@update');
            // Route::get('status/{id}/{status}', 'CouponController@status')->name('status');
            // Route::delete('delete/{id}', 'CouponController@delete')->name('delete');
        });

        Route::group(['prefix' => 'addon', 'as' => 'addon.', 'middleware' => ['module:addon']], function () {
            Route::get('add-new', 'AddOnController@index')->name('add-new');
            Route::post('store', 'AddOnController@store')->name('store');
            Route::get('edit/{id}', 'AddOnController@edit')->name('edit');
            Route::post('update/{id}', 'AddOnController@update')->name('update');
            Route::delete('delete/{id}', 'AddOnController@delete')->name('delete');
        });

        Route::group(['prefix' => 'order', 'as' => 'order.' , 'middleware' => ['module:order']], function () {
            Route::get('list/{status}', 'OrderController@list')->name('list');
            Route::put('status-update/{id}', 'OrderController@status')->name('status-update');
            Route::get('view/{id}', 'OrderController@view')->name('view');
            Route::post('update-shipping/{id}', 'OrderController@update_shipping')->name('update-shipping');
            Route::delete('delete/{id}', 'OrderController@delete')->name('delete');
            Route::post('search', 'OrderController@search')->name('search');
            Route::get('details/{id}', 'OrderController@details')->name('details');
            Route::get('status', 'OrderController@status')->name('status');
            Route::get('add-delivery-man/{order_id}/{delivery_man_id}', 'OrderController@add_delivery_man')->name('add-delivery-man');
            Route::get('payment-status', 'OrderController@payment_status')->name('payment-status');
            Route::get('generate-invoice/{id}', 'OrderController@generate_invoice')->name('generate-invoice');
            Route::post('add-payment-ref-code/{id}', 'OrderController@add_payment_ref_code')->name('add-payment-ref-code');
        });

        Route::group(['prefix' => 'business-settings', 'as' => 'business-settings.', 'middleware' => ['module:restaurant_setup']], function () {
            Route::get('restaurant-setup', 'BusinessSettingsController@restaurant_index')->name('restaurant-setup');
            Route::post('update-setup/{restaurant}', 'BusinessSettingsController@restaurant_setup')->name('update-setup');
            Route::get('toggle-settings-status/{restaurant}/{status}/{menu}', 'BusinessSettingsController@restaurant_status')->name('toggle-settings');
        });

        Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['module:bank_info']], function () {
            Route::get('view', 'ProfileController@view')->name('view');
            // Route::get('update', 'ProfileController@edit')->name('update');
            Route::post('update', 'ProfileController@update')->name('update');
            Route::post('settings-password', 'ProfileController@settings_password_update')->name('settings-password');
            Route::get('bank-view', 'ProfileController@bank_view')->name('bankView');
            Route::get('bank-edit/{id}', 'ProfileController@bank_edit')->name('bankInfo');
            Route::post('bank-update/{id}', 'ProfileController@bank_update')->name('bank_update');
        });

        Route::group(['prefix' => 'shop', 'as' => 'shop.', 'middleware' => ['module:my_shop']], function () {
            Route::get('view', 'RestaurantController@view')->name('view');
            Route::get('edit/{id}', 'RestaurantController@edit')->name('edit');
            Route::post('update/{id}', 'RestaurantController@update')->name('update');
            Route::post('updatePayment/{id}', 'RestaurantController@updatePaymenMethod')->name('update-payment');
            Route::post('updateAddress/{id}', 'RestaurantController@updateAddress')->name('update-address');
            Route::post('updateDocument/{id}', 'RestaurantController@updateDocument')->name('update-document');
            Route::post('updateInfo/{id}', 'RestaurantController@updateInfo')->name('update-social');
            Route::post('updateBank', 'RestaurantController@updateBank')->name('update-bank');
            Route::get('payment', function(){
                return view('vendor-views.payment-method.index');
            })->name('edit-payment');
        });

        Route::group(['prefix' => 'table'], function() {
            Route::get('', 'TableController@index')->name('table.index');
            Route::post('store','TableController@store')->name('table.store');
            Route::delete('delete/{id}', 'TableController@destroy')->name('table.delete');
            Route::get('show/{id}', 'TableController@show')->name('table.show');
            Route::post('update/{id}', 'TableController@update')->name('table.update');
        });

        Route::group(['prefix' => 'reservation'], function(){
            Route::get('', 'ReservationController@index')->name('reservation.list');
            Route::post('status/{id}', 'ReservationController@updateStatus')->name('reservation.status');
            Route::get('show/{id}', 'ReservationController@show')->name('reservation.show');
        });

        Route::group(['prefix' => 'subscription'], function(){
            Route::get('', 'SubscriptionController@index')->name('subscription.list');
        });

        Route::group(['prefix' => 'language'], function(){
            Route::get('','LanguageController@index')->name('language.index');
            Route::post('', 'LanguageController@store')->name('language.store');
            Route::put('','LanguageController@updateRestaurantLanguage')->name('language.update');
        });

        Route::group(['prefix' => 'notification'], function() {
            Route::get('','NotificationController@index')->name('notification.index');
        });

        Route::get('invoice', 'SubscriptionController@invoice')->name('print-invoice');
        Route::group(['prefix' => 'report'], function() {
            Route::get('/', 'ReportController@dashboard')->name('report.dashboard');
            Route::get('/get-restaurant-data', 'ReportController@restaurant_data')->name('report.get-restaurant-data');
            
            Route::post('order-stats', 'ReportController@order_stats')->name('report.order-stats');
        });

        Route::group(['prefix' => 'customer'] , function() {
            Route::get('list','CustomerController@index')->name('customer.list');
        });

        Route::group(['prefix' => 'chat'] , function() {
            Route::get('',function() {
                $vendor = Vendor::find(Helpers::get_vendor_id());
                $chats = Chat::where('vendor_id', Helpers::get_vendor_id())->get();
                $chatsAdmin = Chat::where('vendor_id', Helpers::get_vendor_id())->where('admin_messages','!=',null)->get();
                $chatsAdminNew = Chat::where('vendor_id', Helpers::get_vendor_id())->where('admin_messages','!=',null)->orderBy('created_at', 'desc')->get();
                return view('vendor-views.chat.index', compact('vendor', 'chats','chatsAdmin','chatsAdminNew'));
            })->name('chat.index');
            Route::post('post', 'ChatController@store')->name('store.chat');
            Route::get('get', 'ChatController@getChat')->name('get.chat');
        });
    });
});
