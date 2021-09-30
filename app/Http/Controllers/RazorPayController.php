<?php

namespace App\Http\Controllers;

use App\CentralLogics\Helpers;
use App\CentralLogics\OrderLogic;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;
use Redirect;
use Session;

class RazorPayController extends Controller
{
    public function payWithRazorpay()
    {
        return view('razor-pay');
    }

    public function payment(Request $request)
    {
        //Input items of form
        $input = $request->all();
        //get API Configuration
        $api = new Api(config('razor.razor_key'), config('razor.razor_secret'));
        //Fetch payment information by razorpay_payment_id
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
                $order = Order::where(['id' => $response->description])->first();
                $tr_ref = $input['razorpay_payment_id'];
                DB::table('orders')
                    ->where('id', $order['id'])
                    ->update([
                        'payment_method' => 'razor_pay',
                        'transaction_reference' => $tr_ref,
                        'order_status' => 'confirmed',
                        'payment_status' => 'paid',
                        'confirmed'=>now(),
                        'updated_at' => now(),
                    ]);
                OrderLogic::create_transaction($order, 'admin', null);
                $fcm_token = $order->customer->cm_firebase_token;
                $value = Helpers::order_status_update_message('confirmed');
                if ($value) {
                    $data = [
                        'title' => 'Order',
                        'description' => $value,
                        'order_id' => $order['id'],
                        'image' => '',
                        'type'=>'order_status'
                    ];
                    Helpers::send_push_notif_to_device($fcm_token, $data);
                    DB::table('user_notifications')->insert([
                        'data'=> json_encode($data),
                        'user_id'=>$order->customer->id,
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ]);
                }
            } catch (\Exception $e) {
                DB::table('orders')
                ->where('id', $order['id'])
                ->update([
                    'payment_method' => 'razor_pay',
                    'order_status' => 'failed',
                    'failed'=>now(),
                    'updated_at' => now(),
                ]);
                if ($order->callback != null) {
                    return redirect($order->callback . '&status=fail');
                }else{
                    return \redirect()->route('payment-fail');
                }
            }
        }

        if ($order->callback != null) {
            return redirect($order->callback . '&status=success');
        }else{
            return \redirect()->route('payment-success');
        }
    }

}
