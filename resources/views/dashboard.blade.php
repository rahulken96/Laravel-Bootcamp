@extends('layouts.navbar')

@section('title')
<title>My Dashboard | LARACAMP</title>
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
                    BOOTCAMPS KU
                </h2>
            </div>
        </div>
        <div class="row my-5">
            <table class="table">
                <tbody>
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{ asset('assets/images/item_bootcamp.png') }}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>SI HOBI EXPLORER</strong>
                            </p>
                            <p>
                                <?= date('Y F d, D'); ?>
                            </p>
                        </td>
                        <td>
                            <strong>Rp <?= number_format(50000,2,',','.') ?></strong>
                        </td>
                        <td>
                            <strong>Menunggu Pembayaran</strong>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary">
                                Dapatkan Nota
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
