@extends('app')
@section('content')
<div class="row meet-container">
  <div class="meet-header-container small-12 small-centered medium-12 columns">
    <h1 class="animated fadeInDown">meet the adelie team</h1>
    <h2 class="animated fadeIn">Introducing the people behind the name.</h2>
  </div>
  <!-- Kevin -->
  <div class="kevin team-member small-12 medium-6 large-5 columns boxed">
    <img class="animated fadeIn" id="kevin-photo" src="../img/ko_bw.JPG" alt="kevin">
    <h2 class="animated fadeIn">kevin</h2>
    <h4 class="animated fadeIn">web developer</h4>
    <hr>
    <p>Around seven years ago, a family friend showed me her website. It had been done professionally. It had flashing banners and everything was written in a cursive font. Things were scrolling all over the place. In the corner: a stolen, watermarked stock photo.</p>
    <p>I learned HTML and CSS and decided to redo her site for free. Granted, it was my first website and it wasn't amazing, but it was something.</p>
    <p>She saw my version of the site and smiled.</p>
    <p><strong>I was hooked!</strong></p>
    <p>Since then, web design and web development have become an obsession. Testing new techniques to optimize the development process, integrating unique technologies into our workflow, talking to amazing clients who yearn to grow their businesses - I love every moment of it. And I've learned tons in the past several years.</p>
    <p>I've learned what a website <em>can be</em>: anything from a personal journal to a public portfolio, a simple online business card to a primary source of income.</p>
    <p>I've also learned that small businesses tend to compromise for <em>cheap, low quality sites</em>, operating under the impression that a proper website will leave them bankrupt.</p>
    <p><strong>At Adelie, I work to dispel that notion.</strong></p>
    <p>So, let's talk. Let's build something great.</p>
    <p>If you're interested, please don't hesitate to contact me at <a href="mailto:koh@adelieweb.com">koh@adelieweb.com.</a></p>
    <hr>
    <a class="button" href="/services/webdev">Read More About Web Services</a>
  </div>
  <div class="yuna team-member small-12 medium-6 large-5 large-offset-1 columns boxed">
    <img class="animated fadeIn" id="yuna-photo" src="../img/yuna_bw.jpg" alt="yuna">
    <h2 class="animated fadeIn">yuna</h2>
    <h4 class="animated fadeIn">design & brand management</h4>
    <hr>
    <p> Born and raised in Long Island, New York to small business owners (an interior design & re-upholstery shop), I have developed a real appreciation for the time and effort it takes to making a dent in the community through your work. </p>
    <p>My parents’ hustle, their integrity, and their attention to detail yields more than just beautiful projects/jobs completed but results in the fidelity and support of their clients. Their work has become a grounds to build connections with people and I have always found this very beautiful. </p>
    <p>I studied psychology, art, and [business] ethics and have integrated my knowledge in these three areas to pursue my own small business venture in the form of Adelie’s design & branding services. </p>
    <p>It brings me joy to work with clients that are grinding hard to do what they love! I love meeting new people, hearing new stories, and collaborating with new minds to churn out beautiful things! It is super exciting to be able to play a small part in anyone’s success with my design work. </p>
    <p>When I’m not working on projects, I am seriously contemplating going to the gym, working on some modern calligraphy projects, maintaining my Etsy store, or looking for new DIY projects to try. But mostly, I love making beautiful things and learning new ways to make more beautiful things. </p>
    <p>And yes, sometimes I do make it to the gym… for Zumba. </p>
    <p>If you're interested, please don't hesitate to contact me at <a href="mailto:yuna@adelieweb.com">yuna@adelieweb.com.</a></p>
    <hr>
    <a class="button" href="/services/graphic_design">Read More About Graphic Design Services</a>
    <a class="button" href="/services/branding">Read More About Branding Services</a>
  </div>

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
        <a href="/about">Or, read about Adelie!</a>
    </div>
</div>
@endsection