@extends('app')
@section('content')
<div class="row about-container medium-uncollapse large-uncollapse">
  <div class="small-12 small-centered medium-10 columns large-uncollapse">
    <!--Mission Statement -->
    <div class="small-12 case-description-container columns tac">
      <h1 class="animated fadeInDown">
        <strong>Case Studies</strong>
      </h1>
      <p>An inside look at how we approach and solve real business problems.</p>
      <p class="case-description">Our <a href="/portfolio">Behance Portfolio</a> serves as a visual overview of graphic design work we've done,<br> but we wanted a separate space to dive in and discuss our thought process when approaching client's problems.</p>
    </div>
  </div>
</div>
<div class="case-study-container">
  @foreach ($cases->chunk(3) as $case_row)
  <div class="column row large-uncollapse">
    @foreach ($case_row as $case)
    <div class="small-12 medium-4 case-study-item columns">
      <a href="{{ $case->url }}"><img src="http://placehold.it/350x350"></a>
      <p>This is user {{ $case -> client_name }} </p>
    </div>
    @endforeach
  </div>
    @endforeach 
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
