<?php

namespace App\Http\Controllers;

use App\Vastu;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use App\includes\Razorpay;


class VastuController extends Controller
{
    //

    public function store(Request $request)
    {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'cob' => 'required',
            'tob' => 'required',
            'gender' => '',
            'reftype' => '',
            'refdetails' => '',
            'comments' => '',
            'propertyImages' => 'max:5',
            'propertyImages.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = auth()->user();
        $user->id;
        $amount = "150000";
        $orderid = time() . '-' . $user->id;

        $images=array();
        if($files=$request->file('propertyImages')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('image',$name);
                $images[]=$name;
            }
        }

        auth()->user()->vastus()->create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'pob' => $data['pob'],
            'cob' => $data['cob'],
            'dob' => $data['dob'],
            'tob' => $data['tob'],
            'comments' => $data['comments'],
            'filenames' => implode("|",$images),
            'amount' => $amount,
            'orderID' => $orderid,
            'razorpayOrderId' => null,
        ]);

        Log::info('Showing vastu performance for report: ');


        return redirect()->route('vastupay')->with('orderid', $orderid);

    }

    public function vastupay()
    {
        try {
            $user = auth()->user();
            $neworderid = \Illuminate\Support\Facades\Session::get('orderid');

            $vastu = auth()->user()->vastus()->where([
                'orderID' => $neworderid,
            ])->first();

            if($vastu) {

                $amount = $vastu->amount;
                $name = $vastu->name;
                $phone = $vastu->phone;
                $email = $vastu->email;

                $api = new Api(config('app.razorpay'), config('app.razorsecret'));

                $orderData = [
                    'receipt' => $neworderid,
                    'amount' => $amount, // 2000 rupees in paise
                    'currency' => 'INR',
                    'payment_capture' => 1 // auto capture
                ];

                $razorpayOrder = $api->order->create($orderData);

                $razorpayOrderId = $razorpayOrder['id'];

                $vastu->razorpayOrderId = $razorpayOrderId;
                $vastu->save();

                $key = config('app.razorpay');

                $pay = [
                    "key" => $key,
                    "amount" => $amount,
                    "name" => "Astrolifeguide",
                    "description" => "",
                    "image" => "",
                    "prefill" => [
                        "name" => $name,
                        "email" => $email,
                        "contact" => $phone,
                    ],
                    "notes" => [
                        "address" => "",
                        "merchant_order_id" => $neworderid,
                        "user" => $user,
                    ],
                    "theme" => [
                        "color" => "#f05f1e"
                    ],
                    "order_id" => $razorpayOrderId,
                ];
                return view('pages.thankyou', ['pay' => $pay]);
            } else {
                echo "Invalid order iD";
            }
            //if completed
            // already completed
            //   else

        }catch (\Exception $e) {
            dd($e);
        }
    }

    public function show ($id)
    {
        $vastus = Vastu::findorfail($id);
        return view('vastu.show-report', compact('vastus'));
    }
}
