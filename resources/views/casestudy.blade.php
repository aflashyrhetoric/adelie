@extends('app')
@section('content')
<div class="row about-container medium-uncollapse large-uncollapse">
  <div class="small-12 small-centered medium-10 columns large-uncollapse">
    <!--Mission Statement -->
    <div class="small-12 mission-statement columns tac">
      <h1 class="animated fadeInDown"><strong>Case Studies</strong></h1>
      <p>An inside look at how we approach and solve real business problems.</p>
      <p class="case-description">Our <a href="/portfolio">Portfolio</a> serves as a general overview of the work we've done, but we wanted a separate space to dive in and discuss our thought process when approaching client's problems.</p>
    </div>
  </div>
</div>
<div class="case-study-container">
  <div class="row">
    
    @foreach ($cases as $case)
     <p>This is user {{ $case -> id }}</p>
    @endforeach

    <div class="small-12 medium-4 case-study-item columns">
      <img src="http://placehold.it/350x350">
    </div>
    <div class="small-12 medium-4 case-study-item columns">
      <img src="http://placehold.it/350x350">
    </div>
    <div class="small-12 medium-4 case-study-item columns">
      <img src="http://placehold.it/350x350">
    </div>
  </div>
  <div class="row">
    <div class="small-12 medium-4 case-study-item columns">
      <img src="http://placehold.it/350x350">
    </div>
    <div class="small-12 medium-4 case-study-item columns">
      <img src="http://placehold.it/350x350">
    </div>
    <div class="small-12 medium-4 case-study-item columns">
      <img src="http://placehold.it/350x350">
    </div>
  </div>
</div>
<!-- Request A Quote CTA -->
<div class="
  small-12
  tac
  columns">
  <hr>
  <h1>Ready to begin?</h1>
  <h4>Let's build something great.</h4>
  <hr class="mini-hr">
  <a class="button about-button" href="/request">Request A Quote</a>
  <br>
  <a href="meet">Or, meet the team!</a>
</div>
</div>
@endsection
