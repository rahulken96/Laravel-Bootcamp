@extends('layouts.navbar')

@section('title')
<title>Checkout | LARACAMP</title>
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
                            <h1 class="package">
                                SI HOBI EXPLORER
                            </h1>
                            <p class="description">
                                Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{ route('selesai_checkout') }}" class="basic-form">
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Nomor Kartu</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="exampleInputEmail1" class="form-label">kedaluwarsa</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="exampleInputEmail1" class="form-label">CVC</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
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
