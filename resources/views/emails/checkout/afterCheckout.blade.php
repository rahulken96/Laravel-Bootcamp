@component('mail::message')
# Camp {{ $checkout->Camp->title }} Berhasil Terdaftar !!

Hi {{ $checkout->User->name }},
<br>
Terima kasih sudah mendaftar di Camp <b> {{ $checkout->Camp->title }} </b>

@component('mail::button', ['url' => route('user.dashboard')])
Dashboard Ku
@endcomponent

Terimakasih,<br>
Laracamp Team
{{-- {{ config('app.name') }} --}}
@endcomponent
