@extends('app')
@section('content')
<div class="webdev-hero service-hero">
  <div class="service-hero-inner small-12 small-centered
    medium-8 medium-offset-1
    columns">
    <h2><strong>Services</strong></h2>
    <h2>/</h2>
    <h2> {{$current_service }} </h2>
  </div>
</div>
<div class="row service-container large-uncollapse">
  <div class="
    small-12
    medium-5 medium-offset-1
    large-uncentered
    columns boxed
    ">
    <!--Introduction -->
    <p><em>In this section, we define and discuss graphic design so that anyone interested can learn more about our process before spending a dime. <strong>If you'd like an estimate, please <a href="/contact">click here to contact us.</a></strong> You may also explore our other services by clicking in the dropdown below.</em></p>
    @include('services/_dropdown')
    <br><hr>
    <h4 id="introduction" class="anchor-item">Introduction</h4>
    <hr>
    <p>We will work with you to design the most beautiful items for your needs. </p>
    <p>Please fill out this project request form so we can get started!</p>
    <p><strong>A website allows you to:</strong></p>
    <ul>
      <li>Generally showcase your business</li>
      <li>Display your products & services</li>
      <li>Expand your reach beyond the local community</li>
      <li>Run promotional events</li>
      <li>Talk to your customers via a blog</li>
      <li>Show off photos</li>
      <li>Encourage newsletter signups</li>
      <li><strong>So much more.</strong></li>
    </ul>
    <p>But frankly, even though <em>visiting</em> a website is as easy as clicking a button, <em>creating</em> a website is not.</p>
    <a href="#top">(Back To Top)</a><br><br>
    <!--Whats It Take? -->
    <h4 id="whatsittake" class="anchor-item">2. What does it take to make a site?</h4>
    <hr>
    <p>We'll give you a glimpse into what we do here at Adelie. </p>
    <p>Here are some of the steps required in creating a well-designed, modern website. These steps are necessary whether they're handled by you, an agency like us, or a DIY service platform (such as SquareSpace, Wix, etc):</p>
    <ol>
      <li>Registering a domain name through a trusted registrar</li>
      <li>Finding a cost-effective web host & plan</li>
      <li>Configuring DNS records to point to said web host</li>
      <li>Designing a coherent visual brand: colors, motifs, patterns</li>
      <li>Creating a site plan and if necessary, an information architecture</li>
      <li>Designing page-specific layouts</li>
      <li>Configuration of any necessary databases</li>
      <li>Configuration of proper population of the page with data</li>
      <li>Preventing security issues, like Cross-Site Request Forgery (CSRF)</li>
      <li><strong>...a lot more...</strong></li>
    </ol>
    <p>It takes a lot of work.</p>
    <p>At Adelie, we do it all for you. We'll handle the technical side, abstract away all the details, and allow you to focus on what matters: your business and your brand. And we'll do it at a rate that makes sense.</p>
    <p>Below, we'll break down our services even further.</p>
    <a href="#top">(Back To Top)</a><br><br>
    <!-- What is web design? -->
    <h4 id="webdesign" class="anchor-item"><strong>3. What is web design?</strong></h4>
    <hr>
    <p>Web design is an umbrella term that describes many subdisciplines: web graphic design, interface design, user experience design, and search engine optimization. It also the preparatory step before we move onto <a href="#webdev">Web Development.</a></p>
    <p>Designing a web page takes calculated foresight and planning. We don't just leap into the code - we first plan a detailed approach. Below, we'll go into a little more detail about our web design process.</p>
    <p>At Adelie, we don't start designing until we have a crystal-clear understanding of the client's needs.</p>
    <p>Once we have an idea of what the client needs, we're able to start ideating. We ask questions, like:</p>
    <ol>
      <li>
        <strong>What kind of interface would serve their purpose?</strong><br> Different layouts serve different purposes.
      </li>
      <li>
        <strong>Are there any media items?</strong> <br>If a page requires images or video, we have to plan for that.
      </li>
      <li>
        <strong>Who will be using the site?</strong><br>A younger demographic will likely be drawn to and open to different things than an older demographic.
      </li>
      <li>
        <strong>What should link to what?</strong><br>Web pages are connected through a network of links. The placement of these links compose a fluid experience through a website, and are critically important. Bad link placement alone can frustrate users and hurt your brand and sales.
      </li>
    </ol>
    <p>We ask these questions and more in order to begin to wrap our heads around your specific needs. By the way, this part of the process crosses over a bit with <a href="/services/branding">branding</a> and <a href="/services/graphic_design">graphic design.</a></p>
    <p>After some consideration, we get to work on a site map, which details your site's navigation architecture. We select fonts, compile necessary photos, and design any requested graphic design "stuff."</p>
    <p><strong>Finally,</strong> we'll begin wireframing the site using industry standard prototyping software like Adobe Illustrator, and Bohemian Coding's Sketch. These wireframes provide simplified representations of your page layouts. Using these wireframes, we'll either jump into the code or, if the site is complicated, we'll do extra mockups before starting to code.</p>
    <p>Once coding begins, it's officially the domain of "web development." Read more on that below.</p>
    <a href="#top">(Back To Top)</a><br><br>
    <!-- Web Development -->
    <h4 id="webdev" class="anchor-item"><strong>4. What is web development?</strong></h4>
    <hr>
    <p>Web development is also an umbrella term of sorts, but it essentially refers to the practice of <em>programming</em> and <em>developing</em> websites. It is the implementation step where we turn all of our planning, preparation, and assets into a functional website.</p>
    <p>At Adelie, we use a variety of tools to build a variety of websites. Different tools are used depending on the deadline, budget, complexity, and flexibility required. </p>
    <p>In the interest of brevity, we'll omit the technical details on this page, but if you want to learn more about our preferred tech stack, web hosts, registrars, etc, feel free to message us at contact@adelieweb.com, or by <a href="/contact">clicking here.</a></p>
    <a href="#top">(Back To Top)</a><br><br>
    <div class="boxed cta-box">
      <h2>Interested in web services?</h2>
      <p>Click below to contact us with questions or to request a quote.</p>
      <a href="/contact" class="button">Contact Us</a>
    </div>
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
      <li><b>We</b> analyze your specific needs regarding budget, site functionality, etc.</li>
      <li><b>You</b> will get a chance to look at our analysis and confirm that we're on the right track.</li>
      <li><b>We</b> will do research and plan a cost-effective solution for your needs.</li>
      <li><b>We</b> will send you a <em>Website Proposal</em> with cost and delivery estimates.</li>
      <li>Once the proposal is accepted, <b>we both</b> sign a contract that protects both parties.</li>
      <li>Once the downpayment is received, <b>we</b> (Adelie) begin developing!</li>
      <li>As work continues, you'll get a chance to offer constructive feedback.</li>
      <li>Once work is completed and full payment is received, your website goes live!</li>
      <li class="success"><strong>Hooray! All done! Go enjoy your brand new site!</strong></li>
      <li><em>At any time during this process, we can work with you to revise project parameters to meet budgetary/time restrictions.</em></li>
    </ol>
  </div>
  <!--Second section -->
  <div class="
    small-12 medium-4 medium-offset-1 columns cta-box boxed">
    <h3>Interested in web services?</h3>
    <hr class="mini-hr">
    <a class="button" href="contact">Request A Quote</a>
  </div>
  <hr class="show-for-small-only">
</div>
@endsection