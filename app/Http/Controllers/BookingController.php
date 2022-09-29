<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view('main.booking');
    }

    public function create(Request $request)
    {
        $validator = $request->validate([
            'full_name' => 'required|string',
            'date' => 'required|date_format:Y-m-d|unique:bookings',
            'no_telepon' => 'required|phone:id',
            'time_start' => 'date_format:H:i',
            'time_end' => 'date_format:H:i|after:time_start',
            'name_event' => 'required|string',
            'name_teacher' => 'required|string',
            'bangku' => 'required'
        ]);

        $validator['speaker'] =  $request->boolean('speaker');
        $validator['proyektor'] = $request->boolean('proyektor');
        
        Booking::create($validator) ;
        return redirect('/booking')->with('success', 'Anda berhasil booking');

        
        



    }
}
