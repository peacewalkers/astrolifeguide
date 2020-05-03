<?php

namespace App;
namespace App\Models;

use App\Payment;
use Illuminate\Database\Eloquent\Model;


class Matchmaker extends Model
{
    protected $table = 'matchmakers';

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
