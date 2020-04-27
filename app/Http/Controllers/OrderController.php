<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth;
use App\Models\User;
use App\Models\Horoscope;

class OrderController extends Controller


{

    public function create() {

    }

    public function store(Request $request){

        $data = request()->validate([
                'name' =>'',
            'orderID'=>'',
    'reptype' => '',
            'email'=>'',
            'phone'=>'',
        ]);

        auth()->user()->orders->create([
            'name' => $data['name'],
            'orderID' => $data['orderid'],
            'reptype' => $data['reptype'],
            'email' => $data['email'],
            'phone' => $data['phone'],
        ]);
    }
}
