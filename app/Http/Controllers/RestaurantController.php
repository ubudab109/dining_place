<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CentralLogics\Helpers;
use Illuminate\Support\Facades\DB;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function getRestaurant($slug)
    {
        $data = Restaurant::with('foods')->where('slug',$slug)->first();
        if (!$data) {
            abort(404);
        }
        return view('restaurant/restaurant',['data'=> $data]);
    }
}
