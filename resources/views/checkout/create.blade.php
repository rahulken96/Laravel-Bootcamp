@extends('layouts.navbar')

@section('title')
<title>Checkout | LARACAMP</title>
@endsection

@section('content-navbar')
    @auth()
        <div class="d-flex user-logged nav-item dropdown no-arrow">
            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name}}
                <img src="{{Auth::user()->image}}" class="user-photo" alt="" style="border-radius: 50%">
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto;">
                    <li>
                        <a href="{{ route('user.dashboard') }}" class="dropdown-item">My Dashboard</a>
                    </li>
                </ul>
            </a>
        </div>
    @endauth
@endsection

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    KARIR MASA DEPAN ANDA
                </p>
                <h2 class="primary-header">
                    Mulai Berinvestasi Hari Ini
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-bootcamp">
                            <img src="{{ asset('assets/images/item_bootcamp.png') }}" alt="" class="cover">
                            <h1 class="package text-uppercase">
                                {{$camp->title}}
                            </h1>
                            <p class="description">
                                Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{ route('selesai_checkout',$camp->id) }}" class="basic-form" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Nama Lengkap</label>
                                <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ Auth::user()->name }}">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Alamat Email</label>
                                <input name="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ Auth::user()->email }}">
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Pekerjaan</label>
                                <input name="occupation" type="text" class="form-control {{ $errors->has('occupation') ? 'is-invalid' : '' }}" value="{{ old('occupation') ?: Auth::user()->occupation }}">
                                @if ($errors->has('occupation'))
                                    <p class="text-danger">{{$errors->first('occupation')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Alamat</label>
                                <input name="address" type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" value="{{ old('phone') ?: Auth::user()->address }}" placeholder="Masukkan Alamat">
                                @if ($errors->has('address'))
                                    <p class="text-danger">{{$errors->first('address')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Telp / No HP</label>
                                <input name="phone" type="tel" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') ?: Auth::user()->phone }}" placeholder="Masukkan Telp">
                                @if ($errors->has('phone'))
                                    <p class="text-danger">{{$errors->first('phone')}}</p>
                                @endif
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Bayar Sekarang</button>
                            <p class="text-center subheader mt-4">
                                <img src="{{ asset('assets/images/ic_secure.svg') }}" alt=""> Pembayaran Anda aman dan terenkripsi.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
