<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Checkout\Store;
use App\Mail\Checkout\AfterCheckout;
use App\Models\Camp;
use App\Models\Checkout;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
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

        return view('checkout.create',['camp' => $camp]);


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
        $data['expired'] = date('Y-m-t', strtotime($data['expired']));

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
        ],$data);

        // ngirim email
        $userEmail = Auth::user()->email;
        Mail::to($userEmail)->send(new AfterCheckout($checkout));

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

}
