<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        $checkout = Checkout::with('Camp')->where('user_id',Auth::id())->get();
        return view('user.dashboard',['checkout' => $checkout]);
    }
}
