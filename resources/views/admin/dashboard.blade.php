@extends('layouts.app')

@section('header')
    <title>Dashboard Ku | LARACAMP</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3><strong>Data Camp</strong>
                    </div>
                    <div class="card-body">
                        @include('components.alerts.success')
                        <table class="table col-md-12">
                            <thead class="col-md-12">
                                <tr class="col-md-12">
                                    <th class="text-md-center">Pengguna</th>
                                    <th class="text-md-center">Camp</th>
                                    <th class="text-md-center">Harga</th>
                                    <th class="text-md-center">Data Pendaftaran</th>
                                    <th class="text-md-center">Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkAdmin as $ca )
                                    <tr class="col-md-12">
                                        <td>{{ $ca->User->name }}</td>
                                        <td>{{ $ca->Camp->title }}</td>
                                        <td>Rp <?= number_format($ca->Camp->price, '2', ',', '.') ?></td>
                                        <td><?= date('D, d F Y - H:i', strtotime($ca->created_at)) ?></td>
                                        <td>
                                            <strong>{{$ca->payment_status}}</strong>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Tidak Ada Data !</strong>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
