<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CentralLogics\Helpers;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Support\Facades\DB;
use App\Models\Restaurant;
use App\Models\RestaurantTable;

class RestaurantController extends Controller
{
    public function getRestaurant($slug, $categories = null)
    {
        $data = Restaurant::with('foods')->where('slug',$slug);
        if (!$data) {
            abort(404);
        }
        if ($categories != null) {
            $data = Restaurant::with(['foods' => function ($query) use ($categories) {
                $query->where('category_id', $categories);
            }])->where('slug',$slug);
        }
        $categories=Category::all();
        $restaurant = $data->first();
        $table = RestaurantTable::where('restaurant_id', $restaurant->id)->get();
        $onSeling = Food::where('discount', '>', 0)->get();
        return view('restaurant/restaurant',['data'=> $restaurant, 'categories' => $categories, 'sellings' => $onSeling, 'tables' => $table]);
    }
}
