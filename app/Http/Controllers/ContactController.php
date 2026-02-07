<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContactMail;

class ContactController extends Controller
{
    
    public function __invoke(ContactRequest $request)
    {
        Mail::to('dev8chak@gmail.com')->send(new NewContactMail($request->name, $request->email, $request->body));
        return redirect()->back();
    }
}
