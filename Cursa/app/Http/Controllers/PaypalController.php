<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use PDF;


class PaypalController extends Controller
{

    public function Index()
    {
        return view('paypal.index');
    }

    public function RequestPayment(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $amount = $request->amount;

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paymentsuccess'),
                "cancel_url" => route('paymentCancel'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "$amount"
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            $runner = $request->session()->all()['array'];
            return redirect('http://www.biketour.com.mialias.net/runnerForm/'.$runner['race_id'])
                ->with('error', 'Something went wrong.');
        } else {
            $runner = $request->session()->all()['array'];
            return redirect('http://www.biketour.com.mialias.net/runnerForm/'.$runner['race_id'])
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function PaymentSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);


        /* return view('pdf.myPDF')->with('response',$response); */


        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $array = $request->session()->all()['array'];
            if(isset($array['name'])){
                return redirect()
                    ->route('runnerStoreRegister')
                    ->with('response' ,$response);
            }else{
                return redirect()
                    ->route('runnerStoreDni')
                    ->with('response' ,$response);
            }

        } else {
            $runner = $request->session()->all()['array'];
            return redirect('http://www.biketour.com.mialias.net/runnerForm/'.$runner['race_id'])
                ->with('error', $response['message'] ?? 'Something went wrong.');


        }

    }

    public function PaymentCancel()
    {
        $runner = $request->session()->all()['array'];
        return redirect('http://www.biketour.com.mialias.net/runnerForm/'.$runner['race_id'])
            ->with('error', $response['message'] ?? 'You have cancelled the transaction.');
    }


}
