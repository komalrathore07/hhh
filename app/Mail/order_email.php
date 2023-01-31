<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class order_email extends Mailable
{
    use Queueable, SerializesModels;

    public  Order $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
       $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('order confirmation')->view('emails.order_email');
    }
}
