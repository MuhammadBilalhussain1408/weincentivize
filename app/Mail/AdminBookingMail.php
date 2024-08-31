<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    public function build()
{
    // Retrieve booking details
    $bookingId = '000' . $this->booking->id;
    $serviceName = $this->booking->propertyType;
    
    // Concatenate selectedDate and selectedTime from the database
    $dateTime = $this->booking->selectedDate . ' ' . $this->booking->selectedTime;
    
    // Additional data
    $location = $this->booking->address;
    $contactPerson = $this->booking->firstName . ' ' . $this->booking->lastName;
    $contactNumber = $this->booking->contact;

    // Build the email
    return $this->view('components.email.adminEmail')
        ->with([
            'bookingId' => $bookingId,
            'serviceName' => $serviceName,
            'dateTime' => $dateTime,
            'location' => $location,
            'contactPerson' => $contactPerson,
            'contactNumber' => $contactNumber,
        ]);
}

}
