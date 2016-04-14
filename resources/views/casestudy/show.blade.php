@extends('app')
@section('content')

<div class="case-study-header">
  <div class="case-study-title-container 
              small-12 small-centered 
              large-6 medium-uncentered columns">
   <h2>{{ $case->client_name }}</h2>
   <p> {{ $case->tagline }} </p>
  </div>
  <div class="small-12 small-centered 
              large-6 medium-uncentered columns">
    <img src="{{ $case->thumbnail_url }}" 
    alt="{{ $case->client_name }}'s Case Study'">
  </div>
</div>
  


<div class="
  small-12
  tac
  columns cases-cta boxed">
  <h1>Ready to begin?</h1>
  <h4>Let's build something great.</h4>
  <hr class="mini-hr">
  <a class="button about-button" href="/request">Request A Quote</a>
  <br>
  <a href="meet">Or, meet the team!</a>
</div>
</div>
@endsection
