<?php

namespace App\Http\Controllers\Vendor;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Subscription;
use App\Models\SubscriptionPayment;
use App\Models\Vendor;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    function index()
    {
        $restaurant = Helpers::get_restaurant_data();
        $subscription = Subscription::find($restaurant->subscription_id);
        $resSubs = SubscriptionPayment::where('restaurant_id',Helpers::get_restaurant_id())->first();

        return view('vendor-views.subscription.index', compact('subscription','resSubs'));
    }

    function invoice()
    {
        $vendor = Vendor::find(Helpers::get_vendor_id());
        $restaurant = Restaurant::find(Helpers::get_restaurant_id());
        $subscription = Subscription::find($restaurant->subscription_id);
        $resSubs = SubscriptionPayment::where('restaurant_id',Helpers::get_restaurant_id())->first();
        return view('vendor-views.invoice', compact('subscription','resSubs','vendor','restaurant'));
    }
}
