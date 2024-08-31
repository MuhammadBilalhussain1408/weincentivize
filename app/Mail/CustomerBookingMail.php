<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        // Retrieve required details
        $bookingId = '000' . $this->booking->id;
        $contactPerson = $this->booking->firstName . ' ' . $this->booking->lastName;

        // Build the email
        return $this->view('components.email.customerEmail')
            ->with([
                'bookingId' => $bookingId,
                'contactPerson' => $contactPerson,
            ]);
    }
}
