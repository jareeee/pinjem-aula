<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Order;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('main.booking',[
            'schedules' => Booking::where('status', 1)
                                        ->with('user')
                                        ->orderBy('id', 'desc')
                                        ->paginate(2),
            'title' => 'Booking',
        ]);
    }

    public function create(Request $request)
    {
        $validator = $request->validate([
            'date' => 'required|date_format:Y-m-d|unique:bookings',
            'time_start' => 'date_format:H:i',
            'time_end' => 'date_format:H:i|after:time_start',
            'name_event' => 'required|string',
            'name_teacher' => 'required|string',
            'bangku' => 'required'
        ]);

        $validator['user_id'] = auth()->user()->id;
        $validator['speaker'] =  $request->boolean('speaker');
        $validator['proyektor'] = $request->boolean('proyektor');

        $validator2 = $request->validate([
            'price' => 'required'
        ]);
        $validator2['user_id'] = auth()->user()->id;
        $validator2['number'] = rand();
        $validator2['payment_status'] = 1;


        
        Booking::create($validator);
        Order::create($validator2);
        return redirect('/dashboard/payment')->with('success', 'Anda berhasil booking, silahkan bayar pesanan anda');
    }
}
