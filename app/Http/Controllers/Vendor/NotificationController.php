<?php

namespace App\Http\Controllers\Vendor;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\UserNotification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    function index()
    {
        $notifications = UserNotification::where('vendor_id', Helpers::get_loggedin_user()->id)->paginate(25);

        return view('vendor-views.notification.index', compact('notifications'));
    }
}
