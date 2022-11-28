<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['users_id','price'];

    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
