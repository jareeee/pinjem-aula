<?php

namespace App\Http\Controllers;

use App\Services\Midtrans\CreateSnapToken;
use App\Models\User;
use App\Models\Booking;
use App\Models\Order;
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

    public function show_payment(Order $orders)
    {
        $orders = Order::where('user_id', auth()->user()->id)
                        ->get();
        foreach ($orders as $order) {
            $snapToken = $order->snap_token;
            if (empty($snapToken)) {
                // Jika snap token masih NULL, buat token snap dan simpan ke database
     
                $midtrans = new CreateSnapToken($order);
                $snapToken = $midtrans->getSnapToken();
     
                $order->snap_token = $snapToken;
                $order->save();
            }
        }
        // return @dd(compact('orders'));
        return view('dashboard.payment', compact('orders', 'snapToken'));
    }
}
