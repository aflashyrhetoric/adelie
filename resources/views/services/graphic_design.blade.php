@extends('app')
@section('content')
<div class="graphicdesign-hero service-hero hide-for-small-only">
  <div class="service-hero-inner small-12 small-centered
    medium-8 
    large-6
    columns">
    <h2><strong>Services</strong></h2>
    <h2>/</h2>
    <h2> {{$current_service }} </h2>
  </div>
</div>
<div class="small-hero show-for-small-only">
  <h1>{{$current_service}}</h1>
</div>
<div class="row service-container large-uncollapse">
  <div class="
    small-12 
    medium-7 
    medium-centered process-title columns">
    <h2>Our Process</h2>
    <h4>Getting started is easy.</h4>
  </div>
  <div class="
    small-12
    medium-9 medium-centered
    large-7
    columns process graphic-design-process boxed">
    <ol>
    <li><strong>You</strong> fill out our <a href="https://adelie.typeform.com/to/q4RsNk">Graphic Design Project Form.</a></li>
    <li><strong>We</strong> assess your answers, if all the elements are ready (copy, photos, etc.), we will send you a detailed quote with projected date of delivery.</li>
    <li>Once the quote and delivery date are accepted, <strong>we both</strong> will sign off on the agreement.</li>
    <li>Once the deposit (if any) is made, the project will begin! </li>
    <li>Once <strong>you</strong> are satisfied with the completed design, the final item(s) will be delivered electronically.</li>
    <li><strong>Congratulations! You are finished!</strong></li>
    <li><em>We're flexible. At any time during this process, we are happy to work with you to make your experience as smooth as possible. We sincerely appreciate your feedback.</em></li>
    </ol>
  </div>
  <div class="
    small-12 
    medium-7 
    medium-centered process-title columns">
    <h2>What is graphic design?</h2>
    <h4>Learn more below.</h4>
  </div>
  <div class="
    small-12
    medium-9 medium-centered
    large-7
    columns process graphic-design-process boxed
    ">
    <!--Introduction -->
    <p><em>In this section, we define and discuss graphic design so that anyone interested can learn more about our process before spending a dime. <strong>If you'd like an estimate, please <a href="/contact">click here to contact us.</a></strong> You may also explore our other services by clicking in the dropdown below.</em></p>
    @include('services/_dropdown')
    <br>
    <h4 id="introduction" class="anchor-item">Introduction</h4>
    <hr>
    <p>We will work with you to design the most beautiful items for your needs. </p>
    <p>Please fill out this project request form so we can get started!</p>
    <p><strong>These are some of the things we can design for you.</strong></p>
    <ul>
      <li>Banners</li>
      <li>Booklets</li>
      <li>Brochures</li>
      <li>Business Cards</li>
      <li>Flyers</li>
      <li>Greeting Cards</li>
      <li>Logos (new from scratch or redesigned from an existing concept)</li>
      <li>Postcards</li>
      <li>Posters</li>
      <li>Signs</li>
      <li>Stationery</li>
    </ul>
    <p>If there is something you need that is not listed above, <a href="/contact">please let us now.</a> Chances are we've designed it before. But if not, we are happy to accept the challenge or recommend the next best move.</p>
    <p><em>* If you need more than just a logo design, please <a href="/services/branding">see our visual branding section.</a></em></p>
  </div>
  <hr class="show-for-small-only">
  <!-- Sidebar -->
  <!--Second section -->
  <div class="
    small-11 small-centered
    medium-9 
    large-5
    columns cta-box boxed">
    <h3>Interested in graphic design services?</h3>
    <hr class="mini-hr">
    <a class="button" href="/request">Request A Quote</a>
  </div>
  <hr class="show-for-small-only">
</div>
@endsection
