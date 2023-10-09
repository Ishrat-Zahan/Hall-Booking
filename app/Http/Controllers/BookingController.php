<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Hall;
use Inertia\Inertia;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $booking = Booking::with(['user', 'hall'])->get();
       return view ('booking.all',['booking' => $booking]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
            $user = auth()->user();
            $halls = Hall::all();
            
           
            return Inertia::render('Booking', [
                
                'userId' => $user->id,
                'userName' => $user->name,
                'halls' => $halls,
               
            ]);
        
    }


    public function store(StoreBookingRequest $request)
    {
        $request->validate([
            'date' => 'required|date',
            'total' => 'required|numeric',
            'comment' => 'nullable|string',
            'status' => 'nullable|string',
            'hall' => 'required|exists:halls,id', 
        ]);

       
        $booking = new Booking();
        $booking->user_id = auth()->user()->id; 
        $booking->hall_id = $request->input('hall');
        $booking->date = $request->input('date');
        $booking->total = $request->input('total');
        $booking->comment = $request->input('comment');
        $booking->status = $request->input('status');

       
        $booking->save();

        return redirect()->route('booking.index')->with('success', 'Booking created successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        $b = $booking->with(['user', 'hall'])->find($booking->id);
        // dd($b);
        return view('booking.show',['booking' => $b]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
