@component('mail::message')
# Camp {{ $checkout->Camp->title }} Berhasil Terdaftar !!

Hi {{ $checkout->User->name }},
<br>
Terima kasih sudah mendaftar di Camp <b> {{ $checkout->Camp->title }} </b>

@component('mail::button', ['url' => route('tagihan_checkout',$checkout->id)])
Tagihan Ku
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
