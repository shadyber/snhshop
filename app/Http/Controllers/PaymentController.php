<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\ShippingInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Omnipay\Omnipay;
use App\Models\Payment;

class PaymentController extends Controller
{

    public $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId('AWXDFioumP8FGBtvkfT51iidxncqDySzWH2onc0DrMVLh3h8PxC3X5MuWz7S_CmkDUi1HgVgIbrZ_Eys');
        $this->gateway->setSecret('EJoeijyJjeAQtIO_sgsv7ssZn6zW6LqJ6X5JAOAf4OawWrjx6ykTL7erKJK_DFDljvkL1XgowwMSnqNb');
        $this->gateway->setTestMode(true); //set it to 'false' when go live

        //$this->gateway->setHeaderImageUrl(url('https://sandhstore/assets/images/logo/logo.png'));
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
        if ($request->input('submit')) {
            try {
                $response =$this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'shipping_amount' =>"19.00",
                    'items' => Cart::myCart(),
                    'currency' => 'USD',
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
                    $payment->currency = 'USD';
                    $payment->payment_status = $arr_body['state'];
                    $payment->save();
                    $lastpayment=$payment->id;




                }

                $shippingInfo=$arr_body['payer']['payer_info'];

                $address=new ShippingInfo;

                $address->user_id=Auth::user()->id;

                $address->first_name=$shippingInfo['first_name'];
                $address->last_name=$shippingInfo['last_name'];
                $address->payer_id=$shippingInfo['payer_id'];
                $address->country_code=$shippingInfo['country_code'];
                $address->city=$shippingInfo['shipping_address']["city"];
                $address->recipient_name=$shippingInfo['shipping_address']["recipient_name"];
                $address->line1=$shippingInfo['shipping_address']["line1"];
                $address->state=$shippingInfo['shipping_address']["state"];
                $address->postal_code=$shippingInfo['shipping_address']["postal_code"];
                $address->email=$shippingInfo["email"];
                $address->save();

                $lastaddress=$address->id;

                $order=new Order;
                $order->cart=json_encode(Cart::myCart());
                $order->shipping_address_id=$lastaddress;
                $order->payment_id=$lastpayment;
                $order->save();
                Session::remove('cart');

                # Send Confirm Mail

                return view('payment.success')->with(['success'=>"Payment is successful. Your transaction id is: " . $arr_body['id'],'order'=>$order]);

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
