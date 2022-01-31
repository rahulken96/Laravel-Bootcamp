<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Checkout\Paid;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();

        // Ngirim email ke pengguna
        Mail::to($checkout->User->email)->send(new Paid($checkout));

        $request->session()->flash('sukses',"Status pembayaran Bootcamp \" {$checkout->Camp->title} \" dengan Pengguna bernama \" {$checkout->User->name} \" telah diperbaharui !");
        return redirect(route('admin.dashboard'));
    }
}