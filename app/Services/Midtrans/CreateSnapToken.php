<?php
 
namespace App\Services\Midtrans;
 
use Midtrans\Snap;
use App\Models\Order;
use App\Models\User;

 
class CreateSnapToken extends Midtrans
{
    protected $order;
 
    public function __construct($order)
    {
        parent::__construct();
 
        $this->order = $order;
    }
 
    public function getSnapToken()
    {
        $orders = Order::where('user_id', auth()->user()->id)->where('payment_status', 1)->get();
        $user = User::where('id', auth()->user()->id)->first();
        foreach ($orders as $order) {
            $params = [
                'transaction_details' => [
                    'order_id' => $order->number,
                    'gross_amount' => $order->price
                ],
                'customer_details' => [
                    'first_name' => $user->full_name,
                    'email' => $user->email,
                    'phone' => $user->no_telepon,
                ]
            ];
        }
 
        $snapToken = Snap::getSnapToken($params);
 
        return $snapToken;
    }
}