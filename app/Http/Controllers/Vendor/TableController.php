<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\RestaurantTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;
use Brian2694\Toastr\Facades\Toastr;

class TableController extends Controller
{
    function index()
    {   
        $tables = RestaurantTable::where('restaurant_id',\App\CentralLogics\Helpers::get_restaurant_id())
        ->orderBy('created_at', 'desc')
        ->paginate(25);
        $restaurant = Restaurant::where('vendor_id', \App\CentralLogics\Helpers::get_vendor_id())->first();
        return view('vendor-views.table.index', compact('tables', 'restaurant'));
    }

    function store(Request $request)
    {
       $request->validate([
           'name' => 'required'
       ], [
           'name.required'  => 'Table Name Required',
       ]);

       DB::beginTransaction();
       try {
        RestaurantTable::create([
            'name'  => $request->name,
            'restaurant_id' => $request->restaurant
        ]);
        DB::commit();
        Toastr::success('Table added successfully!');
        return redirect()->back();
       } catch (\Exception $err) {
           DB::rollBack();
           Toastr::error('There Was An Error, Please Try Again');
           return redirect()->back();
       }
    }

    function destroy($id)
    {
        DB::beginTransaction();
        try {
            RestaurantTable::find($id)->delete();
            DB::commit();
            Alert::success('Success', 'Your Table Has Been Deleted');
            return redirect()->back();
        } catch (\Exception $err) {
            DB::rollBack();
            Alert::error('Error', 'There Was An Error, Please Try Again');
            return redirect()->back();
        }
    }

    function show($id)
    {
        $table = RestaurantTable::find($id);
        return response()->json($table, 200);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required'  => 'Table Name Required',
        ]);
 
        DB::beginTransaction();
        try {
         RestaurantTable::find($id)->update([
             'name'  => $request->name,
         ]);
         DB::commit();
         Toastr::success('Table Updated successfully!');
        } catch (\Exception $err) {
            DB::rollBack();
            Toastr::error('There Was An Error, Please Try Again');
        }
    }
}
