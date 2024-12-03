<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = "sobunnyus@gmail.com";
        $password = "Sobunny2024.";



        // $response = Http::withHeaders([
        //     'x-api-key' => 'ZCRRBS4-2B64SGZ-M32E1K9-51K02FD',
        //     'Content-Type' => 'application/json',
        // ])->post('https://api.nowpayments.io/v1/payment', [
        //     'price_amount' => 20,
        //     'price_currency' => 'usd', // Monto expresado en USD
        //     'pay_currency' => 'btc', // Moneda de pago: Bitcoin
        //     'ipn_callback_url' => 'https://sobunny.com/print-request',
        //     'order_id' => "usuario_{1}",
        //     'order_description' => "Pago con Bitcoin del usuario con ID {1}",
        // ]);
        
        // // Devuelve el enlace de pago
        // if ($response->successful()) {
        //     dd($response->json());

        //     return response()->json(['urlPago' => $response['invoice_url']]);
        // }

        try {
            $client = new Client();
            $response = $client->post('https://api.nowpayments.io/v1/payment', [
                'headers' => [
                    'x-api-key' => 'ZCRRBS4-2B64SGZ-M32E1K9-51K02FD', // Asegúrate de reemplazar con tu clave real
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'price_amount' => 3999.5,
                    'price_currency' => 'usd',
                    'pay_currency' => 'btc',
                    'ipn_callback_url' => 'https://3525-2806-2f0-49c1-fd7f-83c-8d21-d8b3-f76b.ngrok-free.app/print-request', // Cambia esta URL si es necesario
                    'order_id' => 'RGDBP-21314',
                    'order_description' => 'Apple Macbook Pro 2019 x 1',
                ],
            ]);
        
            $result = json_decode($response->getBody(), true);
            dd($result); // Muestra el resultado
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $responseBody = $e->getResponse()->getBody(true);
            dd(json_decode($responseBody, true)); // Muestra el error para depurar
        } catch (\Exception $e) {
            dd($e->getMessage()); // Muestra otros errores
        }

        // try {
        //     $client = new Client();
        //     $response = $client->post('https://api.nowpayments.io/v1/auth', [
        //         'headers' => [
        //             'Content-Type' => 'application/json',
        //         ],
        //         'json' => [
        //             'email' => $user, // Asegúrate de reemplazar con tu email real
        //             'password' => $password, // Asegúrate de reemplazar con tu contraseña real
        //         ],
        //     ]);
        
        //     $result = json_decode($response->getBody(), true);
        //     dd($result); // Ver el resultado
        
        // } catch (\GuzzleHttp\Exception\ClientException $e) {
        //     $responseBody = $e->getResponse()->getBody(true);
        //     dd(json_decode($responseBody, true)); // Muestra el error para depurar
        // }
        // dd($result);
    }
}
