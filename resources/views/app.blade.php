<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <title>Adelie</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://use.typekit.net/ghk7jiq.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
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
  </body>
</html>