<?php

namespace App\Http\Controllers\Vendor;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\ReservationCustomer;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    function index()
    {
        $reservations = ReservationCustomer::where('restaurant_id', Helpers::get_restaurant_id())->paginate(25);
        return view('vendor-views.reservation.index',compact('reservations'));

    }

    public function search(Request $request) {
        $key = explode(' ', $request['search']);
        $reservations = ReservationCustomer::where(function ($q) use ($key) {
            foreach ($key as $value) {
                $q->orWhere('customer_name', 'like', "%{$value}%");
            }
        })->limit(50)->get();
        return response()->json([
            'view'=>view('vendor-views.reservation.partials._table',compact('reservations'))->render(),
            'count'=>$reservations->count()
        ]);
    } 

    public function updateStatus(Request $request, $id)
    {
        ReservationCustomer::find($id)->update([
            'status' => $request->status
        ]);

        return back();
    }
}
