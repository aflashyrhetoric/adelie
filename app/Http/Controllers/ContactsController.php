<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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

    public function sendMessage(Request $request)
    {
       // Send contact message 
    }
}
