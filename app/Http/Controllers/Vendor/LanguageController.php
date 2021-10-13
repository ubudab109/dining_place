<?php

namespace App\Http\Controllers\Vendor;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\LanguageRestaurant;
use App\Models\Languages;
use App\Models\Restaurant;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    function index()
    {
        $languages = Languages::with('flag')->orderBy('english_name','asc')->get();
        $restaurant = Restaurant::find(Helpers::get_restaurant_id());
        $languageRestaurant = LanguageRestaurant::find($restaurant->language_id);
        return view('vendor-views.languages.index', compact('languages','restaurant','languageRestaurant'));
    }

    function store(Request $request)
    {
        $restaurant = Restaurant::find(Helpers::get_restaurant_id());
        $request->validate([
            'code'      => 'required',
        ]);

        $lang = Languages::where('code', $request->code)->first();
        LanguageRestaurant::create([
            'name'          => $lang->english_name,
            'code'          => $lang->code,
            'restaurant_id' => $restaurant->id,
        ]);

        Toastr::info('Language Stored Successfully');
        return back();
    }

    function updateRestaurantLanguage(Request $request)
    {
        $restaurant = Restaurant::find(Helpers::get_restaurant_id());

        $restaurant->update([
            'language_id'   => $request->id_lang,
        ]);

        Toastr::info('Language Restaurant Updated Successfully');
        return back();
    }
}
