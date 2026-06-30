<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking', function () {
    return view('booking');
});
Route::post('/booking', [BookingController::class, 'store']);

Route::get('/services', function () {
    return view('services');
});

Route::get('/barbers', function () {
    return view('barbers');
});

use App\Models\Booking;
use App\Http\Controllers\AdminAuthController;

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/bookings', function () {
        $bookings = Booking::latest()->get();
        return view('admin.bookings', compact('bookings'));
    })->name('admin.bookings');

    Route::get('/admin/bookings/{booking}/edit', function (Booking $booking) {
        return view('admin.bookings_edit', compact('booking'));
    })->name('admin.bookings.edit');

    Route::put('/admin/bookings/{booking}', function (Illuminate\Http\Request $request, Booking $booking) {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'customer_email' => 'nullable|email|max:255',
            'barber_name' => 'required|string|max:255',
            'service_name' => 'required|string|max:255',
            'booking_date' => 'required|date',
            'booking_time' => 'required|string|max:50',
            'status' => 'required|string',
        ]);
        
        $booking->update($validated);
        return redirect()->route('admin.bookings')->with('success', 'Maklumat tempahan berjaya dikemaskini.');
    })->name('admin.bookings.update');

    Route::delete('/admin/bookings/{booking}', function (Booking $booking) {
        $booking->delete();
        return back()->with('success', 'Tempahan berjaya dipadam.');
    })->name('admin.bookings.destroy');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'store']);
