@extends('app')
@section('content')
<div class="row about-container medium-uncollapse large-uncollapse">
  <div class="small-12 small-centered medium-10 columns large-uncollapse">
    <!--Mission Statement -->
    <div class="small-12 case-description-container columns tac">
      <h1 class="animated fadeInDown"><strong>{{ $case->client_name }}</strong></h1>
      <p class="animated fadeIn">{{ $case->about }}</p>
       <a href="/cases">View All Case Studies</a> 
    </div>
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

