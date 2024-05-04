<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session as Flash;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Exception;
use Stripe\StripeClient;
use Stripe\Exception\CardException;
use App\Models\Orders;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    private $stripe;
    public function __construct()
    {
		
        $this->stripe = new StripeClient(config('stripe.api_keys.secret_key'));
		
    }

    public function index(Request $request)
    {
		
        $order_id = $request->id;
        if(Orders::where('id',\Crypt::decrypt($order_id))->exists()) {
            $order = Orders::where('id',\Crypt::decrypt($order_id))->first();
            
            // If Already Payment Done.
            if($order->payment_status == 'Success') {
                return redirect()->route('order');
            }
            
            $data=array();
            return view('payment',$data)->with(compact(['order_id','order']));
        }else {
            return redirect()->back();
        }
    }
    
    public function pay(Request $request)
    {
        if(session()->has('payment_object')) {
            session()->forget('payment_object');
        }
        if(session()->has('order_id')) {
            session()->forget('order_id');
        }
        $order_id = \Crypt::decrypt($request->order_id);
        if(Orders::where('id',$order_id)->exists()) {
            
            // Get Order Details.
            $order = Orders::where('id',$order_id)->first();
            
            // If Already Payment Done.
            if($order->payment_status == 'Success') {
                return redirect()->route('order');
            }
            
            // Set your Stripe API key.
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            
            // Get the payment amount and email address from the form.
            $amount = $order->price * 100;
            $email = $order->student->email;
            $currency_code = strtolower($order->currency_code);
            
            $checkout_session = Session::create([
                'customer_email' => $email,
                'line_items' => [[
                    'price_data' => [
                        'currency' => $currency_code,
                        'product_data' => [
                            'name' => $order->subject_name,
                        ],
                        'unit_amount' => $amount,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('payment-validation'),
                'cancel_url' => route('payment-validation'),
            ]);
            
            session()->put('payment_object',$checkout_session);
            session()->put('payment_order_id',$order_id);
        
        return redirect($checkout_session->url);
            
        }else {
            return redirect()->back();
        }
    }
    
    public function paymentValidation()
    {
        if(session()->has('payment_object') && session()->has('payment_order_id') && Orders::where('id',session('payment_order_id'))->exists()) {
            if(session('payment_object')->payment_status == 'paid') {
                Orders::where('id',session('payment_order_id'))->update(
                    [
                        'payment_status' => 'Success'
                    ]
                );
                DB::table('payment')->updateOrInsert(
                    [
                        'order_id' => session('payment_order_id')
                    ],
                    [
                        'order_id' => session('payment_order_id'),
                        'amount' => (int) ((session('payment_object')->amount_total)/100),
                        'payment_status' => 'Success',
                        'transaction_id' => session('payment_object')->id
                    ]
                );
                Flash::flash('payment_status','Success');
            }else {
                Orders::where('id',session('payment_order_id'))->update(
                    [
                        'payment_status' => 'Failed'
                    ]
                );
                DB::table('payment')->updateOrInsert(
                    [
                        'order_id' => session('payment_order_id')
                    ],
                    [
                        'order_id' => session('payment_order_id'),
                        'amount' => (int) ((session('payment_object')->amount_total)/100),
                        'payment_status' => 'Failed',
                        'transaction_id' => session('payment_object')->id
                    ]
                );
                Flash::flash('payment_status','Success');
                //Flash::flash('payment_status','Failed');
            }
            return redirect()->route('order');
        }else {
            return redirect()->back();
        }
    }
    
    public function payment(Request $request)
    {
		
		
        $validator = Validator::make($request->all(), [
            'fullName' => 'required',
            'cardNumber' => 'required',
            'month' => 'required',
            'year' => 'required',
            'cvv' => 'required'
        ]);

        if ($validator->fails()) {
            $request->session()->flash('danger', $validator->errors()->first());
            return response()->redirectTo('/');
        }

        $token = $this->createToken($request);
		
        if (!empty($token['error'])) {
            $request->session()->flash('danger', $token['error']);
            return response()->redirectTo('/');
        }
        if (empty($token['id'])) {
            $request->session()->flash('danger', 'Payment failed.');
            return response()->redirectTo('/');
        }

        $charge = $this->createCharge($token['id'], 2000);
        if (!empty($charge) && $charge['status'] == 'succeeded') {
            $request->session()->flash('success', 'Payment completed.');
        } else {
            $request->session()->flash('danger', 'Payment failed.');
        }
        return response()->redirectTo('/');
    }

    private function createToken($cardData)
    {
        $token = null;
        try {
            $token = $this->stripe->tokens->create([
                'card' => [
                    'number' => $cardData['cardNumber'],
                    'exp_month' => $cardData['month'],
                    'exp_year' => $cardData['year'],
                    'cvc' => $cardData['cvv']
                ]
            ]);
        } catch (CardException $e) {
            $token['error'] = $e->getError()->message;
        } catch (Exception $e) {
            $token['error'] = $e->getMessage();
        }
        return $token;
    }

    private function createCharge($tokenId, $amount)
    {
        $charge = null;
        try {
            $charge = $this->stripe->charges->create([
                'amount' => $amount,
                'currency' => 'usd',
                'source' => $tokenId,
                'description' => 'My first payment'
            ]);
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    }
}
