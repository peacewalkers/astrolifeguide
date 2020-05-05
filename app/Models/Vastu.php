<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Vastu extends Model
{
    protected $table = 'vastus';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' ,
        'orderID',
        'email',
        'phone',
        'pob',
        'dob',
        'cob',
        'tob',
        'gender',
        'amount',
        'paymenttype',
        'paymentstatus',
        'reftype',
        'refdetails',
        'comments',
        'filenames',
        'razorpayOrderId',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
