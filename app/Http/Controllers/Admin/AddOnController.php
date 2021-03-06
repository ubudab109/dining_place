<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddOn;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Facades\DB;

class AddOnController extends Controller
{
    public function index()
    {
        $addons = AddOn::withoutGlobalScopes()->orderBy('name')->paginate(25);
        return view('admin-views.addon.index', compact('addons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'restaurant_id' => 'required',
            'price' => 'required',
        ], [
            'name.required' => 'Name is required!',
            'restaurant_id.required' => trans('messages.please_select_restaurant'),
        ]);

        $addon = new AddOn();
        $addon->name = $request->name;
        $addon->price = $request->price;
        $addon->restaurant_id = $request->restaurant_id;
        $addon->save();
        Toastr::success('Addon added successfully!');
        return back();
    }

    public function edit($id)
    {
        $addon = AddOn::withoutGlobalScopes()->find($id);
        return view('admin-views.addon.edit', compact('addon'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'restaurant_id' => 'required',
            'price' => 'required',
        ], [
            'name.required' => 'Name is required!',
            'restaurant_id.required' => trans('messages.please_select_restaurant'),
        ]);

        $addon = AddOn::withoutGlobalScopes()->find($id);
        $addon->name = $request->name;
        $addon->price = $request->price;
        $addon->restaurant_id = $request->restaurant_id;
        $addon->save();
        Toastr::success('Addon updated successfully!');
        return redirect(route('admin.addon.add-new'));
    }

    public function delete(Request $request)
    {
        $addon = AddOn::withoutGlobalScopes()->find($request->id);
        $addon->delete();
        Toastr::success('Addon removed!');
        return back();
    }

    public function status($addon, Request $request)
    {
        $addon_data = AddOn::withoutGlobalScopes()->find($addon);
        $addon_data->status = $request->status;
        $addon_data->save();
        Toastr::success('Addon status updated!');
        return back();
    }

    public function search(Request $request){
        $key = explode(' ', $request['search']);
        $addons=AddOn::where(function ($q) use ($key) {
            foreach ($key as $value) {
                $q->orWhere('name', 'like', "%{$value}%");
            }
        })->limit(50)->get();
        return response()->json([
            'view'=>view('admin-views.addon.partials._table',compact('addons'))->render()
        ]);
    }
    public function bulk_import_index()
    {
        return view('admin-views.addon.bulk-import');
    }

    public function bulk_import_data(Request $request)
    {
        try {
            $collections = (new FastExcel)->import($request->file('products_file'));
        } catch (\Exception $exception) {
            Toastr::error('You have uploaded a wrong format file, please upload the right file.');
            return back();
        }

        $data = [];
        foreach ($collections as $collection) {
                if ($collection['name'] === "" && $collection['restaurant_id'] === "") {
                    Toastr::error('Please fill all the required fields(name, restaurant_id)');
                    return back();
                }


            array_push($data, [
                'name' => $collection['name'],
                'restaurant_id' => $collection['restaurant_id'],
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
        DB::table('add_ons')->insert($data);
        Toastr::success(count($data) . ' - Addons imported successfully!');
        return back();
    }

    public function bulk_export_index()
    {
        return view('admin-views.addon.bulk-export');
    }

    public function bulk_export_data(Request $request)
    {
        $request->validate([
            'type'=>'required',
            'start_id'=>'required_if:type,id_wise',
            'end_id'=>'required_if:type,id_wise',
            'from_date'=>'required_if:type,date_wise',
            'to_date'=>'required_if:type,date_wise'
        ]);
        $addons = AddOn::when($request['type']=='date_wise', function($query)use($request){
            $query->whereBetween('created_at', [$request['from_date'].' 00:00:00', $request['to_date'].' 23:59:59']);
        })
        ->when($request['type']=='id_wise', function($query)use($request){
            $query->whereBetween('id', [$request['start_id'], $request['end_id']]);
        })
        ->withoutGlobalScopes()->get();
        return (new FastExcel($addons))->download('Addons.xlsx');
    }
}
