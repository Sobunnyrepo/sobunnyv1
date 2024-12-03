<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{

    public function store(Request $request)
    {
        info($request->input());
        info(auth()->user()->id);

        $response = Http::withHeaders([
            'x-api-key' => 'ZCRRBS4-2B64SGZ-M32E1K9-51K02FD',
            'Content-Type' => 'application/json',
        ])->post('https://api.nowpayments.io/v1/payment', [
            'price_amount' => 10,
            'price_currency' => 'usd', // Monto expresado en USD
            'pay_currency' => 'btc', // Moneda de pago: Bitcoin
            'ipn_callback_url' => 'https://sobunny.com/print-request',
            'order_id' => "user-".auth()->user()->id,
            'order_description' => "Pago con Bitcoin del usuario con ID ".auth()->user()->id,
        ]);
        $response = $response->json();
        info('response');
        info($response);

        return response()->json(['success' => ['pay_address'=>$response['pay_address'], 'pay_amount'=>$response['pay_amount']],200]);
    }
}
