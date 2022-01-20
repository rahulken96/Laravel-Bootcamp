<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $user = User::firstOrCreate(['email'=> $data['email']],$data);
        Auth::login($user,true);
        return redirect(route('menu_utama'))->with('Success','Anda Berhasil Masuk !');


        // $user = Socialite::driver('google')->user();

        // $token = $user->token;
        // var_dump($token);
        // echo "<br>";
        // var_dump($user->getName());
        // echo "<br>";
        // var_dump($user->getEmail());
        // "<br>";

    }

}
