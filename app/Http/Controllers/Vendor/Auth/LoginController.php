<?php

namespace App\Http\Controllers\Vendor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Alert;
use App\Models\SubscriptionPayment;


class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:vendor', ['except' => 'logout']);
    }

    public function login()
    {
        return view('vendor-views.auth.login');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $vendor = Vendor::where('email', $request->email)->first();
        if($vendor)
        {
            $subcription = SubscriptionPayment::where('vendor_id', $vendor->id)->first();
            if($vendor->status == 0)
            {
                Alert::error('Error', 'Inactive vendor! Please contact to admin.');
                return redirect()->back()->withInput($request->only('email', 'remember'));
            }
            if ($subcription->status == 'ACTIVE') {
                    Alert::error('Error', 'You Have Incomplete Payment, Please Complete First.');
                    return redirect()->back()->withInput($request->only('email', 'remember'));
            }
        }


        if (auth('vendor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('vendor.dashboard');
        }

        Alert::error('Error', 'Credentials does not match.');

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

   

    public function logout(Request $request)
    {
        auth()->guard('vendor')->logout();
        return redirect()->route('home');
    }
}
