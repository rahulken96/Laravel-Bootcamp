@extends('layouts.navbar')

@section('title')
<title>Berhasil Checkout</title>
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
                    HHOOREE !!!
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
