<?php

namespace App\Http\Controllers;

use App\Mail\RequestReceived;
use App\User;
use App\Matchmaker;

use App\Models\Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Traits\CaptureIpTrait;
use Validator;
use Razorpay\Api\Api;
use App\includes\Razorpay;

class MatchmakerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    public function index()
    {
        $paginationEnabled = config('usersmanagement.enablePagination');
        if ($paginationEnabled) {
            $matchmakers = Matchmaker::paginate(config('usersmanagement.paginateListSize'));
        } else {
            $matchmakers = Matchmaker::orderby('id', 'desc')->paginate(5);
        }

        return view('matchmaker.show', compact('matchmakers'));
    }

    public function create()
    {
        return view('matchmaker.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'pob' => 'required',
            'dob' => 'required ',
            'tob' => 'required',
            'cob' => 'required',
            'gender' => '',
            'paymenttype' => '',
            'paymentstatus' => '',
            'reftype' => '',
            'refdetails' => '',

            'comments' => '',

            'nameone' => 'required',
            'pobone' => 'required',
            'dobone' => 'required',
            'cobone' => 'required',
            'tobone' => 'required',

            'nametwo' => 'nullable|string',
            'pobtwo' => 'nullable|string',
            'dobtwo' => 'nullable|string',
            'tobtwo' => 'nullable|string',
            'cobtwo' => 'nullable|string',

            'namethree' => 'nullable|string',
            'pobthree' => 'nullable|string',
            'dobthree' => 'nullable|string',
            'tobthree' => 'nullable|string',
            'cobthree' => 'nullable|string',
        ]);

        $user = auth()->user();
        $amount = "150000";
        $orderid = time() . '-' . $user->id;
        Log::info('Showing matchmaker form: ');

        try{
        auth()->user()->matchmakers()->create([

            'name' => $data['name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'pob' => $data['pob'],
            'dob' => $data['dob'],
            'tob' => $data['tob'],
            'cob' => $data['cob'],
            'comments' => $data['comments'],

            'nameone' => $data['nameone'],
            'pobone' => $data['pobone'],
            'dobone' => $data['dobone'],
            'tobone' => $data['tobone'],
            'cobone' => $data['cobone'],

            'nametwo' => $data['nametwo'],
            'pobtwo' => $data['pobtwo'],
            'dobtwo' => $data['dobtwo'],
            'tobtwo' => $data['tobtwo'],
            'cobtwo' => $data['cobtwo'],

            'namethree' => $data['namethree'],
            'pobthree' => $data['pobthree'],
            'dobthree' => $data['dobthree'],
            'tobthree' => $data['tobthree'],
            'cobthree' => $data['cobthree'],

            'orderID' => $orderid,
            'amount' => $amount,
            'razorpayOrderId' => null,
        ]);
    }catch (\Exception $e) {
dd($e);
}
        return redirect()->route('matchmakerpay')->with('orderid', $orderid);
    }


    public function matchmakerpay()
    {
        try {
            $user = auth()->user();

            $neworderid = \Illuminate\Support\Facades\Session::get('orderid');

            $matchmaker = auth()->user()->matchmakers()->where([
                'orderID' => $neworderid,
            ])->first();

            if($matchmaker) {

                $amount = $matchmaker->amount;

                $api = new Api(config('app.razorpay'), config('app.razorsecret'));

                $orderData = [
                    'receipt' => $neworderid,
                    'amount' => $amount, // 2000 rupees in paise
                    'currency' => 'INR',
                    'payment_capture' => 1 // auto capture
                ];

                $razorpayOrder = $api->order->create($orderData);

                $razorpayOrderId = $razorpayOrder['id'];

                $matchmaker->razorpayOrderId = $razorpayOrderId;
                $matchmaker->save();

                $key = config('app.razorpay');

                $pay = [
                    "key" => $key,
                    "amount" => $amount,
                    "name" => "Astrolifeguide",
                    "description" => "",
                    "image" => "",
                    "prefill" => [
                        "name" => "",
                        "email" => "",
                        "contact" => "",
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


    public function search(Request $request)
    {
        $searchTerm = $request->input('matchmaker_search_box');
        $searchRules = [
            'matchmaker_search_box' => 'required|string|max:255',
        ];
        $searchMessages = [
            'matchmaker_search_box.required' => 'Search term is required',
            'matchmaker_search_box.string'   => 'Search term has invalid characters',
            'matchmaker_search_box.max'      => 'Search term has too many characters - 255 allowed',
        ];

        $validator = Validator::make($request->all(), $searchRules, $searchMessages);

        if ($validator->fails()) {
            return response()->json([
                json_encode($validator),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $results = Matchmaker::where('id', 'like', $searchTerm.'%')
            ->orWhere('name', 'like', $searchTerm.'%')
            ->orWhere('phone', 'like', $searchTerm.'%')
            ->orWhere('email', 'like', $searchTerm.'%')->get();


        return response()->json([
            json_encode($results),
        ], Response::HTTP_OK);
    }


    public function show ($id)
    {
        $matchmakers = Matchmaker::findorfail($id);
        return view('matchmakers.show-report', compact('matchmakers'));
    }


}

