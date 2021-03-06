@extends('app')
@section('content')
<div class="row about-container medium-uncollapse large-uncollapse">
  <div class="small-12 small-centered medium-10 columns large-uncollapse">
    <!--Mission Statement -->
    <div class="small-12 mission-statement columns tac">
      <h1 class="animated fadeInDown"><strong>Why?</strong></h1>
      <h2 class="animated fadeIn">We aim to elevate <span class="about-highlight">small businesses</span> by leveraging the power of the web through design.</h2>
    </div>
    <div class="small-12 medium-4 reason columns">
      <i class="fa fa-4x fa-users"></i>
      <h4>Who?</h4>
      <p>We are a small, full-service agency. <br>Co-founded by Kevin and Yuna, a dynamic duo with a heart for endeavoring small businesses. To read more about us, please visit <a href="/meet">here!</a></p>
    </div>
    <div class="small-12 medium-4 reason columns">
      <i class="fa fa-4x fa-question"></i>
      <h4>What?</h4>
      <p>We offer <a href="/services/webdev">web design & development</a>, <a href="/services/graphic_design">graphic design</a>, and <a href="/services/branding">branding</a> services. We'll work with you to find a solution that suits your budget, timeline, and specific requirements.</p>
    </div>
    <div class="small-12 medium-4 reason columns end">
      <i class="fa fa-4x fa-map-marker"></i>
      <h4>Where?</h4>
      <p>Adelie is based on Long Island, NY. <br>We work primarily within the Suffolk County area, but are entirely comfortable with a remote workflow. If you're interested in doing work, feel free to <a href="/contact">contact us</a> even if you're not located in NY.</p>
    </div>
  </div>

    <div class="
    small-12 
    tac 
    columns">
        <br>
        <h1>Ready to begin?</h1>
        <h4>Let's build something great.</h4>
        <hr class="mini-hr">
        <a class="button about-button" href="/request">Request A Quote</a>
        <br>
        <a href="meet">Or, meet the team!</a>
    </div>
</div>
@endsection
