<?php

namespace App;

use App\Models\Horoscope;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function horoscope() {
        return $this->hasMany(Horoscope::class);
    }

    public function matchmaker() {
        return $this->hasMany(Matchmaker::class);
    }
}
