<?php

namespace App\Http\Controllers\Vendor;

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
            $chat = new Chat();
            $chat->vendor_id = Helpers::get_vendor_id();
            $chat->messages = $request->messages;
            $chat->save();
            DB::commit();
            return response()->json($chat->vendor_id, 200);
        } catch (\Exception $err) {
            DB::rollBack();
            return response()->json($err->getMessage(), 500);
        }
    }

    public function getChat()
    {
        $chat = Chat::where('vendor_id',Helpers::get_vendor_id())->where('admin_messages','!=',null)->orderBy('created_at', 'desc')->get();
        return response()->json($chat, 200);
    }
}
