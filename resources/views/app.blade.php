<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Adelie</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://use.typekit.net/ghk7jiq.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!--CDN for Font-Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
    @include('partials.navbar')
    <div id="site-container" class="container">
      @yield('content')
      <!--Footer -->
      <footer>
      @include('footer')
      </footer>
    </div>
    <!-- jQuery + Foundation Import -->

    <script src="/js/jquery.js"></script>
    <!-- Compressed JavaScript -->
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.1.1/foundation.min.js"></script>
    <script>$(document).foundation();</script>
  </body>
</html>