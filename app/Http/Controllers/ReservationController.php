<?php

namespace App\Http\Controllers;

use App\Models\ReservationCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;

class ReservationController extends Controller
{
    function store(Request $request)
    {
        $request->validate([
            'customer_name'     => 'required',
            'customer_phone'    => 'required|numeric',
            'customer_email'    => 'required',
            'restaurant_id'     => 'required',
            'table_id'          => 'required',
            'reservation_date'  => 'required',
            'desc'              => 'nullable',
            'pax'               => 'required|numeric'   
        ], [
            'customer_name.required'    => 'Please Tell Your Name',
            'customer_phone.required'   => 'Please Fill this Phone Section',
            'customer_phone.numeric'    => 'Phone not valid',
            'table_id.required'         => 'Please Select Table',
            'reservation_date.requierd' => 'Specify Your Date Reservation',
            'customer_email.required'   => 'Please tell Your email',
            'pax.required'              => 'Please fill Number of Pax',
            'pax.numer'                 => 'Pax not valid'
        ]);

        DB::beginTransaction();
        try {
            $table = ReservationCustomer::where([
                'table_id'          => $request->table_id,
                'restaurant_id'     => $request->restaurant_id,
                'status'            => 'reserved',
            ])->exists();
            if ($table) {
                Alert::info('Sorry','This Table Has Been Reserved Before');
                return redirect()->back();
            } else {
                ReservationCustomer::create([
                    'customer_name'     => $request->customer_name,
                    'customer_phone'    => $request->customer_phone,
                    'customer_email'    => $request->customer_email,
                    'restaurant_id'     => $request->restaurant_id,
                    'table_id'          => $request->table_id,
                    'reservation_date'  => $request->reservation_date,
                    'pax'               => $request->pax,
                    'desc'              => $request->desc,
                ]);
                DB::commit();
                Alert::success('Success','Your Reservation Has Been Noted');
                return redirect()->back();
            }
        } catch (\Exception $err) {
            DB::rollBack();
            Alert::error('Error',$err->getMessage());
            return redirect()->back();
        }
    }
}
