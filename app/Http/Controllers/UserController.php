<?php

namespace App\Http\Controllers;

use App\Mail\User\AfterRegister;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function masuk()
    {
        return view('auth.User.login');
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderGoogle()
    {
        $callback = Socialite::driver('google')->stateless()->user();
        $data =[
            'id' => $callback->getId(),
            'name' => $callback->getname(),
            'email' => $callback->getEmail(),
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'image' => $callback->getAvatar(),
        ];

        /* Pengambilan data email dengan Socialite Google */
        // $user = User::firstOrCreate(['email'=> $data['email']],$data);

        /* Pengambilan data email dengan notif email konfirmasi pendaftaran */
        $userEmail = User::where('email',$data['email'])->first();

        /* User belum login */
        if (!$userEmail) {
            $userEmail = User::create($data);
            // Mail::to($userEmail->email)->send(new AfterRegister($userEmail));
        }

        Auth::login($userEmail,true);

        return redirect(route('menu_utama'))->with('Success','Anda Berhasil Masuk !');

    }
}
