<?php

namespace App\Http\Controllers;

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
        $Validator = $request->validate([
            'full_name' => 'required|string',
            'date' => 'required|date_format:dd-mm-yy',
            'no_telepon' => 'required|numeric',
            'time_start' => 'date_format:H:i',
            'time_end' => 'date_format:H:i|after:time_start',

        ]);

        return $request->all();
    }
}
