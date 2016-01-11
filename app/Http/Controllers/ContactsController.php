<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    /**
     * Display new message form
     *
     * @return \Illuminate\Http\Response
     */
    public function newMessage()
    {
        return view('partials.contact');
    }

    public function sendMessage(ContactFormRequest $request)
    {

        Mail::send('emails.contact',
            array (
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
                ), function($message){

                $message->from('adelieweb@gmail.com', 'New Message');
                $message->to('contact@adelieweb.com')->subject('ADELIE | New Message');
            });
        return Redirect::to('/thankyou')
        ->with('flash_message', 'Message sent.');
    }

    public function thankYou(Request $request) {
        return view('partials.thankyou');
    }
}
