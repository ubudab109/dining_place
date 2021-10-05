<?php

namespace App\Http\Controllers\Vendor;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\RestaurantTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRController extends Controller
{
    function index()
    {
        $restaurant = Restaurant::where('vendor_id', Helpers::get_vendor_id())->first();
        $tables = RestaurantTable::where('restaurant_id', Helpers::get_restaurant_id())->get();
        return view('vendor-views.QR.index',compact('restaurant','tables'));
    }
    
}
