@extends('app')
@section('content')
<div class="row about-container medium-uncollapse large-uncollapse">
  <div class="small-12 small-centered columns large-uncollapse">
    <!--Mission Statement -->
    <div class="small-12 case-description-container columns tac">
      <p class="case-adelie animated fadeInDown">
        <strong>ADELIE CASE STUDIES</strong>
      </p>
      <div class="case-client">
        <h2 class="animated fadeInDown"><strong>{{ $case->client_name }}</strong></h2>
        <h4 class="case-tagline animated fadeInDown">{{ $case->tagline }}</h4>
      </div>
      <p name="studyStart" class="case-description animated fadeIn">{{ $case->about }}</p>
      <div id="read-case-study-button" 
           class="" 
           href="#studyStart">
             <p>READ THE <BR/> CASE STUDY</p>
             <div>
               <i id="case-arrow" class="fa fa-arrow-down" aria-hidden="true"></i>
              </div>
      </div>
      <a href="/cases">or view more case studies</a> 
    </div>
  </div>
</div>
<div class="row phases-container">
  <div class="small-12 medium-8 medium-centered columns case-study">
    <h3>The Problem</h3>
    <p> {{ $case->phase_one}} </p>

    @if (isset($case->phase_two))
    <h3>Adelie's Solution</h3>
    <p> {{ $case->phase_two }} </p>
    @endif
    
    @if (isset($case->phase_three))
    <h3>More Details</h3>
    <p> {{ $case->phase_three }} </p>
    @endif
     

  </div>
  

</div>
<!-- Request A Quote CTA -->
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

