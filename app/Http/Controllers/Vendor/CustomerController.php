<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\ReservationCustomer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index(Request $request)
    {
        $customers = ReservationCustomer::paginate(25);
        return view('vendor-views.customer.index',compact('customers'));

    }
}
