<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Modules\Membership\app\Models\UserMembership;

class PaymentController extends Controller
{

    public function store(Request $request)
    {
        $nowPayment = UserMembership::where('payment_status', 'pending')
            ->where('user_id', auth()->user()->id)->first();


        if (!$nowPayment) {
            $nowPayment = new UserMembership();
            $nowPayment->user_id = auth()->user()->id;
            $nowPayment->status = 0;
            $nowPayment->membership_id = 2;
            $nowPayment->payment_gateway = 'nowpayments';
            $nowPayment->payment_status = 'pending';
            $nowPayment->save();

            $response = Http::withHeaders([
                'x-api-key' => 'ZCRRBS4-2B64SGZ-M32E1K9-51K02FD',
                'Content-Type' => 'application/json',
            ])->post('https://api.nowpayments.io/v1/payment', [
                'price_amount' => 30,
                'price_currency' => 'usd', // Monto expresado en USD
                'pay_currency' => 'btc', // Moneda de pago: Bitcoin
                'ipn_callback_url' => 'https://sobunny.com/print-request',
                'order_id' => $nowPayment->id,
                'order_description' => "Pago con Bitcoin del usuario con ID " . auth()->user()->id,
            ]);
            info($response->json());
            if ($response->successful()) {
                $nowPayment->amount = $response['pay_amount'];
                $nowPayment->pay_address = $response['pay_address'];
                $nowPayment->save();
            }
        }
        return response()->json(['success' => ['pay_address' => $nowPayment->pay_address, 'pay_amount' => $nowPayment->amount], 200]);
    }
}
