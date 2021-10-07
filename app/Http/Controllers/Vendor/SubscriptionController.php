<?php

namespace App\Http\Controllers\Vendor;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    function index()
    {
        $restaurant = Helpers::get_restaurant_data();
        $subscription = Subscription::find($restaurant->subscription_id);

        return view('vendor-views.subscription.index', compact('subscription'));
    }
}
