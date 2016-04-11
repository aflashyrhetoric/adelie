<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <title>Adelie</title>
    <!-- Facebook Open Graph Tags -->
    <meta property="og:url"                content="http:/www.adelieweb.com" />
    <meta property="og:title"                content="Adelie" />
    <meta property="og:description"        content="A full-service web development & visual branding studio based on Long Island, NY." />
    <meta property="og:image"              content="http://i.imgur.com/9L74AFD.png" />
    <meta property="fb:app_id" content="890969767676683">

    <link rel="stylesheet" href="/css/app.css">
    <script src="https://use.typekit.net/ghk7jiq.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!--CDN for Animate.CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <!--CDN for Font-Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
    <div id="site-container" class="container">
      @include('partials.navbar')
      @yield('content')
      <!--Footer -->
      <footer>
        @include('footer')
      </footer>
    </div>
    <!-- jQuery + Foundation Import -->
    <script src="/js/jquery.js"></script>
    <script src="/js/app.js"></script>
    <!-- Compressed JavaScript -->
    <script src="/js/vendor.js"></script>
    <script>$(document).foundation();</script>
    <!-- G:Analytics -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72650305-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
