@component('mail::message')
# Transaksi Telah Dikonfirmasi !

Hi, {{$checkout->User->name}}.
Transaksi kamu telah kami konfirmasi, sekarang kamu bisa menikmati
keuntungan dari Camp {{$checkout->Camp->title}}.

@component('mail::button', ['url' => route('user.dashboard')])
Dashboard Ku
@endcomponent

Terimakasih,<br>
Laracamp Team
@endcomponent
