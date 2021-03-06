<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CaseCreateRequest;
use Illuminate\Support\Facades\Input;

use App\CaseStudy;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CaseStudiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = CaseStudy::all();
        return view('casestudy.index', ['cases' => $cases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $this->middleware('auth');
      return view('casestudy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CaseCreateRequest $request)
    {
      // Get Thumbnail Image
      $thumbnail = $request->file('thumbnail');
      $thumbnail_url = public_path() . '/images/';
      $thumbnail_filename = time() . '-' . $thumbnail->getClientOriginalName();
      $thumbnail_location = $thumbnail_url . $thumbnail_filename;
      $thumbnail->move($thumbnail_url, $thumbnail_filename);
      // Get Hero Image
      $hero = $request->file('hero');
      $hero_url = public_path() . '/images/';
      $hero_filename = time() . '-' . $hero->getClientOriginalName();
      $hero_location = $hero_url . $hero_filename;
      $hero->move($hero_url, $hero_filename);

      $new_study = new CaseStudy;
      $new_study->client_name = $request->input('client_name');
      $new_study->tagline = $request->input('tagline');
      $new_study->about = $request->input('about');
      $new_study->thumbnail_url = $thumbnail_filename;
      $new_study->hero_url = $hero_filename;
      $new_study->phase_one = $request->input('phase_one');
      //dd($request->input('phase_one'));
      //dd($request);
      if($request->exists('phase_two')){
        $new_study->phase_two = $request->input('phase_two');
      }
      if($request->exists('phase_three')){
        $new_study->phase_three = $request->input('phase_three');
      }
      $new_study->save();
      //$new_study = CaseStudy::create($request->all());
      return view('casestudy.success', ['image' => $thumbnail_filename ]);
      //$new_study = CaseStudy::create($request->all());
      //return redirect('/cases');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $case = CaseStudy::find($id);
      return view('casestudy.show', ['case' => $case]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
