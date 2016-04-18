@extends('app')
@section('content')

<div class="row case-study-header">
  <!-- Client Name -->
  <div class="case-study-title-container 
              small-12 small-centered 
              large-6 medium-uncentered columns">
   <h1 class="case-title">
     {{ $case->client_name }}
   </h1>
   <h4 class="case-tagline"> 
     {{ $case->tagline }} 
   </h4>
   <p class="case-description">
      {{ $case->about }}
   </p>
  </div>
  <!-- Hero Image -->
  <div class="small-12 small-centered 
              medium-7 medium-centered 
              large-5 large-offset-1 large-uncentered
              columns">
    <!-- Hero image -->
    <img class="case-thumbnail show-for-medium-up" src="/images/{{ $case->hero_url }}" 

    <!-- Substitute thumbnail for hero image on small screens -->
    <img class="case-thumbnail show-for-small-only" src="/images/{{ $case->thumbnail_url }}">
  </div>
</div>
<div class="phase phase-one row tac">
  <div class="small-12 small-centered medium-8 large-7 columns">
    <i class="fa fa-3x fa-search phase-icon" aria-hidden="true"></i>
    <h2 class="title">phase one</h2>
    <h4 class="subtitle">Identifying Problems & Goals</h4>
    <p class="phase-description">
      {{ $case->phase_one }}
    </p>
</div>
</div>

@if (isset($case->phase_two))
<div class="phase phase-two row tac">
  <div class="small-12 small-centered medium-8 large-7 columns">
    <i class="fa fa-3x fa-briefcase phase-icon" aria-hidden="true"></i>
    <h1 class="title">phase two</h1>
    <h4 class="subtitle">Crafting Solutions</h4>
    <p class="phase-description">
      {{ $case->phase_two }}
    </p>
  </div>
</div>
@endif

@if (isset($case->phase_three))
<div class="phase phase-three row tac">
  <div class="small-12 small-centered medium-8 large-7 columns">
    <i class="fa fa-3x fa-server phase-icon" aria-hidden="true"></i>
    <h1 class="title">phase three</h1>
    <h4 class="subtitle">Implementing Solutions</h4>
    <p class="phase-description">
      {{ $case->phase_three }}
    </p>
  </div>
</div>
@endif

<div class="row">
  <div class="small-12 medium-4 small-centered columns tac">
   <a class="button" href="/cases">Read More Studies</a>
   <hr>
  </div>
</div>

<!-- CTA --> 
<div class="row">
  <div class="
    small-12
    medium-4
    small-centered
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
