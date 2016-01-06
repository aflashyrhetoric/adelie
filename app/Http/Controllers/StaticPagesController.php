<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{

    // Redirect back to home
    public function redirectToHome()
    {
       return redirect('/');
    }

    // About
    public function about(){
        return view('about');
    }

    /*********************************/
    /******* SERVICES SECTION ********/
    /*********************************/
    public function webdev()
    {
       return view('services.webdev');
    }

    public function graphicDesign(){
        return view('services.graphic_design');
    }

    public function branding(){
        return view('services.branding');
    }


    public function meet(){
        return view('partials.meet');
    }

    public function contact(){
        return view('partials.contact');
    }

    // SEND CONTACT MESSAGE
    public function sendMessage(Request $request)
    {
       // Send contact message 
    }

}
