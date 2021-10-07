<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CentralLogics\Helpers;
use App\Models\Category;
use App\Models\Food;
use App\Models\LanguageRestaurant;
use Illuminate\Support\Facades\DB;
use App\Models\Restaurant;
use App\Models\RestaurantTable;

class RestaurantController extends Controller
{
    public function getRestaurant(Request $request, $slug)
    {
        $data = Restaurant::with(['foods' => function($query) {
            $query->where('language_id',Helpers::get_restaurant_language());
        }])->where('slug',$slug);

        if (!$data) {
            abort(404);
        }
        if ($request->has('categories')) {
            $data = Restaurant::with(['foods' => function ($query) use ($request) {
                $query->where('category_id', $request->categories)->where('language_id',Helpers::get_restaurant_language());
            }])->where('slug',$slug);
        }

        if ($request->has('language')) {
            $data = Restaurant::with(['foods' => function ($query) use ($request) {
                $query->where('language_id', $request->language);
            }])->where('slug',$slug);
        }
        // dd($slug);
        $categories=Category::all();
        $restaurant = $data->first();
        $table = RestaurantTable::where('restaurant_id', $restaurant->id)->get();
        $onSeling = Food::where('discount', '>', 0)->get();
        $languages = LanguageRestaurant::where('restaurant_id', $restaurant->id)->get();

        return view('restaurant/restaurant',['data'=> $restaurant, 'categories' => $categories, 'sellings' => $onSeling, 'tables' => $table, 'languages' => $languages]);
    }
}
