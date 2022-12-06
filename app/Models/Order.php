<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['user_id','number','price','payment_status','snap_token'];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
