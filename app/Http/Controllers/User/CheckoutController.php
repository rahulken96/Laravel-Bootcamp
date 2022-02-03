<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Checkout\Store;
use App\Mail\Checkout\AfterCheckout;
use App\Models\Camp;
use App\Models\Checkout;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Midtrans;

class CheckoutController extends Controller
{

    public function __construct()
    {
        Midtrans\Config::$serverKey = env('MIDTRANS_SERVERKEY');
        Midtrans\Config::$clientKey = env('MIDTRANS_CLIENTKEY');
        Midtrans\Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Midtrans\Config::$is3ds = env('MIDTRANS_IS_3DS');
        Midtrans\Config::$isSanitized = env('MIDTRANS_IS_SANITIZED');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Camp $camp)
    {
        /*
        NB :
        Penulisan fungsi " TelahTerdaftar " di bawah sebenarnya sama dengan penulisan fungsi " getTelahTerdaftarAttribute() "
        pada fungsi yang dibuat di Models Camp.php
        */

        if ($camp->TelahTerdaftar) {
            $request->session()->flash('error', "Anda telah terdaftar pada bootcamp {$camp->title}.");
            return redirect(route('user.dashboard'));
        }

        return view('checkout.create', ['camp' => $camp]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request, Camp $camp)
    {
        // mapping request data
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['camp_id'] = $camp->id;
        // $data['expired'] = date('Y-m-t', strtotime($data['expired']));

        // update data user
        $user = Auth::user();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->occupation = $data['occupation'];
        $user->save();

        // update / tambah data checkout
        $checkout = Checkout::updateOrCreate([
            'card_number' => $data['card_number'],
            'expired' => $data['expired'],
            'cvc' => $data['cvc'],
        ], $data);

        // snap Midtrans
        $this->SnapMidtrans($checkout);

        // ngirim email
        $userEmail = Auth::user()->email;
        // Mail::to($userEmail)->send(new AfterCheckout($checkout));

        return redirect(route('checkout_sukses'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }

    public function sukses()
    {
        return view('checkout.success');
    }

    public function tagihan(Checkout $checkout)
    {
        return json_encode($checkout);
    }

    /**
     * Midtrans handler
     */
    public function getSnapMidtransAttribute(Checkout $checkout)
    {
        $orderId = $checkout->id . '-' . Str::random(5);
        $checkout->midtrans_booking_code = $orderId;

        // Request #1
        $transaction_details = [
            "order_id" => $orderId,
            "gross_amount" => $checkout->Camp->price,
        ];

        // Request #2
        $item_details = [
            "id" => $orderId,
            "price" => $checkout->Camp->price,
            "quantity" => 1,
            "name" => "Pembayaran untuk Camp {$checkout->Camp->title}",
            "brand" => "Powered By Midtrans",
            "merchant_name" => "Laracamp"
        ];

        $userData = [
            "first_name" => $checkout->User->name,
            "last_name" => "",
            "email" => $checkout->User->email,
            "phone" => $checkout->User->phone,
            "address" => $checkout->User->address,
            "city" => "",
            "postal_code" => "",
            "country_code" => "ID"
        ];

        // Request #3
        $customer_details = [
            "first_name" => $checkout->User->name,
            "last_name" => "",
            "email" => $checkout->User->email,
            "phone" => $checkout->User->phone,
            "billing_address" => $userData,
            "shipping_address" => $userData,
        ];

        // Request #4
        $midtrans_params = [
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        ];

        try {
            // Mendapatkan Snap Midtrans Payement Page URI
            $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;
            $checkout->midtrans_url = $paymentUrl;
            $checkout->save();

            return $paymentUrl;
        } catch (Exception $e) {
            return false;
        }

    }
}
