<?php

namespace App\Http\Controllers\Admin;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $chat = Chat::where('vendor_id', $request->vendor)->where('admin_messages',null)->first();
            $chat->update([
                'admin_messages'    => $request->messages
            ]);
            DB::commit();
            return response()->json($chat->vendor_id, 200);
        } catch (\Exception $err) {
            DB::rollBack();
            return response()->json($err->getMessage(), 500);
        }
    }

    public function getChat($vendorId)
    {
        $chat = Chat::where('vendor_id',$vendorId)->order_by('created_at', 'desc')->get();
        return response()->json($chat, 200);
    }

}
