<?php

namespace App\Mail\Checkout;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Camp;

class AfterCheckout extends Mailable
{
    use Queueable, SerializesModels;

    private $checkout;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($checkout)
    {
        $this->Checkout = $checkout;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Pendaftaran Camp : {$this->Checkout->Camp->title}")->markdown('emails.checkout.afterCheckout',[
            'checkout' => $this->Checkout
        ]);
    }
}
