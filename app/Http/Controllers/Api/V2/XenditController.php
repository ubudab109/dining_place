<?php

namespace App\Http\Controllers\Api\V2;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\RestaurantCategories;
use App\Models\Subscription;
use App\Models\SubscriptionPayment;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Xendit\Xendit;
use Illuminate\Support\Str;

class XenditController extends Controller
{
    private $token = 'xnd_development_fXGhxSKlqUY6tfTlMApyTmkpGRTFD0hugWDhB3yD5HqVRuBUJh3eTDie9D8Zj';
    
    function getListVa()
    {
        Xendit::setApiKey($this->token);
        $getVABanks = \Xendit\VirtualAccounts::getVABanks();
        return response()->json($getVABanks, 200);
    }

    public function createVa(Request $request)
    {
        $request->validate([
            'categories'    => 'array'
        ]);

        DB::beginTransaction();
        try {
            Xendit::setApiKey($this->token);
            $externalId = uniqid('SUBS');
            $params = [
                'external_id'       => $externalId,
                'bank_code'         => $request->bank_code,
                'name'              => $request->f_name .' '. $request->l_name,
                'expected_amount'   => $request->price,
                'email_user'        => $request->email,
                'is_closed'         => true,
                'is_single_use'     => true,
            ];
            $createVa = \Xendit\VirtualAccounts::create($params);
            
            DB::commit();
    
            return response()->json($createVa, 200);
        } catch (\Exception $err) {
            return response()->json($err->getMessage(), 500, [
                'messages' => $err->getMessage(),
            ]);
        }
    }

    public function callbackPaid(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->headers->set('X-CALLBACK-TOKEN', 'zdQEgcVXZQieW8Q7I3jk2pAs1FpQKcu313bn5kOTzuv05N5i');
            $getVA = SubscriptionPayment::where('external_id',$request->external_id)->exists();
            if (!$getVA) {
                return response()->json(false, 404, [
                    'messages' => 'Payment Not Found'
                ]);
            }
            $updateVA = SubscriptionPayment::where('external_id', $request->external_id)->first();
            $updateVA->update([
                'status' => 'COMPLETED',
            ]);
            DB::commit();
            return response()->json($getVA, 200,[
                    'messages' => 'Payment Sucessfully Updated'
            ]);
        } catch (\Exception $err) {
            DB::rollBack();
            return response()->json(false, 500,[
                'messages' => $err->getMessage(),
            ]);
        }
    }

    public function callbackCreated(Request $request)
    {
        DB::beginTransaction();
        try {
            Xendit::setApiKey($this->token);
            $request->headers->set('X-CALLBACK-TOKEN', 'zdQEgcVXZQieW8Q7I3jk2pAs1FpQKcu313bn5kOTzuv05N5i');
            $getVA = SubscriptionPayment::where('external_id',$request->external_id)->exists();
            if (!$getVA) {
                return response()->json(false, 404, [
                    'messages' => 'Payment Not Found'
                ]);
            }
            $updateVA = SubscriptionPayment::where('external_id', $request->external_id)->first();
            $updateVA->update([
                'status' => $request->status,
            ]);
            DB::commit();
            return response()->json($getVA, 200,[
                    'messages' => 'Payment Sucessfully Updated'
            ]);
        } catch (\Exception $err) {
            DB::rollBack();
            return response()->json(false, 500,[
                'messages' => $err->getMessage(),
            ]);
        }
    }
}
