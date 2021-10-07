<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoupunController extends Controller
{
    function index()
    {
        $coupons = Coupon::paginate(25);
        return view('vendor-views.coupon.index', compact('coupons'));
    }

    function create()
    {
        return view('vendor-views.coupon.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'title'             => 'required',
            'code'              => 'required',
            'start_date'        => 'required',
            'expire_date'      => 'required',
            'coupon_type'       => 'nullable',
            'min_purchase'      => 'required|numeric',
            'max_discount'      => 'required|required',
            'discount_type'     => 'required',
            'limit'             => 'nullable',
        ]);

        DB::beginTransaction();
        try {
            Coupon::create([
                'title'         => $request->title,
                'code'          => $request->code,
                'start_date'    => $request->start_date,
                'expire_date'   => $request->expire_date,
                'coupon_type'   => $request->coupon_type,
                'min_purchase'  => $request->min_purchase,
                'discount_type' => $request->max_discount,
                'limit'         => $request->limit
            ]);
            Toastr::success('Successfully Added Coupon');
            DB::commit();
            return redirect()->route('vendor.coupon.list');
        } catch (\Exception $err) {
            DB::rollBack();
            Toastr::error('There was an error, Please Try Again');
            return back();
        }
    }

    function updateStatus($id, $status)
    {
        Coupon::find($id)->update([
            'status' => $status
        ]);
        Toastr::success('Successfully Update Status Coupon');
        return back();
    }

    function destroy($id)
    {
        Coupon::find($id)->delete();
        Toastr::success('Successfully Delete Coupon');
        return back();
    }
}
