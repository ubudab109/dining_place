<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CentralLogics\Helpers;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function getVendor($vendor)
    {
        return view('vendor-views/public/vendor');
    }
}
