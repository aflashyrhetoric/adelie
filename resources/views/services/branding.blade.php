@extends('app')
@section('content')
<div class="branding-hero service-hero hide-for-small-only">
  <div class="service-hero-inner hide-for-small-only small-12 small-centered
    medium-5 medium-offset-1
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
    medium-5 medium-offset-1
    large-uncentered
    columns boxed
    ">
    <!--Introduction -->
    <p><em>In this section, we define and discuss <em>branding</em> so that anyone interested can learn more about our process before spending a dime. <strong>If you'd like an estimate, please <a href="/contact">click here to contact us.</a></strong> You may also explore our other services by clicking in the dropdown below.</em></p>
    @include('services/_dropdown')
    <br>
    <h4 id="introduction" class="anchor-item">It's not just a logo.</h4>
    <p>Of course it’s not less than that - but a brand is much more than just having a nice logo. It begins with you and what you want to communicate to your target demographic. Through the thoughtful curation of the right aesthetic, you can help others visually identify your good work! </p>
    
    <p>Adelie will help you come up with a visual identity that speaks to your strengths, values, ideas, and even the unique personality of your <em>entity</em>. An inconsistent look can cause consumer indifference or confusion whereas a consistent visual identity across all promotional platforms will ultimately help your clients/audience to find you, refer you, and remember you in order to utilize your services. </p>
    <p><em>If you <strong>only</strong> need a logo design/re-design, please <a href="/services/graphic_design">see the graphic design page.</a></em></p>
    <p><strong>What does a full Adelie visual brand package include?</strong></p>
    <p>Our visual brand package will include the custom components you need designed, starting with:</p>
    <ul>
      <li><strong>Logo design (or redesign)</strong></li>
      <ul>
        <li>
        Designs in full color, black/white, a version for light backgrounds, a version for dark backgrounds. </li>
        <li><em>Designs will be given in the formatting you need for print and/or web use.</em>
        </li>
      </ul>
      <li><strong>Full Style Kit</strong></li>
      <ul>
        <li><em>Font Kit</em>: Standardized fonts for all communications</li>
        <li><em>Color Kit</em>: Developed corporate color palettes.</li>
      </ul>
      <li><strong>Additional Branding Services:</strong></li>
      <ul>
        <li>Name*</li>
        <li>Slogan*</li>
        <li>Symbol Kit* (Matching digital icons, signs, buttons, etc., for your site)</li>
        <li>Print Media*</li>
        <ul>
          <li>Banners</li>
          <li>Posters</li>
          <li>Postcards</li>
          <li>Business Cards</li>
          <li>Letterheads, stickers, stamps (& other stationery items)</li>
          <li>and more...</li>
        </ul>
        <li>Promotional Merchandise *</li>
        <ul>
          <li>Clothing (t-shirts, hats, sweatshirts, etc)</li>
          <li>Promotional trinkets (pens, post-its, mugs, etc)</li>
          <li>and more...</li>
        </ul>
      </ul>
    </ul>
    <p>* As needed, to be detailed further on a case-by-case basis in your contract.</p>
    <p>We are happy to work with you to come up with the best package of visual brand components that meet your needs, timeline, and budget.</p>
    <p><a class="button" href="/contact">To request a quote, click here.</a></p>

  </div>
  <hr class="show-for-small-only">
  <!-- Sidebar -->
  <div class="
    small-12
    medium-4 medium-offset-1 end
    columns webdev-process boxed">
    <h2>Our Process</h2>
    <h4>Getting started is easy.</h4>
    <hr>
    <ol>
      <li><strong>You</strong> fill out our <a href="https://adelie.typeform.com/to/uO6UfN">Visual Branding Questionnaire.</a></li>
      <li><strong>We</strong> assess your specific needs regarding visual brand components, budget, etc. and send you a project proposal including a detailed quote. </li>
      <li><strong>You</strong> will have the chance to review our proposal to confirm we’re on the right track. </li>
      <li>Once the proposal is accepted, <strong>we</strong> will send you a contract detailing the timeline of the whole project including estimated delivery dates for proofs and payment schedule(s). </li>
      <li><strong>We</strong> both sign a contract that protects both parties.</li>
      <li>Once the agreed upon down payment is received, <strong>we</strong> will begin the design process!</li>
      <li>Through the rounds of proofs, <strong>you</strong> will have regular opportunities to offer constructive feedback so we can both track with the direction of the project. </li>
      <li>Once <strong>you</strong> are satisfied with your visual brand components, the final kit will be delivered electronically.</li>
      <li><strong>Congratulations! You are finished!</strong></li>
      <li><em>We're flexible! At any time during this process we are happy to work with you to make this as smooth an experience as possible. We sincerely appreciate your feedback.</em> </li>
    </ol>
  </div>
  <!--Second section -->
  <div class="
    small-12 medium-4 medium-offset-1 columns cta-box boxed">
    <h3>Interested in branding services?</h3>
    <hr class="mini-hr">
    <a class="button" href="contact">Request A Quote</a>
  </div>
  <hr class="show-for-small-only">
</div>
@endsection