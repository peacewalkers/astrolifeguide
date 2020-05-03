<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function create() {
        return view('contact');
    }

    public function store ()
    {

            $data = request()->validate([
                'name' => 'required|min:5|max:35',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'subject' => 'required',
                'message' => 'required',
            ]);

            $contact = Contact::create([

                'name' => $data['name'],
                'subject' => $data['subject'],
                'message' => $data['message'],
                'email' => $data['email'],
                'phone' => $data['phone'],
            ]);

            $contact->save();

        return view('welcome');

    }
}
