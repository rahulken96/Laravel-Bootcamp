@component('mail::message')
# Selamat Datang ^^

Hii <b>{{$user->name}}</b>,
<br>
Selamat Datang di <b>LARACAMP</b>, akun Anda Telah Berhasil Dibuat.
<br>
Sekarang Anda Bisa Memilih Kelas Bootcamp Yang Anda Inginkan !

@component('mail::button', ['url' => route('masuk')])
Masuk Ke LARACAMP
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
