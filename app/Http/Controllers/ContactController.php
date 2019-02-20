<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mail\ContactEmail;
use Mail;

class ContactController extends Controller {

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {

    $contact = [];

    $contact['name'] = $request->get('name');
    $contact['email'] = $request->get('email');
    $contact['msg'] = $request->get('msg');

    // Mail delivery logic goes here
    Mail::to('contactus.planetenergy@gmail.com')->send(new ContactEmail($contact));
    //

    // flash('Your message has been sent!')->success();

    return redirect()->route('contact.create');

    }

}
