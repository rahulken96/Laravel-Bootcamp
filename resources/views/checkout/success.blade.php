@extends('layouts.navbar')

@section('title')
    <title>Berhasil Checkout</title>
@endsection

@section('content-navbar')
    @auth()
        <div class="user-logged nav-item">
            {{ Auth::user()->name }}
            <img src="{{Auth::user()->image}}" class="user-photo" alt="" style="border-radius: 50%">
        </div>
    @endauth
@endsection

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-12">
                <img src="{{ asset('assets/images/ill_register.png') }}" height="400" class="mb-5" alt=" ">
            </div>
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    HOOREE !!!
                </p>
                <h2 class="primary-header ">
                    Berhasil Checkout
                </h2>
                <p >
                    Silahkan menuju ke halaman dashboard dan lakukan pembayaran.
                </p>
                <a href="{{ route('user.dashboard') }}" class="btn btn-primary mt-3">
                    Dashboard Ku
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
