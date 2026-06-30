<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'nullable|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'barber_name' => 'required|string|max:255',
            'service_name' => 'required|string|max:255',
            'booking_date' => 'required|date',
            'booking_time' => 'required|string|max:50',
            'total_price' => 'required|numeric',
        ]);

        Booking::create($validated);

        return response()->json(['success' => true, 'message' => 'Booking confirmed!']);
    }
}
