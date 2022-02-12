@extends('layouts.navbar')
@section('title')
<title>Masuk | LARACAMP</title>
@endsection

@section('content-navbar')
<a href="{{ route('daftar') }}" class="btn btn-master btn-primary">
    Daftar
</a>
@endsection
@section('content')
<section class="login-user">
    <div class="left">
        <img src="{{ asset('assets/images/banner.png') }}" alt="">
    </div>
    <div class="right">
        <img src="{{ asset('assets/images/logo_laracamp.png') }}" alt="LARACAMP" title="Coding icons created by Kiranshastry - Flaticon" style="max-height: 60%">
        <h1 class="header-third">
            Mulai Hari Ini !
        </h1>
        <p class="subheader">
            Karena Besok Menjadi Tidak Akan Pernah
        </p>
        <p>
            <a class="btn btn-border btn-google-login" href="{{ route('masuk_google') }}">
                <img src="{{ asset('assets/images/ic_google.svg') }}" class="icon" alt=""> Masuk dengan Google
            </a>
        </p>
        <img src="{{ asset('assets/images/people.png') }}" class="people" alt="">
    </div>
</section>
@endsection

