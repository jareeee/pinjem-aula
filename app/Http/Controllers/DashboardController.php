<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'profiles' => User::where('id', auth()->user()->id)->get()
        ]);
    }

    public function show_schedule()
    {
        return view('dashboard.schedule', [
            'bookings' => Booking::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
