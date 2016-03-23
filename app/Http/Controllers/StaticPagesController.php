<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CaseStudy;
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
        return view('partials.about');
    }

    /*********************************/
    /******* SERVICES SECTION ********/
    /*********************************/
    public function webdev()
    {

    $current_service = 'Web Development';
    return view('services.webdev')->with('current_service', 
        $current_service);
    }

    public function graphicDesign(){
        $current_service = 'Graphic Design';
        return view('services.graphic_design')->with('current_service', $current_service);
    }

    public function branding(){
        $current_service = 'Branding';
        return view('services.branding')->with(
            'current_service', $current_service);
    }

    public function meet(){
        return view('partials.meet');
    }

}
