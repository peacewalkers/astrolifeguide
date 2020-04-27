<?php

namespace App\Http\Controllers;

use App\Mail\RequestReceived;
use App\Models\User;
use App\Models\Horoscope;
use App\Models\Order;
use Illuminate\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\RazorpayController;
use jeremykenedy\LaravelRoles\Models\Role;
use App\Models\Profile;
use App\Traits\CaptureIpTrait;
use Validator;



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
            'amount'    => '',
            'paymenttype' =>    '',
            'paymentstatus' => '',
            'reftype'=> '',
            'refdetails'   => '',
            'comments' => '',
        ]);

        $user = auth()->user();
        $orderid = time() . '-' . $user->id;

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
            'refdetails'=> $data['refdetails'],
        ]);


        /*    Mail::to($data['email'])->send(new RequestReceived());*/

        return redirect('/thankyou');
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

