<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RestaurantType;
use Illuminate\Http\Request;

class RestaurantTypeController extends Controller
{
    function index()
    {
        $types = RestaurantType::paginate(25);
        return view('admin-views.restaurant-type.index', compact('types'));
    }

    function store(Request $request)
    {
        $request->validate([
            'name'      => 'required'
        ]);

        RestaurantType::create([
            'name'  => $request->name
        ]);

        return back();
    }

    function destroy($id)
    {
        RestaurantType::find($id)->delete();
        return back();
    }
}
