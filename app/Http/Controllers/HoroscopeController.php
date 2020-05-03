<?php

namespace App\Http\Controllers;

use App\Mail\RequestReceived;
use App\Models\User;
use App\Models\Horoscope;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Traits\CaptureIpTrait;
use Validator;
use Razorpay\Api\Api;
use App\includes\Razorpay;


class HoroscopeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * Display a listing of the users
     *
     * @param  \App\Models\Horoscope  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $paginationEnabled = config('usersmanagement.enablePagination');
        if ($paginationEnabled) {
            $horoscopes = Horoscope::paginate(config('usersmanagement.paginateListSize'));
        } else {
            $horoscopes = Horoscope::orderby('id', 'desc')->paginate(5);
        }

        return view('horoscope.show', compact('horoscopes'));
    }

    public function create() {
        return view('horoscope.create');
    }

    public function show ($id)
    {
        $horoscopes = Horoscope::findorfail($id);
        return view('horoscope.show-report', compact('horoscopes'));
    }

    public function store()
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
            'reptype' => 'required',
            'amount' => '',
            'paymenttype' => '',
            'paymentstatus' => '',
            'reftype' => '',
            'refdetails' => '',
            'comments' => '',
        ]);

        $user = auth()->user();
        $user->id;
        $amount= "12000";
        $orderid = time() . '-' . $user->id;
        $type = $data['reptype'];


        auth()->user()->horoscopes()->create([
            'name' => $data['name'],
            'orderID' => $orderid,
            'reptype' => $data['reptype'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'pob' => $data['pob'],
            'cob' => $data['cob'],
            'dob' => $data['dob'],
            'tob' => $data['tob'],
            'comments' => $data['comments'],
            'reftype' => $data['reftype'],
            'refdetails' => $data['refdetails'],
            'amount' => $amount,
            'razorpayOrderId' => null
        ]);
        Log::info('Showing user profile for user: ');

        return redirect()->route('horoscopepay')->with('orderid', $orderid);
    }

    public function horoscopepay()
    {
        try {
                $user = auth()->user();

                $neworderid = \Illuminate\Support\Facades\Session::get('orderid');

                $horoscope = auth()->user()->horoscopes()->where([
                    'orderID' => $neworderid,
                ])->first();

             if($horoscope) {

                 $amount = $horoscope->amount;

                 $api = new Api(config('app.razorpay'), config('app.razorsecret'));

                 $orderData = [
                     'receipt' => $neworderid,
                     'amount' => $amount, // 2000 rupees in paise
                     'currency' => 'INR',
                     'payment_capture' => 1 // auto capture
                 ];

                 $razorpayOrder = $api->order->create($orderData);

                 $razorpayOrderId = $razorpayOrder['id'];

                 $horoscope->razorpayOrderId = $razorpayOrderId;
                 $horoscope->save();

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



    public function edit($id, User $user, Horoscope $horoscope)
    {
        $horoscopes = Horoscope::all();
        return view('horoscope.edit', compact('horoscopes'));
    }

    public function destroy(Horoscope $horoscopes) {
        $horoscopes->delete();
        return back();
    }

    /**
     * Method to search the users.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $searchTerm = $request->input('horoscope_search_box');
        $searchRules = [
            'horoscope_search_box' => 'required|string|max:255',
        ];
        $searchMessages = [
            'horoscope_search_box.required' => 'Search term is required',
            'horoscope_search_box.string'   => 'Search term has invalid characters',
            'horoscope_search_box.max'      => 'Search term has too many characters - 255 allowed',
        ];

        $validator = Validator::make($request->all(), $searchRules, $searchMessages);

        if ($validator->fails()) {
            return response()->json([
                json_encode($validator),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $results = Horoscope::where('orderID', 'like', $searchTerm.'%')
            ->orWhere('reptype', 'like', $searchTerm.'%')
            ->orWhere('name', 'like', $searchTerm.'%')
            ->orWhere('phone', 'like', $searchTerm.'%')
            ->orWhere('email', 'like', $searchTerm.'%')->get();


        return response()->json([
            json_encode($results),
        ], Response::HTTP_OK);
    }

}