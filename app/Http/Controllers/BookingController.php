<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Ensure the path is correct
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerBookingMail;
use App\Mail\AdminBookingMail;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.booking.booking');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        // Handle the request data
        try {
        // dd($request);
        // Validate the incoming request
        $validated = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required|string',
            'propertyType' => 'required|string',
            'zipCode' => 'required|integer',
            'country' => 'required|string',
            'state' => 'required|string',
            'website' => 'nullable|string',
            'businessName' => 'nullable|string',
            'address' => 'nullable|string',
            'status' => 'nullable|string',
            'otherCharges' => 'nullable',

        ]);

        // Create a new booking entry
        $booking = Booking::create($request->all());


        $email = $validated['email']; // customer's email address


        // Send email to customer with booking details

        Mail::to($email)->send(new CustomerBookingMail($booking));


        // Send email to admin with booking details
        Mail::to('manibahi321@gmail.com')->send(new AdminBookingMail($booking));

        return response()->json([
            'success' => true,
            'bookingId' => $booking->id,
            'serviceName' => $booking->propertyType,
            'dateTime' => now()->format('Y-m-d H:i:s'), // or any relevant date/time
            'location' => $booking->address,
            'contactPerson' => $booking->firstName . ' ' . $booking->lastName,
            'contactNumber' => $booking->contact,
        ]);
     } catch (\Exception $e) {
        // Handle exceptions
        return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
