<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Omnipay\Omnipay;
use App\Models\Payment;
use function MongoDB\BSON\toJSON;

class PaymentController extends Controller
{

    public $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }

    public function index()
    {
        if(!Auth::user()){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }

        $payments=Payment::all();
        return view('admin.payment.index')->with('payments',$payments);
    }

    public function charge(Request $request)
    {
        $mycart = json_encode(Session::get('cart'));
        if ($request->input('submit')) {
            try {
                $response =$this->gateway->purchase(array(
                    'amount' => $request->input('amount'),

                    'items' => array(
                        array(
                            'name' => 'Purchase For',
                            'price' => $request->input('amount'),
                            'description' => 'purchase for a cart json'.$mycart,
                            'quantity' => 1
                        ),
                    ),
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('paymentsuccess'),
                    'cancelUrl' => url('paymenterror'),
                ))->send();

                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
    }

    public function payment_success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful()) {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                // Insert transaction data into the database
                $isPaymentExist = Payment::where('payment_id', $arr_body['id'])->first();

                if (!$isPaymentExist) {
                    $payment = new Payment;
                    $payment->payment_id = $arr_body['id'];
                    $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                    $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                    $payment->currency = env('PAYPAL_CURRENCY');
                    $payment->payment_status = $arr_body['state'];
                    $payment->save();
                    Session::remove('cart');
                }

                return view('payment.success')->with('success',"Payment is successful. Your transaction id is: " . $arr_body['id']);

                // save payment id to database.
            } else {
                return view('payment.failure')->with('error',$response->getMessage());
            }
        } else {
            return view('payment.failure')->with('error','Transaction is declined');

        }
    }

    public function payment_error()
    {
        return view('payment.failure')->with('error','User Cancel The payment');

    }
}
