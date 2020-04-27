<?php

namespace App;
namespace App\Models;

use App\Payment;
use Illuminate\Database\Eloquent\Model;


class Matchmaker extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function payment() {
        return $this->hasMany(Payment::class);
    }
}
