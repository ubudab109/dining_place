<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    function index()
    {
        $subcriptions =Subscription::latest()->paginate(25);
        return view('admin-views.subs.index',compact('subcriptions'));
    }

    function store(Request $request)
    {
        $request->validate([
            'subs_name'     => 'required',
            'subtitle'      => 'required',
            'is_free'       => 'integer',
            'subs_price'    => 'required_if:is_free,1',
            'desc'          => 'nullable',
        ], [
            'subtitle.required'         => 'Subtitle is required',
            'subs_name.required'        => 'Subcriptin Name is required!',
            'is_free.required'          => 'Is this subscription free or not?',
            'subs_price.required_if'    => 'Price is required when this subscription is not free'
        ]);

        $subcription = new Subscription();
        $subcription->subs_name     = $request->subs_name;
        $subcription->subs_price    = $request->subs_price;
        $subcription->is_free       = $request->is_free;
        $subcription->desc          = $request->desc;
        $subcription->save();
        Toastr::success('Subscription added successfully!');
        return back();
    }

    function edit($id)
    {
        $subcriptions = Subscription::find($id);
        return response()->json($subcriptions, 200);
    }


    function update(Request $request, $id)
    {
        $request->validate([
            'subs_name'     => 'required',
            'is_free'       => 'required|integer',
            'subtitle'      => 'required',
            'subs_price'    => 'required_if:is_free,1',
            'desc'          => 'nullable',
        ], [
            'subs_name.required'        => 'Subcriptin Name is required!',
            'subtitle.required'         => 'Subscription Subtitle is Required',
            'is_free.required'          => 'Is this subscription free or not?',
            'subs_price.required_if'    => 'Price is required when this subscription is not free'
        ]);

        $subcription = Subscription::find($id);
        $subcription->subs_name     = $request->subs_name;
        $subcription->is_free       = $request->is_free;
        $subcription->subs_price    = $request->is_free === 0 ? 0 : $request->subs_price;
        $subcription->desc          = $request->desc;
        $subcription->save();
        Toastr::success('Subscription updated successfully!');
    }

    function destroy($id)
    {
        $subcriptions = Subscription::find($id);
        $subcriptions->delete();
        Toastr::success('Subscription updated successfully!');
        return back();

    }
}
