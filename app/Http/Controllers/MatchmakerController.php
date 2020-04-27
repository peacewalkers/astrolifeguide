<?php

namespace App\Http\Controllers;

use App\Mail\RequestReceived;
use App\Models\User;
use App\Models\Matchmaker;
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
            'pob'   =>  'required',
            'dob'   =>  'required | date',
            'tob'   =>  'required',
            'cob'   =>  'required',
            'gender'=>  '',
            'amount'    => '',
            'paymenttype' =>    '',
            'paymentstatus' => '',
            'reftype'=> '',
            'refdetails'   => '',

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

        auth()->user()->matchmakers()->create([
            'name' => $data['name'],
            'gender'  => $data['gender'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'pob'   =>  $data['pob'],
            'dob'   =>  $data['dob'],
            'tob'   =>  $data['tob'],
            'cob'   =>  $data['cob'],
            'comments' =>$data['comments'],

            'nameone' => $data['nameone'],
            'pobone'   =>  $data['pobone'],
            'dobone'   =>  $data['dobone'],
            'tobone'   =>  $data['tobone'],
            'cobone'   =>  $data['cobone'],

            'nametwo' => $data['nametwo'],
            'pobtwo'   =>  $data['pobtwo'],
            'dobtwo'   =>  $data['dobtwo'],
            'tobtwo'   =>  $data['tobtwo'],
            'cobtwo'   =>  $data['cobtwo'],

            'namethree' => $data['namethree'],
            'pobthree'   =>  $data['pobthree'],
            'dobthree'   =>  $data['dobthree'],
            'tobthree'   =>  $data['tobthree'],
            'cobthree'   =>  $data['cobthree'],

        ]);


        Mail::to($data['email'])->send(new RequestReceived());
        return redirect('/thankyou');    }

    public function update()
    {

    }

  /*  public function show ($id)
    {
        $matchmakers = Matchmaker::findorfail($id);
        return view('matchmaker.show-report', compact('matchmakers'));
    }*/

    public function destroy()
    {

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

