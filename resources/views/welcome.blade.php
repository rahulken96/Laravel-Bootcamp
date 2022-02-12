@extends('layouts.app')

@section('header')
    <title>LARACAMP | Laravel - Bootcamp</title>
@endsection

@section('content')
<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 copywriting">
                        <p class="story">
                            BELAJAR DARI AHILINYA !!
                        </p>
                        <h1 class="header">
                            Mulai Perjalanan <span class="text-purple">Developer Kamu</span> <br> Hari ini.
                        </h1>
                        <p class="support">
                            Bootcamp kami membantu developer junior yang <br> benar-benar bersemangat dalam pemrograman.
                        </p>
                        <p class="cta">
                            <a href="#story" class="btn btn-master btn-primary">
                                Ayo Mulai
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <a href="#">
                            <img src="{{ asset('assets/images/banner.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row brands">
            <div class="col-lg-12 col-12 text-center">
                <img src="{{ asset('assets/images/brands.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="benefits">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    MANFAAT SUPER KAMI
                </p>
                <h2 class="primary-header">
                    Belajar Lebih Cepat & Lebih Baik
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('assets/images/ic_globe.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Perbedaan
                    </h3>
                    <p class="support">
                        Belajar dari siapa pun di seluruh <br> Indonesia dan dapatkan keterampilan baru
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('assets/images/ic_globe-1.png') }}" class="icon" alt="">
                    <h3 class="title">
                        A.I Guideline
                    </h3>
                    <p class="support">
                        Lara akan membantu Anda memilih <br> jalur mana yang cocok untuk Anda
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('assets/images/ic_globe-2.png') }}" class="icon" alt="">
                    <h3 class="title">
                        1-1 Mentoring
                    </h3>
                    <p class="support">
                        Kami akan memastikan bahwa Anda akan mendapatkan <br> apa yang benar-benar Anda butuhkan
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('assets/images/ic_globe-3.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Pekerjaan Masa Depan
                    </h3>
                    <p class="support">
                        Dapatkan pekerjaan impian Anda di perusahaan <br> impian Anda bersama kami
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps" id="story">
    <div class="container">
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('assets/images/step1.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story" >
                    KARIR LEBIH BAIK
                </p>
                <h2 class="primary-header">
                    Persiapkan Perjalanan
                </h2>
                <p class="support">
                    Belajar dari siapa saja di seluruh <br> dunia dan dapatkan keterampilan baru
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Belajarlah lebih lanjut
                    </a>
                </p>
            </div>
        </div>
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-left copywriting pl-150">
                <p class="story">
                    BELAJAR LEBIH GIAT
                </p>
                <h2 class="primary-header">
                    Selesaikan Proyek
                </h2>
                <p class="support">
                    Masing-masing dari Anda akan bergabung dengan grup pribadi dan juga <br> bekerja sama dengan anggota tim dalam proyek
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Lihat Demo
                    </a>
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('assets/images/step2.png') }}" class="cover" alt="">
            </div>

        </div>
        <div class="row item-step">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('assets/images/step3.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    " AKHIR PERMAINAN "
                </p>
                <h2 class="primary-header">
                    Hari Demo Besar
                </h2>
                <p class="support">
                    belajar cara berbicara di depan umum untuk mendemonstrasikan <br> tugas akhir Anda dan menerima masukan penting
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Pameran
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pricing" id="kelas">
    <div class="container">
        <div class="row pb-70">
            <div class="col-lg-5 col-12 header-wrap copywriting">
                <p class="story">
                    INVESTASI YANG BAIK
                </p>
                <h2 class="primary-header text-white">
                    Mulai Perjalanan Anda
                </h2>
                <p class="support">
                    Pelajari cara berbicara di depan umum untuk mendemonstrasikan tugas akhir dan menerima <br> feedback penting.
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3 text-green">
                        Lihat Silabus
                    </a>
                </p>
            </div>
            <div class="col-lg-7 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-gila">
                            <p class="story text-center">
                                SI HOBI EXPLORER
                            </p>
                            <h4 class="primary-header text-md-center">
                                Laravel 8
                            </h4>
                            <h3 class="price text-md-center">
                                RP 50 K
                            </h3>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('assets/images/ic_check.svg') }}" alt="">
                                <p>
                                    TechKit Profesional
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('assets/images/ic_check.svg') }}" alt="">
                                <p>
                                    Video Kursus Offline
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('assets/images/ic_check.svg') }}" alt="">
                                <p>
                                    1-1 Mentoring Program
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('assets/images/ic_check.svg') }}" alt="">
                                <p>
                                    Sertifikat Proyek Akhir
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('assets/images/ic_check.svg') }}" alt="">
                                <p>
                                    Pembuat Situs Web
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('assets/images/ic_check.svg') }}" alt="">
                                <p>
                                    Kit Desain Premium
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing">
                                <img src="{{ asset('assets/images/ic_check.svg') }}" alt="">
                                <p>
                                    Peluang Kerja Masa Depan
                                </p>
                                <div class="clear"></div>
                            </div>
                            <p>
                                <a href="{{ route('checkout','si-hobi-explorer') }}" class="btn btn-master btn-primary w-100 mt-3">
                                    Ambil Langkah Ini
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-biasa">
                            <p class="story text-center">
                                KEBERUNTUNGAN PEMULA
                            </p>
                            <h4 class="primary-header text-md-center">
                                PHP Native
                            </h4>
                            <h1 class="price text-center">
                                RP 25 K
                            </h1>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('assets/images/ic_check.svg') }}" alt="">
                                <p>
                                    Video Kursus Offline
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('assets/images/ic_check.svg') }}" alt="">
                                <p>
                                    1-1 Mentoring Program
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('assets/images/ic_check.svg') }}" alt="">
                                <p>
                                    Sertifikat Proyek Akhir
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing">
                                <img src="{{ asset('assets/images/ic_check.svg') }}" alt="">
                                <p>
                                    Peluang Kerja Masa Depan
                                </p>
                                <div class="clear"></div>
                            </div>
                            <p>
                                <a href="{{ route('checkout','keberuntungan-pemula') }}" class="btn btn-master btn-secondary w-100 mt-3">
                                    Mulai Langkah Ini
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-70">
            <div class="col-lg-12 col-12 text-center">
                <img src="{{ asset('assets/images/brands.png') }}" height="30" alt="">
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    SUCCESS STUDENTS
                </p>
                <h2 class="primary-header">
                    We Really Love Laracamp
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset('assets/images/stars.svg') }}" alt="">
                            <p class="message">
                                I was not really into code but after they teach me how to train my logic then I was really fall in love with code
                            </p>
                            <div class="user">
                                <img src="#" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Rana
                                    </h4>
                                    <p class="role">
                                        Developer at Google
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset('assets/images/stars.svg') }}" alt="">
                            <p class="message">
                                Code is really important if we want to build a company and strike to the win
                            </p>
                            <div class="user">
                                <img src="#" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Ujang
                                    </h4>
                                    <p class="role">
                                        CEO at Another Corp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset('assets/images/stars.svg') }}" alt="">
                            <p class="message">
                                My background is design and art but I do really love how to make my design working in the development phase
                            </p>
                            <div class="user">
                                <img src="#" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Budi
                                    </h4>
                                    <p class="role">
                                        QA at Facebook
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="col-lg-12 col-12">
                        <p>
                            All Rights Reserved. Copyright Laracamp BWA Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
