@extends('app')
@section('content')
<div class="row service-container large-uncollapse">
  <div class="
    small-12
    medium-5 medium-offset-1
    large-uncentered
    columns
    ">
    <h1 id="top" class="anchor-item">Services</h1>
    <a href="#top"><Back To Top></a>
    <h4>Web Development</h4>
    <div>
      <ul class="dropdown menu" data-dropdown-menu>
        <li><a href="#">Item 1</a></li>
        <li><a href="#">Item 2</a></li>
        <li><a href="#">Item 3</a></li>
        <li><a href="#">Item 4</a></li>
      </ul>
    </div>
    <hr>
    <h2>Table Of Contents</h2>
    <ul>
      <li><a href="#introduction">Introduction</a></li>
      <li><a href="#whatsittake">What does it take to make a site?</a></li>
      <li><a href="#webdesign">What is web design?</a></li>
      <li><a href="#webdevelopment">What is web development?</a></li>
    </ul>
    <hr>
    <h2 id="introduction" class="anchor-item">Introduction</h2>
    <p>The web is now a ubiquitous medium. It's at the tip of our fingers everywhere we go, accessible through smartphones, tablets, desktops, laptops - and now, even some televisions!</p>
    <p>Point is, the web has come and is here to stay. Naturally, businesses have long since leveraged the power of the web to showcase their offerings and their products and as a sales tool to empower their business strategies. </p>
    <p>A website allows you to:
      <ul>
        <li>Showcase your business</li>
        <li>Display your products</li>
        <li>Run promotional events</li>
        <li>Talk to your customers via a blog</li>
        <li>Show off photos</li>
        <li>Encourage newsletter signups</li>
        <li><strong>So much more.</strong></li>
      </ul>
      <p>But frankly, even though <em>visiting</em> a website is as easy as clicking a button, <em>creating</em> a website is not.</p>
      <a href="#top">(Back To Top)</a><br><br>
      <h2 id="whatsittake" class="anchor-item">So, what does it take to make a site?</h2>
      <p>We'll give you a glimpse into what we do here at Adelie. </p>
      <p>Here are some of the steps required in creating a well-designed, modern website. These steps are necessary whether they're handled by you, an agency like us, or a DIY service platform (such as SquareSpace, Wix, etc)):</p>
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
      <h4 id="webdesign" class="anchor-item"><strong>What is web design?</strong></h4>
      <p>Web design is an umbrella term that describes many subdisciplines: web graphic design, interface design, user experience design, and search engine optimization.</p>
      <p>Designing a web page takes calculated foresight and planning. You don't just leap into the code - you must first have a detailed approach.</p>
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
          <strong>What should link to what?</strong><br>Web pages are connected through a network of links. The placement of these links compose a fluid experience through a website, and are critically important. Bad link placement alone can hurt businesses, images, and sales.
        </li>
      </ol>
      <p>We ask these questions and more in order to begin to wrap our heads around your specific needs.</p>
      <a href="#top">(Back To Top)</a><br><br>
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