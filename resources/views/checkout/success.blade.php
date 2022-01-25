@extends('layouts.navbar')

@section('title')
    <title>Berhasil Checkout</title>
@endsection

@section('content-navbar')
    @auth()
        <div class="user-logged nav-item">
            {{ Auth::user()->name }}
            <img src="{{Auth::user()->image}}" class="user-photo" alt="">
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
                <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3">
                    My Dashboard
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
