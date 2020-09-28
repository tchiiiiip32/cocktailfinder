<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getForm()
    {
        return view('contact');
    }

    public function postForm(ContactRequest $request)
    {
        Mail::send('emails.contact', $request->all(), function($message)
        {
            $message->to('monadresse@free.fr')->subject('Contact');
        });

        return view('confirm');
    }

    // finir le MVC contact

}
