@extends('layouts.app')

@section('header')
<title>Dashboard Ku | LARACAMP</title>
@endsection

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <tbody>
                    @forelse ($checkout as $ch)
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{ asset('assets/images/item_bootcamp.png') }}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong class="text-uppercase">{{ $ch->Camp->title }}</strong>
                            </p>
                            <p>
                                <?= date('D, d F Y H:i:s', strtotime($ch->created_at)); ?>
                            </p>
                        </td>
                        <td>
                            <strong>Rp <?= number_format($ch->Camp->price,2,',','.') ?></strong>
                        </td>
                        <td>
                            @if ($ch->is_paid)
                            <strong class="text-green">Sudah Bayar</strong>
                            @else
                            <strong>Mengunggu Pembayaran</strong>
                            @endif
                        </td>
                        <td>
                            <a href='https://wa.me/62895342427976?text=Hi min, saya ingin konfirmasi pembayaran tentang kelas "{{ $ch->Camp->title }}"' class="btn btn-primary" target="_blank">
                                Kontak Bantuan
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Tidak ada Data !</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
