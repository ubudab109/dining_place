<?php

namespace App\Http\Controllers\Vendor;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\ReservationCustomer;
use App\Models\RestaurantTable;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    function index()
    {
        $reservations = ReservationCustomer::where('restaurant_id', Helpers::get_restaurant_id())->paginate(25);
        $tables = RestaurantTable::where('restaurant_id', Helpers::get_restaurant_id())->get();
        $events = [];
        $appoint = ReservationCustomer::all();
        foreach($appoint as $appointment) {
            $events[] = [
                'id'    => $appointment->id,
                'title' => 'Reservation'.' '. $appointment->customer_name,
                'start' => $appointment->reservation_date,
                'backgroundColor'   => '#F67280',
                // 'display' => 'background',
                // 'url'   => 'detail('.$appointment->id.')',
            ];
        }
        return view('vendor-views.reservation.index',compact('reservations','tables', 'events'));

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

        return response()->json(true, 200);
    }

    public function show($id)
    {
        $reservation = ReservationCustomer::with('restaurantTable')->find($id);
        return response()->json($reservation, 200);
    }
}
